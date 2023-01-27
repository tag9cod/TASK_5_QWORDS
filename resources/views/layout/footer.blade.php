<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="footer-newsletter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h4>Temukan Jawaban Disini</h4>
                    <p>Private Data Center, Support pelanggan 24 jam, Jaminan Ekstra Keamanan, Server Uptime dengan harga terjangkau</p>
                </div>
                <div class="row feature-icons" data-aos="fade-up">
                    <div class="row">
                        <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                            <img src="{{url('assets/img/garansi.svg')}}" class="img-fluid p-4" alt="">
                        </div>

                        <div class="col-xl-8 d-flex content">
                            <div class="row align-self-center gy-4">
                                <h5>Garansi 30 Hari Uang Kembali</h5>
                                <p>Untuk menjaga kepuasan pelanggan, kami memberikan garansi uang kembali yang berlaku hingga 30 hari setelah hosting aktif.</p>
                                <a href="08041808888" class="btn-buy" type="button"><h3><i class="ri-hand-coin-line"></i> Dapatkan Sekarang</h3></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-top">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="" class="logo d-flex align-items-center">
                        <h5>PT Qwords Company International</h5>
                    </a>
                    <p>Cloud Web Hosting Indonesia. Domain & hosting terbaik dengan akses cepat yang didukung layanan support 24/7.</p>
                    <div class="social-links mt-3">
                        <a href="https://twitter.com/qwordsdotcom" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="https://web.facebook.com/qwordsdotcom?_rdc=1&_rdr" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/qwordsdotcom/" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="https://www.youtube.com/user/qwordsvideo" class="youtube"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Mengenai Kami</h4>
                    <ul>
                        @foreach($fut as $fut)
                        <li><a href="{{ $fut['link'] }}">{{ $fut['title'] }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>MSA / SLA / AUP</h4>
                    <ul>
                        @foreach($fut1 as $fut1)
                        <li><a href="{{ $fut1['link'] }}">{{ $fut1['title'] }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Layanan</h4>
                    <ul>
                        @foreach($fut2 as $fut2)
                        <li><a href="{{ $fut2['link'] }}">{{ $fut2['title'] }}</a></li>
                        @endforeach
                    </ul>
                </div>

                @foreach($fut3 as $fut3)
                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>{{ $fut3['title'] }}</h4>
                    <p>{{ $fut3['alamat'] }}</p>
                    <h6><i class="bi-telephone"></i> {{ $fut3['telp'] }}</h6>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy;  <strong><span>PT Qwords Company International</span></strong>. 
            <p>All Rights Reserved</p>
        </div>
        <div class="credits">
            By Tri Adhi Gunawan - VIX Rakamin Academy.
        </div>
    </div>
</footer>
<!-- End Footer -->