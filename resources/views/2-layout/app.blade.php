<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<title>Snapshot HTML CSS Web Template</title>
<!--
Snapshot Template
http://www.templatemo.com/tm-493-snapshot

Zoom Slider
https://vegas.jaysalvat.com/

Caption Hover Effects
http://tympanus.net/codrops/2013/06/18/caption-hover-effects/
-->
	<link rel="stylesheet" href="{{asset('1-asset-landingpage/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('1-asset-landingpage/css/animate.min.css')}}">
	<link rel="stylesheet" href="{{asset('1-asset-landingpage/css/font-awesome.min.css')}}">
  	<link rel="stylesheet" href="{{asset('1-asset-landingpage/css/component.css')}}">

    <link rel="stylesheet" href="{{asset('1-asset-landingpage/css/owl.theme.css')}}">
	<link rel="stylesheet" href="{{asset('1-asset-landingpage/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('1-asset-landingpage/css/vegas.min.css')}}">
	<link rel="stylesheet" href="{{asset('1-asset-landingpage/css/style.css')}}">

	<!-- Google web font  -->
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>

</head>
<body id="top" data-spy="scroll" data-offset="50" data-target=".navbar-collapse">


<!-- Preloader section -->
{{--
<div class="preloader">
     <div class="sk-spinner sk-spinner-pulse"></div>
</div> --}}


@include('1-komponen.header');


<!-- Home section -->

<section id="home">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">

      <div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
        <h1 class="wow fadeInUp" data-wow-delay="0.6s">Wellcome To XI PPLG 2</h1>
        <p class="wow fadeInUp" data-wow-delay="0.9s">We from class XI PPLG 2 <br>have 39 students, consisting of 31 boys and 8 girls <br>Thank you.</p>
      </div>

    </div>
  </div>
</section>


<!-- About section -->

<section id="about">
  <div class="container">
    <div class="row">

      <div class="col-md-9 col-sm-8 wow fadeInUp" data-wow-delay="0.2s">
        <div class="about-thumb">
          <h1>Background</h1>
          <p>Quisque tempor bibendum dolor at volutpat. Suspendisse venenatis quam sed libero euismod feugiat. In cursus nisi vitae lectus facilisis mollis. Nullam scelerisque, quam nec iaculis vulputate.</p>
        </div>
      </div>

      <div class="col-md-3 col-sm-4 wow fadeInUp about-img" data-wow-delay="0.6s">
        <img src="{{asset('1-asset-landingpage/images/Foto-kelas.jpeg')}}" class="img-responsive img-circle" alt="About">
      </div>

      <div class="clearfix"></div>

      <div class="col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
        <div class="section-title text-center">
          <h1>Class Manager</h1>
        </div>
      </div>

      <div class="Nahla-naufan">
        <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
          <div class="team-thumb">
            <div class="image-holder">
              <img src="{{asset('1-asset-landingpage/images/Bu nahlah.jpeg')}}" class="img-responsive img-circle" alt="Mary" style="max-width: 200px;">
            </div>
            <h2 class="heading">Nahla naufan<br>Homeroom Teacher</h2>
            <p class="description">Aliquam ac justo est. Praesent feugiat cursus est.</p>
          </div>
        </div>
      </div>


      <!-- team carousel -->
      <div id="team-carousel" class="owl-carousel">

      <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
        <div class="team-thumb">
          <div class="image-holder">
            <img src="{{asset('1-asset-landingpage/images/Nail.JPG')}}" class="img-responsive img-circle" style="max-width: 200px;">
          </div>
          <h2 class="heading">Khairan Nail<br>Class Leader</h2>
          <p class="description"></p>
        </div>
      </div>

      <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
        <div class="team-thumb">
          <div class="image-holder">
            <img src="{{asset('1-asset-landingpage/images/Fakhri.jpeg')}}" class="img-responsive img-circle" alt="Jack" style="max-width: 200px;">
          </div>
          <h2 class="heading">Fakhri Zulfikar<br>Vice class Leader</h2>
          <p class="description">Maecenas sed diam eget risus varius blandit sit non.</p>
        </div>
      </div>

      <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
        <div class="team-thumb">
          <div class="image-holder">
            <img src="{{asset('1-asset-landingpage/images/Ibrahim.jpg')}}" class="img-responsive img-circle" alt="Linda" style="max-width: 200px;">
          </div>
          <h2 class="heading">Ibrahim Khalis<br>treasurer</h2>
          <p class="description">Phasellus nec ante in nunc molestie tincidunt ut eu diam.</p>
        </div>
      </div>

      <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
        <div class="team-thumb">
          <div class="image-holder">
            <img src="{{asset('1-asset-landingpage/images/Sheyla.jpeg')}}" class="img-responsive img-circle" alt="Sandy" style="max-width: 200px;">
          </div>
          <h2 class="heading">Sheyla Aulia<br>treasurer</h2>
          <p class="description">Curabitur vulputate euismod neque et tincidunt.</p>
        </div>
      </div>

      <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
        <div class="team-thumb">
          <div class="image-holder">
            <img src="{{asset('1-asset-landingpage/images/Siti.jpeg')}}" class="img-responsive img-circle" alt="Lukia" style="max-width: 200px;">
          </div>
          <h2 class="heading">Siti Nurul<br>secretary</h2>
          <p class="description">Maecenas sed diam eget risus varius blandit sit.</p>
        </div>
      </div>

      </div>
      <!-- end team carousel -->

    </div>
  </div>
</section>


<!-- Gallery section -->

<section id="gallery">
  <div class="container">
    <div class="row">

      <div class="col-md-offset-2 col-md-8 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
        <div class="section-title">
          <h1>STUDENTS</h1>
        </div>
      </div>

      <ul class="grid cs-style-4">
        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/Adhella.jpeg')}}" alt="image 1" style="max-height: 300px;border-radius: 10px;"></div>
            <figcaption>
              <h1>Adhella Nilam</h1>
              <small>Cum sociis natoque penatibus et magnis dis parturient montes.</small>
              <a href="/members/adhella">Read More</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/adri.jpeg')}}" alt="image 2" style="max-height: 300px;"></div>
            <figcaption>
              <h1>Adri Bagas</h1>
              <small>Suspendisse venenatis quam sed libero euismod feugiat.</small>
              <a href="/members/bagas">Details</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/agung.jpeg')}}" alt="image 2" style="max-height: 300px;"></div>
            <figcaption>
              <h1>Agung Rafiano</h1>
              <small>Suspendisse venenatis quam sed libero euismod feugiat.</small>
              <a href="/members/agung">Details</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/miftah.jpeg')}}" alt="image 3" style="max-height: 300px;"></div>
            <figcaption>
              <h1>Ahmad Miftah</h1>
              <small>Aenean urna massa, convallis vehicula velit et, dictum pellentesque nisi.</small>
              <a href="/members/miftah">Learn More</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/andyfoto.jpeg')}}" alt="image 4" style="max-height: 300px;"></div>
            <figcaption>
              <h1>Andy Alphard</h1>
              <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
              <a href="/members/Andy">Full Post</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/aril.jpeg')}}" alt="image 4" style="max-height: 300px;"></div>
            <figcaption>
              <h1>Aril Pradana</h1>
              <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
              <a href="/members/aril">Full Post</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/derren.jpeg')}}" alt="image 4" style="max-height: 300px;"></div>
            <figcaption>
              <h1>Arya Derren</h1>
              <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
              <a href="/members/deren">Full Post</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/arya.jpeg')}}" alt="image 4" style="max-height: 300px;"></div>
            <figcaption>
              <h1>Arya Rachman</h1>
              <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
              <a href="/members/Arya_rachman">Full Post</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/aryo.jpeg')}}" alt="image 4" style="max-height: 300px;"></div>
            <figcaption>
              <h1>Aryo swalito</h1>
              <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
              <a href="/members/aryo">Full Post</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/bagus.jpeg')}}" alt="image 4" style="max-height: 300px;"></div>
            <figcaption>
              <h1>Bagus Tri Maulana</h1>
              <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
              <a href="/members/bagus">Full Post</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/Dimas.jpeg')}}" alt="image 4" style="max-height: 300px;"></div>
            <figcaption>
              <h1>Dimas Adrianto</h1>
              <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
              <a href="/members/dimas">Full Post</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/Divadan.jpeg')}}" alt="image 4" style="max-height: 300px;"></div>
            <figcaption>
              <h1>Divadan Arya</h1>
              <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
              <a href="/members/dimas">Full Post</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/fatir.png')}}" alt="image 4" style="max-height: 300px;"></div>
            <figcaption>
              <h1>Faatir Bintang</h1>
              <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
              {{-- <a href="">Full Post</a> --}}
            </figcaption>
          </figure>
        </li>

        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/habibi.jpg')}}" alt="image 4" style="max-height: 300px;"></div>
            <figcaption>
              <h1>Habibi Rabbani</h1>
              <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
              <a href="/members/habibi">Full Post</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/hana.jpeg')}}" alt="image 4" style="max-height: 300px;"></div>
            <figcaption>
              <h1>Hanna Aulia Arief</h1>
              <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
              <a href="/members/hana">Full Post</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/Ibrahim.jpg')}}" alt="image 4" style="max-height: 300px;"></div>
            <figcaption>
              <h1>Ibrahim Khalis</h1>
              <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
              {{-- <a href="">Full Post</a> --}}
            </figcaption>
          </figure>
        </li>

        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/irsyad.jpeg')}}" alt="image 4" style="max-height: 300px;"></div>
            <figcaption>
              <h1>Irsyaan Ready</h1>
              <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
              <a href="/members/irsyaad">Full Post</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/jeffry.jpeg')}}" alt="image 4" style="max-height: 300px;"></div>
            <figcaption>
              <h1>Jeffry Malik</h1>
              <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
              <a href="/members/jeffry">Full Post</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/kevin.jpeg')}}" alt="image 4" style="max-height: 300px;"></div>
            <figcaption>
              <h1>Kevin Arya</h1>
              <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
              <a href="/members/kevin">Full Post</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/Nail.jpg')}}" alt="image 4" style="max-height: 300px;"></div>
            <figcaption>
              <h1>Khairan Nail</h1>
              <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
              <a href="/members/nail">Full Post</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/kiagus.jpeg')}}" alt="image 4" style="max-height: 300px;"></div>
            <figcaption>
              <h1>Kiagus Farhan Aziz</h1>
              <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
              <a href="/members/kiagus">Full Post</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/Fakhri.jpeg')}}" alt="image 4" style="max-height: 300px;"></div>
            <figcaption>
              <h1>Fachry Zulfikar</h1>
              <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
              <a href="/members/l">Full Post</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/Rizal.jpeg')}}" alt="image 4" style="max-height: 300px;"></div>
            <figcaption>
              <h1>Muhammad Rizalde</h1>
              <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
              <a href="/members/M_kautsar">Full Post</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/yudhia.jpeg')}}" alt="image 4" style="max-height: 300px;"></div>
            <figcaption>
              <h1>Yudhia Ahrian</h1>
              <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
              <a href="/members/yudiya">Full Post</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/tyo.jpeg')}}" alt="image 4" style="max-height: 300px;"></div>
            <figcaption>
              <h1>M Rizqih Ramadhan</h1>
              <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
              <a href="/members/rizqi">Full Post</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/naillah.jpeg')}}" alt="image 4" style="max-height: 300px;"></div>
            <figcaption>
              <h1>Naillah Nasywa</h1>
              <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
              <a href="/members/naillah">Full Post</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/radit.jpeg')}}" alt="image 4" style="max-height: 300px;"></div>
            <figcaption>
              <h1>Raditnya Faturrohman</h1>
              <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
              <a href="/members/radit">Full Post</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/Rasya.jpeg')}}" alt="image 4" style="max-height: 300px;"></div>
            <figcaption>
              <h1>Rasya Fadil</h1>
              <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
              <a href="/members/RasKit">Full Post</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/Rey.jpeg')}}" alt="image 4" style="max-height: 300px;"></div>
            <figcaption>
              <h1>Rey Kadisa</h1>
              <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
              <a href="/members/rei">Full Post</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/riski.jpeg')}}" alt="image 4" style="max-height: 300px;"></div>
            <figcaption>
              <h1>Riski Aditya</h1>
              <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
              <a href="/members/rizky">Full Post</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/samuel.jpeg')}}" alt="image 4" style="max-height: 300px;"></div>
            <figcaption>
              <h1>Samuel Martin</h1>
              <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
              <a href="/members/samuel">Full Post</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/Farhan.jpeg')}}" alt="image 4" style="max-height: 300px;"></div>
            <figcaption>
              <h1>Sayyidina Farhan</h1>
              <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
              <a href="#">Full Post</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/Selvi.jpeg')}}" alt="image 4" style="max-height: 300px;"></div>
            <figcaption>
              <h1>Selvi Nur Azizah</h1>
              <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
              <a href="/members/selvi">Full Post</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/sherly.jpeg')}}" alt="image 4" style="max-height: 300px;"></div>
            <figcaption>
              <h1>Sherly Sintia</h1>
              <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
              <a href="/members/sherly">Full Post</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/Sheyla.jpeg')}}" alt="image 4" style="max-height: 300px;"></div>
            <figcaption>
              <h1>Sheyla Aulya</h1>
              <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
              <a href="/members/sheyla">Full Post</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/Siti.jpeg')}}" alt="image 4" style="max-height: 300px; box-shadow: 10px 10px 10px 10px;"></div>
            <figcaption>
              <h1>Siti Nurul</h1>
              <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
              <a href="/members/siti">Full Post</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/Sultan.jpeg')}}" alt="image 4" style="max-height: 300px;"></div>
            <figcaption>
              <h1>Sulthan Wahyu</h1>
              <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
              <a href="/members/Sulthan">Full Post</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/varel.jpeg')}}" alt="image 4" style="max-height: 300px;"></div>
            <figcaption>
              <h1>Varel Steven</h1>
              <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
              <a href="/members/varel">Full Post</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-4 col-sm-4">
          <figure>
            <div><img src="{{asset('1-asset-landingpage/images/winny.jpeg')}}" alt="image 4" style="max-height: 300px; box-shadow: 10 10 10 10;"></div>
            <figcaption>
              <h1>Winny Febriani</h1>
              <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
              <a href="/members/winny">Full Post</a>
            </figcaption>
          </figure>
        </li>

      </ul>



    </div>
  </div>
</section>


<!-- Contact section -->

<section id="contact">
  <div class="container">
    <div class="row">

       <div class="col-md-offset-1 col-md-10 col-sm-12">

        <div class="col-lg-offset-1 col-lg-10 section-title wow fadeInUp" data-wow-delay="0.4s">
          <h1>Send a message</h1>
          <p>Nunc suscipit ante in lectus laoreet, nec pharetra diam dictum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- Footer section -->

<footer>
	<div class="container">

		<div class="row">

			<div class="col-md-12 col-sm-12">

                <ul class="social-icon">
                    <li><a href="#" class="fa fa-facebook wow fadeInUp" data-wow-delay="0.2s"></a></li>
                    <li><a href="#" class="fa fa-twitter wow fadeInUp" data-wow-delay="0.4s"></a></li>
                    <li><a href="#" class="fa fa-linkedin wow fadeInUp" data-wow-delay="0.6s"></a></li>
                    <li><a href="#" class="fa fa-instagram wow fadeInUp" data-wow-delay="0.8s"></a></li>
                    <li><a href="#" class="fa fa-google-plus wow fadeInUp" data-wow-delay="1.0s"></a></li>
                </ul>

				<p class="wow fadeInUp"  data-wow-delay="1s" >Copyright &copy; 2016 Snapshot Studio |
                Design: <a href="https://plus.google.com/+templatemo" title="free css templates" target="_blank">Andy Alphard</a></p>

			</div>

		</div>

	</div>
</footer>

<!-- Back top -->
<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

<!-- Javascript  -->
<script src="{{asset('1-asset-landingpage/js/jquery.js')}}"></script>
<script src="{{asset('1-asset-landingpage/js/bootstrap.min.js')}}"></script>
<script src="{{asset('1-asset-landingpage/js/vegas.min.js')}}"></script>
<script src="{{asset('1-asset-landingpage/js/modernizr.custom.js')}}"></script>
<script src="{{asset('1-asset-landingpage/js/toucheffects.js')}}"></script>
<script src="{{asset('1-asset-landingpage/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('1-asset-landingpage/js/smoothscroll.js')}}"></script>
<script src="{{asset('1-asset-landingpage/js/wow.min.js')}}"></script>
<script src="{{asset('1-asset-landingpage/js/custom.js')}}"></script>

</body>
</html>
