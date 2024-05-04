@extends('layout.main')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection


<footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Links  -->
    <section class="bg-footer">
        <div class="container text-center text-md-start">
            <!-- Grid row -->
            <div class="row mt-0" style="height: 320px">
                <!-- Grid column 1 -->
                <div class="col-md-1 col-lg-4 col-xl-3 mx-auto mb-4 text-footer">
                    <!-- Content -->
                    <div class="col-12 d-flex align-items-center">
                        <img src="{{ asset('img/logoppks.png') }}" alt="" width="45" height="45"
                            class="mt-2 mb-2 bg-light" />
                        <h6 class="text-uppercase mb-0 ms-2 custom-footer-caption">
                            <span class="d-block mb-1" style="font-weight: bold; font-size: 17px">Satgas PPKS
                                UKDW</span>
                            <span class="d-block paragraph mt-1">#UKDWKampusAman</span>
                        </h6>
                    </div>

                    <p style="padding-top: 20px">
                        <i class="fa fa-home" style="font-size: 28px"></i>
                        Jl. Dr. Wahidin Sudirohusodo No.5-25, Kotabaru, Kec. Gondokusuman, Kota Yogyakarta, Daerah
                        Istimewa Yogyakarta | Kode Pos 55224
                    </p>
                </div>

                <!-- Grid column 2 -->
                <div class="col-md-2 col-lg-2 col-xl-3 mx-auto mb-4 text-footer" style="padding-left: 20px">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4" style="padding-top: 10px">Hubungi :</h6>
                    <p><i class="fa fa-phone" style="font-size: 18px"></i> +62 821-4368-8270</p>
                    <p><i class="fa fa-envelope" style="font-size: 18px"></i> ppks@staff.ukdw.ac.id</p>
                    <p><i class="fa fa-clock-o" style="font-size: 18px"></i> 08.00 - 15.00 WIB</p>
                    <p>
                    <h6 class="text-uppercase fw-bold mb-4">Sosial Media :</h6>
                    <a href="https://www.instagram.com/ppks.ukdw?igsh=dGN3dTY1dTIwNmtq" target="_blank"
                        class="me-4 text-reset"><i class="fa fa-instagram" style="font-size:40px;"></i></a>
                    <a href="https://wa.me/6282143688270" target="_blank" class="me-4 text-reset"><i
                            class="fa fa-whatsapp" style="font-size: 40px;"></i></a>
                    <a href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=ppks@staff.ukdw.ac.id"
                        target="_blank" class="me-4 text-reset"><i class="fa fa-envelope"
                            style="font-size: 39px;"></i></a>
                    </p>
                </div>

                <!-- Grid column 3 -->
                <div class="col-md-3 col-lg-3 col-xl-5 mx-auto mb-md-0 mb-4 text-footer">
                    <!-- Google map -->
                    <h>Detail Lokasi</h>
                    <div id="map-container-google-1" class="z-depth-1-half map-container" style="padding-top: 5px">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.0355566032536!2d110.37614270446878!3d-7.786054992201322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5828f6fb7ef7%3A0xb710cc588f40770e!2sUniversitas%20Kristen%20Duta%20Wacana!5e0!3m2!1sen!2sid!4v1708181353848!5m2!1sen!2sid"
                            width="450" height="230" style="border: 0" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright -->
        <div class="text-center p-4 copyright-custom">© 2024 Copyright : Satgas Pencegahan Penanganan Kekerasan Seksual
            di
            Universitas Kristen Duta Wacana</div>
    </section>

</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
