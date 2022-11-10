<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>My Porto</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('Assets-ibrahim/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('Assets-ibrahim/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('Assets-ibrahim/css/vendor.css') }}">

    <!-- script
    ================================================== -->
    <script src="{{ asset('Assets-ibrahim/js/modernizr.js') }}"></script>
    <script src="{{ asset('Assets-ibrahim/js/pace.min.js') }}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{ asset('Assets-ibrahim/images/portfolio-logo.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('Assets-ibrahim/images/portfolio-logo.ico') }}
    " type="image/x-icon">

    <!-- font poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="index.html"><img src="{{ asset('Assets-ibrahim/images/portfolio-logo.png') }}" alt="Homepage" style="margin-top: 10px; height: 60px;"></a>
        </div>

        <nav class="header-nav-wrap">
            <ul class="header-nav">
                <li class="current"><a class="smoothscroll"  href="#home" title="home">Home</a></li>
                <li><a class="smoothscroll"  href="#about" title="about">About</a></li>
                <li><a class="smoothscroll"  href="#works" title="works">Works</a></li>
            </ul>
        </nav>

        <a class="header-menu-toggle" href="#0"><span>Menu</span></a>

    </header> <!-- end s-header -->


   <!-- home
   ================================================== -->
   <section id="home" class="s-home page-hero target-section" data-parallax="scroll" data-image-src="{{ asset('Assets-ibrahim/images/1.jpg') }}" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h3>Hello There</h3>

                <h1>
                    I'm Ibrahim Khalish.
                </h1>
                <div class="keahlian">
                    <p>FRONT-END DEVELOPER</p>
                    <p>BACK-END DEVELOPER</p>
                    <p>UI/UX DESIGNER   </p>
                </div>
                <div class="home-content__buttons">
                    <a href="#works" class="smoothscroll btn btn--stroke">
                        Latest Projects
                    </a>
                    <a href="#about" class="smoothscroll btn btn--stroke">
                        More About Me
                    </a>
                </div>

                <div class="home-content__scroll">
                    <a href="#about" class="scroll-link smoothscroll">
                        <span>Scroll Down</span>
                    </a>
                </div>

            </div>

        </div> <!-- end home-content -->

        <ul class="home-social">
            <li>
                <a href="https://t.me/Ikhalish" target="_blank"><i class="fa-brands fa-telegram"></i><span>Telegram</span></a>
            </li>
            <li>
                <a href="https://www.instagram.com/ibrahimkhalis_" target="_blank"><i class="im im-instagram" aria-hidden="true"></i><span>Instagram</span></a>
            </li>
            <li>
                <a href="https://wa.me/+6281290132557?text=hola" target="_blank"><i class="im im-whatsapp" aria-hidden="true"></i><span>Whatsapp</span></a>
            </li>
            <li>
                <a href="https://github.com/IbrahimKhalis"  target="_blank"><i class="im im-github" aria-hidden="true"></i><span>Github</span></a>
            </li>
        </ul> 
        <!-- end home-social -->

    </section> <!-- end s-home -->


    <!-- about
    ================================================== -->
    <section id="about" class="s-about target-section">
        
        <div class="row narrow section-intro has-bottom-sep">
            <div class="col-full text-center">
                <h3>About</h3>
                <h1>More About Me</h1>
                <p class="lead">Hii, i'm Ibrahim Khalish from Indonesia i'm 16 years old and i'm in vocational school, i'm highly interested for challenging things or new things, easy to adapation, have integrity, i like being a leader, I like to work with other people or alone but I prefer to work together because its fun to work with other people with different idea,I can apply my knowledge and my experience in my life</p>
            </div>
        </div>

        <div class="row about-content">

            <div class="col-six tab-full left">
                <h3>Profile</h3>
                <table>
                    <tr>
                        <td><img src="{{ asset('Assets-ibrahim/images/profile-photo.jpg') }}" alt="" style="border-radius: 40px; margin-left: 75%;"></td>
                    </tr>
                    <tr>
                        <td>Fullname</td>
                        <td>:</td>
                        <td>Ibrahim Khalish</td>
                    </tr>
                    <tr>
                        <td>Birth Date</td>
                        <td>:</td>
                        <td>July, 28, 2006</td>
                    </tr>
                    <tr>
                        <td>Adress</td>
                        <td>:</td>
                        <td>Villa Permata Areman Blok B no.5 RT.13/RW.08, Cimanggis, Depok, Jawa Barat</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td>As a student in vocational School</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><a href=""> ibrahimkhalish@gmail.com</a></td>
                    </tr>
                    
                </table>
            </div>

            <div class="col-six tab-full right">
                <h3>Skills.</h3>

                <ul class="skill-bars">
                    <li>
                    <div class="progress percent90"><span>90%</span></div>
                    <strong>HTML</strong>
                    </li>
                    <li>
                    <div class="progress percent85"><span>85%</span></div>
                    <strong>CSS</strong>
                    </li>
                    <li>
                    <div class="progress percent70"><span>70%</span></div>
                    <strong>Javascript</strong>
                    </li>
                    <li>
                    <div class="progress percent80"><span>80%</span></div>
                    <strong>PHP</strong>
                    </li>
                    <li>
                    <div class="progress percent95"><span>95%</span></div>
                    <strong>Figma</strong>
                    </li>
                     <li>
                    <div class="progress percent80"><span>80%</span></div>
                    <strong>Photoshop/Canva</strong>
                    </li>
                    <li>
                    <div class="progress percent85"><span>85%</span></div>
                    <strong>UI/UX design</strong>
                    </li>  
                </ul>
            </div>
            <div class="col-twelve tab-full right">
                <h3>Soft Skills</h3>

                <ul class="skill-bars">
                    <li>
                    <div class="progress percent80"><span>80%</span></div>
                    <strong>Communication</strong>
                    </li>
                    <li>
                    <div class="progress percent80"><span>80%</span></div>
                    <strong>Leadership</strong>
                    </li>
                    <li>
                    <div class="progress percent95"><span>95%</span></div>
                    <strong>Team Work</strong>
                    </li>
                    <li>
                    <div class="progress percent95"><span>95%</span></div>
                    <strong>Adaptive</strong>
                    </li>
                    <li>
                    <div class="progress percent75"><span>75%</span></div>
                    <strong>English</strong>
                    </li>
                    <li>
                    <div class="progress percent85"><span>85%</span></div>
                    <strong>Creativity</strong>
                    </li>
                    <li>
                    <div class="progress percent75"><span>75%</span></div>
                    <strong>Entrepreneur skill</strong>
                    </li>
                    <li>
                    <div class="progress percent85"><span>85%</span></div>
                    <strong>Time Management</strong>
                    </li>   
                </ul>
            </div>

        </div> <!-- end about-content -->

        <div class="row about-content about-content--buttons">

            <div class="col-six tab-full left">
                <a href="#0" class="btn btn--primary full-width">Download My CV</a>
            </div>
            <div class="col-six tab-full right">
                <a href="#0" class="btn full-width">Hire Me Now</a>
            </div>

        </div> <!-- end about-content buttons -->

        <div class="row about-content about-content--timeline">

            <div class="col-full text-center">
                <h3>Education.</h3>
            </div>

            <div class="col-six tab-full left">
                <div class="timeline">

                    <div class="timeline__block">
                        <div class="timeline__bullet"></div>
                        <div class="timeline__header">
                            <p class="timeline__timeframe">July 2012 - June 2018</p>
                            <h3>Elementary School</h3>
                            <h5>Raflesia</h5>
                        </div>
                        <div class="timeline__desc">	
                            <table>
                                <tr>
                                    <td>School</td>
                                    <td>:</td>
                                    <td>Raflesia</td>
                                </tr>
                                <tr>
                                    <td>Adress</td>
                                    <td>:</td>
                                    <td>Jl. H. Saman Jl. Kp. Areman No.100, RT.9/RW.08, Tugu, Kec. Cimanggis, Kota Depok, Jawa Barat 16951</td>
                                </tr>
                                <tr>
                                    <td>Number</td>
                                    <td>:</td>
                                    <td>(021) 8771-5665</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>sd.raflesia@gmail.com</td>
                                </tr>
                            </table>
                        </div>
                    </div> <!-- end timeline__block -->               

                </div> <!-- end timeline -->
            </div> <!-- end left -->

            <div class="col-six tab-full right">
                <div class="timeline">

                    <div class="timeline__block">
                        <div class="timeline__bullet"></div>
                        <div class="timeline__header">
                            <p class="timeline__timeframe">July 2018 - June 2021</p>
                            <h3>Junior High School</h3>
                            <h5>Taruna Bhakti</h5>
                        </div>
                        <div class="timeline__desc">
                            <table>
                                <tr>
                                    <td>School</td>
                                    <td>:</td>
                                    <td>Nurul Fikri</td>
                                </tr>
                                <tr>
                                    <td>Adress</td>
                                    <td>:</td>
                                    <td>Jl. Raya No.61, Jl. Klp. Dua Raya No.RT. 07/07, Tugu, Kec. Cimanggis, Kota Depok, Jawa Barat 16451</td>
                                </tr>
                                <tr>
                                    <td>Number</td>
                                    <td>:</td>
                                    <td>021 – 870 8300</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>smpit@nurulfikri.sch.id</td>
                                </tr>
                                <tr>
                                    <td>Website</td>
                                    <td>:</td>
                                    <td><a href="https://smpit.nurulfikri.sch.id/" target="_blank">smpit.nurulfikri.sch.id</a></td>
                                </tr>
                            </table>
                        </div>
                    </div> <!-- end timeline__block -->

                </div> <!-- end timeline -->
            </div> <!-- end right -->

            <div class="col-full text-center">
                <div class="timeline">

                    <div class="timeline__block">
                        <div class="on-going-bullet">
                            <div class="timeline__bullet"></div>
                        </div>
                        <div class="timeline__header">
                            <p class="timeline__timeframe">July 2021 - Now</p>
                            <h3>IT Vocational School</h3>
                            <h5>Taruna Bhakti</h5>
                        </div>
                        <div class="timeline__desc">
                            <table>
                                <tr>
                                    <td>School Name</td>
                                    <td>:</td>
                                    <td>Taruna Bhakti</td>
                                </tr>
                                <tr>
                                    <td>Adress</td>
                                    <td>:</td>
                                    <td>Jl. Pekapuran, RT.02/RW.06, Curug, Kec. Cimanggis, Kota Depok, Jawa Barat 16953</td>
                                </tr>
                                <tr>
                                    <td>Number</td>
                                    <td>:</td>
                                    <td>(021) 8744810</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>taruna@smktarunabhakti.net</td>
                                </tr>
                                <tr>
                                    <td>Website</td>
                                    <td>:</td>
                                    <td><a href="https://smktarunabhakti.net/" target="_blank">www.smktarunabhakti.net</a></td>
                                </tr>
                            </table>
                        </div>
                    </div> <!-- end timeline__block -->

                </div> <!-- end timeline -->
            </div>

        </div> <!-- end about-content timeline -->

    </section> <!-- end about -->
    

    <!-- works
    ================================================== -->
    <section id="works" class="s-works target-section">

        <div class="row narrow section-intro has-bottom-sep">
            <div class="col-full">
                <h3>Portfolio</h3>
                <h1>See My Latest Projects.</h1>
                
                <p class="lead">Below are the projects that I have made in  between 2022 until Now</p>
            </div>
        </div>

        <div class="row masonry-wrap">
            <div class="masonry">

                <div class="masonry__brick">
                    <div class="item-folio">
                        <div class="item-folio__thumb">
                                <img src="{{ asset('Assets-ibrahim/images/web-sekolah.png') }}" 
                                     srcset="{{ asset('Assets-ibrahim/images/web-sekolah.png') }} 1x, {{ asset('Assets-ibrahim/images/web-sekolah.png') }} 2x" alt="">
                                <span class="shadow-overlay"></span>
                        </div>
                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Sekolahku
                            </h3>
                            <p class="item-folio__cat">
                                Web School
                            </p>
                        </div>
                        <div class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            
                                <img src="{{ asset('Assets-ibrahim/images/web-sekolah-2.png') }} "
                                     srcset="{{ asset('Assets-ibrahim/images/web-sekolah-2.png') }}  1x, {{ asset('Assets-ibrahim/images/web-sekolah-2.png') }}  2x" alt="">
                                <span class="shadow-overlay"></span>
                            
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Sekolahku Page-2
                            </h3>
                            <p class="item-folio__cat">
                                Web School
                            </p>
                        </div>

                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            <i class="im im-link"></i>
                        </a>

                        <div class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                                <img src="{{ asset('Assets-ibrahim/images/web-portofolio.png') }} "
                                     srcset="{{ asset('Assets-ibrahim/images/web-portofolio.png') }}  1x, {{ asset('Assets-ibrahim/images/web-portofolio.png') }}  2x" alt="">
                                <span class="shadow-overlay"></span>
                           
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Portofolio
                            </h3>
                            <p class="item-folio__cat">
                                Try to make web portofolio
                            </p>
                        </div>

                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            <i class="im im-link"></i>
                        </a>

                        <span class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->
                <div class="masonry__brick">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                                <img src="{{ asset('Assets-ibrahim/images/web-hospital.png') }}" 
                                     srcset="{{ asset('Assets-ibrahim/images/web-hospital.png') }} 1x, {{ asset('Assets-ibrahim/images/web-hospital.png') }} 2x" alt="">
                                <span class="shadow-overlay"></span>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                WeCare
                            </h3>
                            <p class="item-folio__cat">
                                Web-Hospital
                            </p>
                        </div>

                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            <i class="im im-link"></i>
                        </a>

                        <span class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                                <img src="{{ asset('Assets-ibrahim/images/Form-Bank.png') }}"
                                     srcset="{{ asset('Assets-ibrahim/images/Form-Bank.png') }} 1x, {{ asset('Assets-ibrahim/images/Form-Bank.png') }} 2x" alt="">
                                <span class="shadow-overlay"></span>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Bank
                            </h3>
                            <p class="item-folio__cat">
                                Form-Bank
                            </p>
                        </div>

                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            <i class="im im-link"></i>
                        </a>

                        <span class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                                <img src="{{ asset('Assets-ibrahim/images/web-sekolah-3.png') }}"
                                     srcset="{{ asset('Assets-ibrahim/images/web-sekolah-3.png') }} 1x, {{ asset('Assets-ibrahim/images/web-sekolah-3.png') }} 2x" alt="">
                                <span class="shadow-overlay"></span>
                           
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Sekolahku Page-3
                            </h3>
                            <p class="item-folio__cat">
                                Web School
                            </p>
                        </div>

                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            <i class="im im-link"></i>
                        </a>

                        <span class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                                <img src="{{ asset('Assets-ibrahim/images/uji-level.png') }}"
                                     srcset="{{ asset('Assets-ibrahim/images/uji-level.png') }} 1x, {{ asset('Assets-ibrahim/images/uji-level.png') }} 2x" alt="">
                                <span class="shadow-overlay"></span>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                INVENTORY
                            </h3>
                            <p class="item-folio__cat">
                                Inventory-Web
                            </p>
                        </div>

                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            <i class="im im-link"></i>
                        </a>

                        <span class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                                <img src="{{ asset('Assets-ibrahim/images/uji-level-input_data.png') }}"
                                     srcset="{{ asset('Assets-ibrahim/images/uji-level-input_data.png') }} 1x, {{ asset('Assets-ibrahim/images/uji-level-input_data.png') }} 2x" alt="">
                                <span class="shadow-overlay"></span>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                INVENTORY
                            </h3>
                            <p class="item-folio__cat">
                                Inventory-input-data
                            </p>
                        </div>

                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            <i class="im im-link"></i>
                        </a>

                        <span class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                                <img src="{{ asset('Assets-ibrahim/images/login,register-page.png') }}"
                                     srcset="{{ asset('Assets-ibrahim/images/login,register-page.png') }} 1x, {{ asset('Assets-ibrahim/images/login,register-page.png') }} 2x" alt="">
                                <span class="shadow-overlay"></span>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Login & Register-page
                            </h3>
                            <p class="item-folio__cat">
                                login & register game HTML
                            </p>
                        </div>

                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            <i class="im im-link"></i>
                        </a>

                        <span class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->
               
                <div class="masonry__brick">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                                <img src="{{ asset('Assets-ibrahim/images/form-consult-hospital.png') }}"
                                     srcset="{{ asset('Assets-ibrahim/images/form-consult-hospital.png') }} 1x, {{ asset('Assets-ibrahim/images/form-consult-hospital.png') }} 2x" alt="">
                                <span class="shadow-overlay"></span>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                WeCare
                            </h3>
                            <p class="item-folio__cat">
                                Form-Consult-Hospital
                            </p>
                        </div>

                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            <i class="im im-link"></i>
                        </a>

                        <span class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->
                <div class="masonry__brick">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                                <img src="{{ asset('Assets-ibrahim/images/htmlGame.png') }}"
                                     srcset="{{ asset('Assets-ibrahim/images/htmlGame.png') }} 1x, {{ asset('Assets-ibrahim/images/htmlGame.png') }} 2x" alt="">
                                <span class="shadow-overlay"></span>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                FLYING GAME
                            </h3>
                            <p class="item-folio__cat">
                                HTML-GAME
                            </p>
                        </div>

                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            <i class="im im-link"></i>
                        </a>

                        <span class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

            </div>
        </div> <!-- end masonry -->

    </section> <!-- end works -->



    <!-- testimonials
    ================================================== -->
    


    <!-- footer
    ================================================== -->
    <footer>
        <div class="row">
            <div class="col-full">

                <div class="footer-logo">
                    <a class="footer-site-logo" href="#0"><img src="{{ asset('Assets-ibrahim/images/portfolio-logo.png') }}" alt="Homepage"></a>
                </div>

                <ul class="footer-social">
                    <li><a href="#0">
                        <i class="fa-brands fa-telegram" aria-hidden="true" target="_blank"></i>
                        <span>Telegram</span>
                    </a></li>
                    <li><a href="#https://wa.me/+6281290132557?text=hola
                       ">
                        <i class="im im-whatsapp" aria-hidden="true" target="_blank"></i>
                        <span>Whatsapp</span>
                    </a></li>
                    <li><a href="#0">
                        <i class="im im-instagram" aria-hidden="true" target="_blank"></i>
                        <span>Instagram</span>
                    </a></li>
                    <li><a href=" https://github.com/IbrahimKhalis" target="_blank">
                        <i class="im im-github" aria-hidden="true"></i>
                        <span>Github</span>
                    </a></li>
                </ul>
                    
            </div>
        </div>

        <div class="row footer-bottom">

            <div class="col-twelve">
                <div class="copyright">
                    <span>© Copyright Khalish 2022</span> 
                    <span>Design by <a href="#">Ibrahim Khalish</a></span>	
                </div>

                <div class="go-top">
                <a class="smoothscroll" title="Back to Top" href="#top"><i class="im im-arrow-up" aria-hidden="true"></i></a>
                </div>
            </div>

        </div> <!-- end footer-bottom -->

    </footer> <!-- end footer -->


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div><!-- end photoSwipe background -->

    <div id="preloader">
        <div id="loader"></div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="{{ asset('Assets-ibrahim/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('Assets-ibrahim/js/plugins.js') }}"></script>
    <script src="{{ asset('Assets-ibrahim/js/main.js') }}"></script>

</body>

</html>