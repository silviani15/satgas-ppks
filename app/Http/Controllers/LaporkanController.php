<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Models\Pengaduan;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class LaporkanController extends Controller
{

    public function storeStep1(){
        return view('form.form1', [
            'title' => 'Step 1',
            'active' => 'Laporkan!'
        ]);
    }
    
    public function processStep1(Request $request){

        
        $data_step_1 = $request->validate(([
            'apakah_kamu' => 'required',
            'individu_terkena_dampak' => 'required',
            'berhubungan_dengan_ukdw' => 'required'
        ]));

        // dd($data_step_1);

        Session::put('langkah_1_data', $data_step_1 );

        return redirect()->route('langkah2',[
            'title' => 'Step 1',
            'active' => 'Laporkan!'
        ]);
        
    }

    public function storeStep2(){
        return view('form.form2', [
            'title' => 'Step 2',
            'active' => 'Laporkan!'
        ]);
    }
    
    public function processStep2(Request $request)
    {
        $data_step_2 = $request->validate([
            'tempat_insiden' => 'required',
            'lokasi_kejadian' => 'required',
            'waktu_peristiwa' => 'required',
            'kuantitas_insiden' => 'required',
            'apakah_masih_terjadi' => 'required',
            'uraian_kejadian' => 'required'
        ]);

        Session::put('langkah_2_data', $data_step_2);

        return redirect()->route('langkah3',[
            'title' => 'Step 2',
            'active' => 'Laporkan!'
        ]);
    }


    public function storeStep3(){
        $layanan_dicoba = [
            'Unit Pelaporan Pelecehan Seksual', 'Poliklinik UKDW', 'Kepolisian', 'Belum ada satupun dari Layanan diatas', 'Tidak yakin/ Tidak tahu (Saya melaporkan atas nama orang lain)', 'Akan mempertimbangkan pilihan setelah diberi saran', 
        ];
        
        $tindakan_dicoba= ['Menghubungi dan memberi tahu pilihan apa yang tersedia untuk Anda*', 'Memberi tahu secara detail Layanan khusus yang dapat membantu Anda*', 'Jika peristiwa yang terjadi melibatkan Mahasiwa atau Staff, dan Anda merupakan Mahasiswa atau Staff UKDW, mendiskusikan dengan Anda untuk meminimalisir keterlibatan pihak lain*', 'Memberi informasi untuk membantu Anda membuat laporan kepada Polisi.', 'Merujuk saya / mereka ke Layanan Penasihat Hukum (Misal. Pengacara)', 'Belum ada tindakan, sampai Anda mendapat lebih banyak pilihan informasi tindakan yang akan dilakukan', 'Tidak Yakin/Tidak tahu (Saya melaporkan atas nama Orang lain)', 'Tidak ada tindakan'];
        return view('form.form3', [
            'title' => 'Step 3',
            'active' => 'Laporkan!',
            'layanan_dicoba' => $layanan_dicoba,
            'tindakan_dicoba' => $tindakan_dicoba
        ]);
    }
    
    public function processStep3(Request $request)
    {
        $data_step_3 = $request->validate(([
            'layanan_dicoba.*' => 'nullable|string',
            'tindakan_dicoba.*' => 'nullable|string',
        ]));

        Session::put('langkah_3_data', $data_step_3 );

        return redirect()->route('langkah4',[
            'title' => 'Step 3',
            'active' => 'Laporkan!'
        ]);
        
    }

    public function storeStep4(){
        return view('form.form4', [
            'title' => 'Step 4',
            'active' => 'Laporkan!'
        ]);
    }

    public function processStep4(Request $request)
    {

        $data_step_4 = $request->validate(([
            'orang_yang_bertanggungjawab' => 'nullable|string',
            'nama_terlapor' => 'nullable|string',
            'nomor_telepon_terlapor' => 'nullable|string',
            'email_terlapor' => 'nullable|email',
            'identitas_lainnya_terlapor' => 'nullable|string',
            'alasan_merahasiakan' => 'nullable|string',
        ]));

        Session::put('langkah_4_data', $data_step_4 );

        return redirect()->route('langkah5',[
            'title' => 'Step 4',
            'active' => 'Laporkan!'
        ]);
        
    }

    public function storeStep5(){
        return view('form.form5', [
            'title' => 'Step 5',
            'active' => 'Laporkan!'
        ]);
    }

    // Langkah 5
    public function processStep5(Request $request)
    {

        $data_step_5 = $request->validate(([
            'nama_pelapor' => 'nullable|string',
            'jenis_kelamin' => 'nullable',
            'usia_pelapor' => 'nullable|numeric',
            'nomor_telepon_pelapor' => 'nullable|string',
            'email_pelapor' => 'required|email',
            'dihubungi_lewat' => 'nullable|string',
            'dihubungi_lewat_lainnya' => 'nullable|string',
        ]));

        // error_log(json_encode($data_step_5['email_pelapor']));

        Session::put('langkah_5_data', $data_step_5 );

        // error_log("berhasi step 5");
        

        return redirect()->route('langkah6',[
            'title' => 'Step 5',
            'active' => 'Laporkan!'
        ]);
    }

    public function sendOTP(Request $request)
    {
        // error_log("berhasil");
    // Mendapatkan alamat email dari Langkah 5
    $email_pelapor = Session::get('langkah_5_data.email_pelapor');
    // error_log($email_pelapor);
    
    // Generate OTP
    $otp = strval(random_int(100000, 999999));

    // Kirim email dengan OTP
    // Mail::raw("Kode OTP Anda: $otp", function($message) use ($email_pelapor) {
    //     $message->to($email_pelapor)->subject('Kode OTP');
    // });

    // Kirim email dengan menggunakan template blade
    Mail::send('emails.otp', ['otp' => $otp], function($message) use ($email_pelapor) {
        $message->to($email_pelapor)->subject('SATGAS PPKS UKDW - Kode OTP');
    });

    // Simpan OTP di session untuk verifikasi nantinya
    Session::put('otp', $otp);

    return redirect()->back()->with('success', 'Kode OTP telah dikirim ke email Anda.');
    }

    public function storeStep6(){
        return view('form.form6', [
            'title' => 'Step 6',
            'active' => 'Laporkan!'
        ]);
    }

    public function verifyOTP(Request $request)
    {
    $kode_otp = $request->input('kode_otp');
    $otp_dikirim = Session::get('otp');

    // Memeriksa apakah kode OTP yang dimasukkan sesuai dengan yang dikirimkan
    if ($otp_dikirim && $kode_otp == $otp_dikirim) {
        // Jika cocok, lanjutkan ke langkah selanjutnya
        $valid_until = now()->addMinutes(1);
        $kode_tracking = $this->generateTrackingCode();

        // Kirim email kode tracking
        try {
            $email_pelapor = session('langkah_5_data.email_pelapor');
            // Mail::raw("Kode Tracking Aduan Anda: $kode_tracking", function($message) use ($email_pelapor) {
            //     $message->to($email_pelapor)->subject('Kode Tracking Aduan');
            // });

            $kode_tracking_data = ['kode_tracking' => $kode_tracking];
            Mail::send('emails.kodTrack', $kode_tracking_data, function($message) use ($email_pelapor, $kode_tracking) {
                $message->to($email_pelapor)->subject('SATGAS PPKS UKDW - Aduan Baru: ' . $kode_tracking);
            });            
            
            
        } catch (\Exception $e) {
            // Tangani kesalahan pengiriman email kode tracking
            return redirect()->back()->with('error', 'Gagal mengirim email kode tracking.');
        }

        // Redirect ke halaman tracking dengan pesan sukses
        return redirect()->route('trackingAduan')->with('success', 'Berhasil mendapatkan kode trackingan.');
        
    } else {
        // Jika tidak cocok, kembalikan pesan error
        return redirect()->back()->with('error', 'Kode OTP tidak valid.');
    }
    }

    private function generateTrackingCode() {
        // Menghasilkan 3 huruf acak
        $random_chars = strtoupper(substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 3));
        // Mendapatkan tanggal hari ini dalam format YYMMDD
        $today = now()->format('ymd');
        // Menghasilkan 4 karakter acak
        $random_digits = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);
        // Menggabungkan semua komponen untuk membentuk kode tracking
        $tracking_code = $random_chars . $today . $random_digits;

        return $tracking_code;
    }
    
    public function processStep6(Request $request)
    {
        // error_log("mulai step 6");\
        
        $data_step_6 = $request->validate(([
            'file_lampiran' => 'nullable|max:1024',
            'kode_otp' => 'required|string',
            'agree_terms' => 'required|accepted',
        ]));

        // dd($data_step_6);

        Session()->put('langkah_6_data', $data_step_6);
        // session()->put('langkah_6_data', $request->all());
        // $laporan = Laporkan::create(array_merge($dataLangkahSebelumnya, $request->all()));
        
        // // dd($request);
        // error_log("berhasi step 6");

        // Setelah berhasil, buat kode tracking
        $kode_tracking = $this->generateTrackingCode();

        
        // Simpan kode tracking ke dalam session
        Session::put('kode_tracking', $kode_tracking);
        
        try {
            $email_pelapor = session('langkah_5_data.email_pelapor');
            $kode_tracking_data = ['kode_tracking' => $kode_tracking];
            
            // dd($kode_tracking_data);

            // Menggunakan template email 'emails.kodTrack' untuk mengirim kode pelacakan
            Mail::send('emails.kodTrack', $kode_tracking_data, function($message) use ($email_pelapor, $kode_tracking) {
                $message->to($email_pelapor)->subject('SATGAS PPKS UKDW - Aduan Baru: ' . $kode_tracking);
            });
            
            // Redirect ke halaman tracking dengan pesan sukses
            // return redirect()->route('trackingAduan')->with('success', 'Berhasil mendapatkan kode tracking.');
        
        } catch (\Exception $e) {
            // Tangani kesalahan pengiriman email
            return redirect()->back()->with('error', 'Gagal mengirim email kode tracking.');
        }
    
        // if ($request->hasFile('file_lampiran')) {
        //     $validatedData['file_lampiran'] = $request->file('file_lampiran')->store('lampiran');
        // }

        // for($i=0; $i < count($request->file_lampiran); $i++){
        //     $nama_file = $request->file_lampiran[$i]->getClientOriginalName();
        //     Storage::putFileAs($directory,$request->file_lampiran[$i],$nama_file);
        // }
        
        $Key1Data = session('langkah_1_data',[]);
        // error_log($Key1Data);
        // dd($Key1Data);
        $Key2Data = session('langkah_2_data',[]);
        // error_log($Key2Data);
        // dd($Key2Data);
        $Key3Data = session('langkah_3_data',[]);
        // error_log($Key3Data);
        // dd($Key3Data);
        $Key4Data = session('langkah_4_data',[]);
        // error_log($Key4Data);
        // dd($Key4Data);
        $Key5Data = session('langkah_5_data',[]);
        // error_log($Key5Data);
        // dd($Key5Data);
        $Key6Data = session('langkah_6_data',[]);
        // error_log($Key6Data);
        // dd($Key6Data);
        $mergedData = array_merge(
            $Key1Data,
            $Key2Data,
            $Key3Data,
            $Key4Data,
            $Key5Data,
            $Key6Data
        );

        $mergedData['kode_tracking'] = Session::get('kode_tracking');
        
        $string_layanan_dicoba = implode(", ",$mergedData["layanan_dicoba"]);
        $string_tindakan_dicoba = implode(", ",$mergedData["tindakan_dicoba"]);
        
        $mergedData["layanan_dicoba"] = $string_layanan_dicoba;
        $mergedData["tindakan_dicoba"] = $string_tindakan_dicoba;
        
        // dd($mergedData);


        $directory = 'lampiran';
        Storage::makeDirectory($directory);
        
        // Simpan file lampiran ke dalam storage
        if ($request->files) {
            foreach ($request->files as $file) {
                $nama_file = $file->getClientOriginalName();
                // $validatedData['file_lampiran'] = $file->store($directory, 'public');
                // $path = Storage::disk('public')->putFileAs($directory, $file, $nama_file);
                $path = Storage::disk('public')->putFileAs('', $file, $nama_file);
                // $path = Storage::putFileAs($directory, $file, $nama_file);
                // $mergedData['file_lampiran'] = $path;
                error_log("Path: " . $path);
            }
        }

        // error_log(json_encode($mergedData));
        
    // Simpan data aduan ke dalam database

    Pengaduan::create($mergedData);

    // Redirect pengguna ke halaman tracking setelah aduan berhasil diproses
    return redirect()->route('trackingAduan');
    }

    
}