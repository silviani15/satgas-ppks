@extends('layout.main')

<link rel="stylesheet" href="css/index.css" />
<br><br><br>
<p>
    <img src="{{ asset('img/profil/pengantar.png') }}" alt=""
        style="width: 100%; height: 550px; object-fit: cover" />
</p>
<div class="container">
    <table class="table" style="margin-top: 5px;">
        <tr>
            <th style="padding-top: 40px; background-color: #ffffff !important; text-align: left; font-size: 30px;">
                Pengantar</th>
        </tr>
        <tr>
            <td
                style="text-align: justify; background-color: #ffffff !important; padding: 20px; line-height: 30px; padding-bottom: 60px">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kalimat pertama dalam Undang-Undang Dasar 1945 menyebutkan
                bahwa kemerdekaan adalah hak segala bangsa namun yang perlu disadari bahwa di era modern ini yang
                menjadi penjajah bukanlah bangsa asing melainkan penjajahan terus berlangsung karena adanya relasi
                kuasa yang timpang. Kekerasan seksual di lingkup perguruan tinggi adalah salah satu bentuk dari
                penjajahan itu sendiri karena merenggut kemerdekaan setiap civitas academica untuk mengembangkan
                keilmuannya dengan aman dan nyaman. Permendikbud Ristek No. 30 Tahun 2021 tentang Pencegahan dan
                Penanganan Kekerasan Seksual di Lingkungan Perguruan Tinggi adalah bentuk serius pemerintah untuk
                melindungi civitas academica dalam rangka menciptakan kampus aman yang bebas dari tindakan kekerasan
                seksual. Universitas Kristen Duta Wacana sebagai institusi pendidikan tinggi Kristen sudah
                seharusnya bersikap tegas terkait kekerasan seksual ini. Oleh karena itu, dokumen ini merupakan
                bentuk keseriusan UKDW dalam mencegah sekaligus menangani tindakan intoleran kekerasan seksual. <br>

                <br>
                Salam, <br>

                Tim Satgas PPKS UKDW
            </td>
        </tr>
    </table>
</div>
@include('main.footer')
