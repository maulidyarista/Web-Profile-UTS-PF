@extends('layout.master')

@section('content')

    <!--Home section start-->
    <section class="home py-5" id="home">
        <div class="container-lg">
            <div class="row min-vh-100 align-items-center align-content-center">
                <div class="col-md-6 mt-5 mt-md-0">
                    <div class="home-img text-center">
                        <img src="img/profile.png" class="rounded-circle mw-100" alt="profile.img">
                    </div>
                </div>
                <div class="col-md-6 mt-5 mt-md-0 order-md-first">
                    <div class="home-text">
                        <p class="text-muted mb-1">Hello I'm</p>
                        <h1 class="text-uppercase fs-1 fw-bold" style="color: #FFCBA4;">Maulidya Rista Yuniar</h1>
                        <h2 class="fs-4" style="color: #94553D;">a Informatics Engineering Student</h2>
                        <p class="mt-4 text-muted">Website ini berisikan profile diri saya, potret diri, 
                            aktivitas, dan pekerjaan saya sebagai mahasiswa vokasi jurusan
                            Teknik Informatika di Universitas Negeri Surabaya.</p>
                        <a href="#portofolio" class="btn px-3 mt-3" style="background-color: #FFCBA4; color: white;">My Activities</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Home section end-->

    <!-- About section start-->
    <section class="about py-5" id="about">
        <div class="container-lg py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="fw-bold mb-5">About Me</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="about-text">
                        <h3 class="fs-4 mb-3">A Informatics Engineering Student</h3>
                        <p class="text-muted">Di dalam jurusan teknik informatika mempelajari hal yang akan 
                            terfokus pada pemrograman, teknologi jaringan komputer, pengembangan perangkat lunak, dan sistem informasi. 
                            Untuk program studi D4 Manajemen Informatika sendiri, kurang lebih juga mempelajari hal tersebut.</p>
                    </div>
                    <div class="row text-center text-uppercase my-3">
                        <div class="col-sm-4">
                            <div class="fact-item">
                                <h4 class="fs-1 fw-bold">5</h4>
                                <p class="text-muted">current semester</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="fact-item">
                                <h4 class="fs-1 fw-bold">107</h4>
                                <p class="text-muted">current credits</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="fact-item">
                                <h4 class="fs-1 fw-bold">10</h4>
                                <p class="text-muted">Project Completed</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-flex align-items-center">
                            <a href="https://drive.google.com/file/d/1bCYDCQKtd93HlxH5RF4aYuQdHSf7H0KQ/view?usp=sharing" class="btn px-3 me-5" style="background-color: #FFCBA4; color: white;">Download CV</a>
                            <div class="social links">
                                <a href="https://www.instagram.com/maulidyarista/" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.linkedin.com/in/maulidya-rista-yuniar-b5268b215/" class="text-dark me-2"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.youtube.com/channel/UC4puOgnsPF1b_YzmNz7daLg/featured" class="text-dark me-2"><i class="fab fa-youtube"></i></a>
                                <a href="https://github.com/maulidyarista" class="text-dark me-2"><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5 mt-md-0">
                    <div class="skill-item mb-4">
                        <h3 class="fs-6">Html</h3>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 90%; background-color: #94553D;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" ></div>
                        </div>
                    </div>
                    <div class="skill-item mb-4">
                        <h3 class="fs-6">Css</h3>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 80%; background-color: #94553D;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" ></div>
                        </div>
                    </div>
                    <div class="skill-item mb-4">
                        <h3 class="fs-6">Laravel</h3>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 70%; background-color: #94553D;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" ></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <h3 class="fs-6">Bootstrap</h3>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 90%; background-color: #94553D;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" ></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About section end-->

    <!--Services section start-->
    <section class="services py-5" id="services">
        <div class="container-lg py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="fw-bold mb-5">What I Do</h2>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-item shadow-sm p-4 rounded bg-white">
                        <div class="icon my-3 fs-2" style="color: #FFCBA4;">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3 class="fs-5 py-2" style="color:#94553D;">Web Development</h3>
                        <p class="text-muted">Bahasa Pemrograman, Framework, Database.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-item shadow-sm p-4 rounded bg-white">
                        <div class="icon my-3 fs-2" style="color: #FFCBA4;">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h3 class="fs-5 py-2" style="color:#94553D;">Creative Design</h3>
                        <p class="text-muted">Game Development, UI/UX Design, Computer Graphic.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-item shadow-sm p-4 rounded bg-white">
                        <div class="icon my-3 fs-2" style="color: #FFCBA4;">
                            <i class="fas fa-image"></i>
                        </div>
                        <h3 class="fs-5 py-2" style="color:#94553D;">Photoshop</h3>
                        <p class="text-muted">Editing, Vector Art Design, Icons, Graphics Design.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Services section end-->

    <!--Portofolio section start-->
    <section class="portofolio bg-white py-5" id="portofolio">
        <div class="container-lg py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="fw-bold mb-5">Latest Activities</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="portofolio-item">
                        <img src="img/1.jpg" class="w-100 img-thumbnail" alt="portofolio-item">
                        <h3 class="text-capitalize fs-5 my-2">curriculum vitae online</h3>
                        <p class="mb-4"><a href="https://youtu.be/-F11eqaYkI4" class="text-decoration-none">Live Demo</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="portofolio-item">
                        <img src="img/2.png" class="w-100 img-thumbnail" alt="portofolio-item">
                        <h3 class="text-capitalize fs-5 my-2">bank sampah online</h3>
                        <p class="mb-4"><a href="https://youtu.be/kAwfIxR7ftk" class="text-decoration-none">Live Demo</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="portofolio-item">
                        <img src="img/3.jpg" class="w-100 img-thumbnail" alt="portofolio-item">
                        <h3 class="text-capitalize fs-5 my-2">ruang & vektor eigen</h3>
                        <p class="mb-4"><a href="https://youtu.be/JahfioY-VmM" class="text-decoration-none">Live Demo</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="portofolio-item">
                        <img src="img/4.PNG" class="w-100 img-thumbnail" alt="portofolio-item">
                        <h3 class="text-capitalize fs-5 my-2">IG thrift shop</h3>
                        <p class="mb-4"><a href="https://www.instagram.com/bownsky.thrift/" class="text-decoration-none">Go to Page</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="portofolio-item">
                        <img src="img/5.jpg" class="w-100 img-thumbnail" alt="portofolio-item">
                        <h3 class="text-capitalize fs-5 my-2">Graphic Design</h3>
                        <p class="mb-4"><a href="https://pin.it/4gwhAgh" class="text-decoration-none">Go to Page</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="portofolio-item">
                        <img src="img/6.jpg" class="w-100 img-thumbnail" alt="portofolio-item">
                        <h3 class="text-capitalize fs-5 my-2">IG Latest Post</h3>
                        <p class="mb-4"><a href="https://www.instagram.com/p/CN7ekDtp-nK/?utm_source=ig_web_button_share_sheet" class="text-decoration-none">Go to Page</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Portofolio section end-->

    <!--Freelance section start-->
    <section class="freelance-available py-5" style="background-color: #94553D;">
        <div class="container-lg py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <p class="text-light fs-5">Do you have any project? or Want to collaborate?</p>
                    <h2 class="fs-1 text-white mb-4">I'm Available For Freelancer Projects</h2>
                    <a href="#contact" class="btn btn-outline-light">Hire Me</a>
                </div>
            </div>
        </div>
    </section>
    <!--Freelance section end-->

    <!--Contact section start-->
    <section class="contact py-5" id="contact">
        <div class="container-lg py-4">
            <div class="row justify-content-center">
                <div class="col=lg-8">
                    <div class="section-title text-center">
                        <h2 class="fw-bold mb-5">Contact Me</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="contact-item d-flex mb-3">
                        <div class="icon fs-4" style="color: #FFCBA4;">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="text ms-3">
                            <h3 class="fs-5">Email</h3>
                            <p class="text-muted">maulidyarista21@gmail.com</p>
                        </div>
                    </div>
                    <div class="contact-item d-flex mb-3">
                        <div class="icon fs-4" style="color: #FFCBA4;">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <div class="text ms-3">
                            <h3 class="fs-5">Whatsapp</h3>
                            <p class="text-muted">+62 878 6160 ****</p>
                        </div>
                    </div>
                    <div class="contact-item d-flex mb-3">
                        <div class="icon fs-4" style="color: #FFCBA4;">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="text ms-3">
                            <h3 class="fs-5">Visit</h3>
                            <p class="text-muted">Universitas Negeri Surabaya Ketintang, Gedung A10</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="contact-form">
                        <form>
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <input type="text" placeholder="Your Name" class="form-control form-control-lg
                                    fs-6 border-0 shadow-sm">
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <input type="text" placeholder="Your Email" class="form-control form-control-lg
                                    fs-6 border-0 shadow-sm">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 mb-4">
                                    <input type="text" placeholder="Subject" class="form-control form-control-lg
                                    fs-6 border-0 shadow-sm">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 mb-4">
                                    <textarea rows="5" placeholder="Your Message" class="form-control form-control-lg
                                    fs-6 border-0 shadow-sm"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn px-3" style="background-color: #FFCBA4; color: white;">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact section end-->
@stop