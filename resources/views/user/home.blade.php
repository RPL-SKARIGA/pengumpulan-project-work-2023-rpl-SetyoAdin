@extends('layouts.user')
@section('content')
<header class="masthead">
    <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
        <div class="d-flex justify-content-center">
            <div class="text-center">
                <h1 class="mx-auto my-0 text-uppercase">Mountnesia</h1>
                <h2 class="text-white-50 mx-auto mt-2 mb-5">Adalah website gratis untuk mendaftar pendakian.</h2>
                <a class="btn btn-primary" href="/insert">Daftar</a>
                <a class="btn btn-primary" href="/tutorial">Tutorial</a>
            </div>
        </div>
    </div>
</header>
<!-- About-->
<section class="about-section text-center" id="about">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8">
                <h2 class="text-white mb-4">Mountnesia Website</h2>
                <p class="text-white-50">
                    Pendakian gunung adalah kegiatan yang semakin populer di kalangan masyarakat, baik sebagai bentuk rekreasi maupun tantangan fisik.
                    Dengan meningkatnya minat ini, diperlukan sebuah platform yang dapat memudahkan pendaki dalam melakukan pendaftaran. 
                    Oleh karena itu, aplikasi "pendaftaran Pendakian Gunung" hadir sebagai solusi untuk memudahkan para pendaki.
                </p>
            </div>
        </div>
    </div>
    <img style="width: 100%; height: auto; display: block; margin: 0 auto;" src="semeru.png" alt="Mount Semeru" />
</section>

<!-- Projects-->
<section class="projects-section bg-light" id="projects">
    <div class="container px-4 px-lg-5">
        <!-- Featured Project Row-->
        <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
            <div class="col-xl-8 col-lg-7">
                <img class="img-fluid mb-3 mb-lg-0" src="mendaki.webp" height="400" alt="..." />
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="featured-text text-center text-lg-left">
                    <h4>Pendakian</h4>
                    <p class="text-black-50 mb-0">Adalah kegiatan fisik mendaki gunung atau ketinggian alami lainnya. Ini seringkali merupakan aktifitas rekreasi atau petualangan yang melibatkan pendaki, baik secara individu maupun dalam kelompok, untuk mencapai puncak atau titik tertentu pada suatu gunung atau puncak alam lainnya.</p>
                </div>
            </div>
        </div>
        
        <!-- Project One Row-->
        <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
            <div class="col-lg-6"><img class="img-fluid" src="Keselamatan.jpg" alt="..." /></div>
            <div class="col-lg-6">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-left">
                            <h4 class="text-white">Keselamatan dalam mendaki?</h4>
                            <p class="mb-0 text-white-50">Keselamatan dalam mendaki gunung melibatkan pengetahuan rute, peralatan, komunikasi, kesehatan, dan keberlanjutan. Penting untuk mendaki dengan kelompok, menjaga lingkungan, dan siap menghadapi situasi darurat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project Two Row-->
        <div class="row gx-0 justify-content-center">
            <div class="col-lg-6"><img class="img-fluid" src="Petualang.jpg" alt="..." /></div>
            <div class="col-lg-6 order-lg-first">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-white">Petualangan</h4>
                            <p class="mb-0 text-white-50">Petualangan adalah suatu kegiatan yang melibatkan eksplorasi, penjelajahan, atau perjalanan ke tempat-tempat baru yang tidak biasa atau tidak familiar. Biasanya, petualangan melibatkan risiko, ketidakpastian, dan pengalaman yang menantang secara fisik maupun mental. Aktivitas petualangan dapat mencakup berbagai hal, mulai dari mendaki gunung, menjelajahi hutan, berlayar di laut, hingga perjalanan lintas negara.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Signup-->
<!-- Contact-->
<section class="contact-section bg-black">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5">
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Instagram</h4>
                        <hr class="my-4 mx-auto" />
                        <div class="small text-black-50">styoadn_</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-envelope text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Email</h4>
                        <hr class="my-4 mx-auto" />
                        <div class="small text-black-50"><a href="#!">setyoadin207@gmail.com</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-mobile-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Number Phone</h4>
                        <hr class="my-4 mx-auto" />
                        <div class="small text-black-50">+62 857-4913-1378</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="social d-flex justify-content-center">
            <a class="mx-2" href="https://www.instagram.com/styoadn_/"><i class="fab fa-instagram"></i></a>
            <a class="mx-2" href=""><i class="far fa-envelope"></i></a>
            <a class="mx-2" href=""><i class="fab fa-whatsapp"></i></a>
        </div>
    </div>
</section>
    @endsection