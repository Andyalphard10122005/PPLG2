<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800&display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Quicksand:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset-agus/style.css') }}">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <script src="https://kit.fontawesome.com/68651a0421.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <title>Document</title>
</head>

<body>
  <div class="container">
    <div
      class="navbar animate__animated animate__slideInLeft animate__delay-3s                                                                                               ">

      <ul class="">
        <li><a href="#home">Home</a></li>
        <li><a href="#about-me">About me</a></li>
        <li><a href="#resume">Resume</a></li>
        <!-- <li><a href="#">My work</a></li> -->
        <!-- <li><a href="#">Contact Me</a></li> -->
      </ul>
    </div>
    <div class="hero flex" id="home">
      <div class="kiri-hero">
        <div
          class="judul font-quicksand text-[6vw] mt-[10vw] ml-[10vw] animate__animated animate__tada animate__slower">
          Hello, I'm Kiagus</div>
        <div class="subjudul ml-[10.5vw] text-[1.2vw] w-[40vw]">I'am an UI/UX Designer, Front end web developer, trying
          to be fullstack developer and wanna be astronout.</div>
        <div class="tombol-hero mt-[2vw] animate__animated animate__lightSpeedInLeft animate__delay-3s	3s">
          <a href=""><button class="-hire ml-[10.5vw] border-[2px] w-[6vw] h-[2.5vw] bg-black text-white font-bold">Hire
              Me</button></a>
          <a href=""><button class="tombol-cv ml-[3vw]  border-[2px] w-[6vw] h-[2.5vw] font-bold">My CV</button></a>
        </div>
        <div class="social-media ml-[10.5vw] mt-[2vw] animate__animated animate__backInLeft animate__delay-3s">
          <div class="logo-sosmed flex gap-[2.5vw]">
            <div class="facebook"><i class="fa-brands fa-facebook fa-2x"></i></div>
            <div class="instagram"><i class="fa-brands fa-instagram fa-2x"></i></div>
            <div class="linkedin"><i class="fa-brands fa-linkedin fa-2x"></i></div>
            <div class="email"><i class="fa-solid fa-envelope fa-2x"></i></div>
          </div>
        </div>
      </div>
      <div class="kanan-hero w-[25vw] mt-[8vw] ml-[15vw]">
        <img src="{{ asset('asset-agus/agus-maskeran.jpg') }}" alt=""
          class="gambar-hero  rounded-xl animate__slower animate__animated animate__jackInTheBox  animate__delay-3s"
          data-tilt>
      </div>
    </div>


    <div class="about-me-edu" id="about-me">
      <div class="about-me ml-[5vw] mt-[15vw] flex">
        <div class="kiri-about ">
          <img src="{{ asset('asset-agus/agus-maskeran.jpg') }}" alt="" class="gambar-about  w-[35vw] ml-[5vw] h-[45vw] rounded-[0.5vw]" data-aos="fade-up-right" data-aos-offset="300" data-aos-delay="300">
        </div>
        <div class="kanan-about ml-[3vw] mt-[5vw]" data-aos="zoom-in-up">
          <div class="my-intro text-[1.3vw]">
            My Intro
          </div>
          <div class="judul-about text-[3vw] font-bold">
            <h1 class="">About Me</h1>
          </div>
          <div class="deskripsi-diri w-[40vw] font-thin">
            <h5>My name is Kiagus Ahmad Farhan aziz, I am commonly called Aziz/Kiagus. I have expertise in the field of
              design, which I am engaged in when I am in my spare time, Have soft skills such as problem solving and
              TeamWork. Currently studying at Smk Taruna Bhakti Depok, Department of Software and Game Development
              (PPLG). In this Department, I studied software such as web creation, applications, games, and so on.</h5>
          </div>
            <div class="biodata mt-[2vw] flex-col flex gap-[1vw] font-[800]" >
              <div class="nama flex gap-[8.6vw]">
                <div class="judul-name">Name :</div>
                <div class="sub-judul-name font-[800] text-[#b1b493]">Kiagus Ahmad Farhan Aziz</div>
              </div>
              <div class="birth flex gap-[5vw]">
                <div class="judul-birth">Date Of Birth:</div>
                <div class="sub-judul-birth font-[800] text-[#b1b493]">Mei 31, 2006</div>
              </div>
              <div class="address flex gap-[7.7vw]">
                <div class="judul-address">Address: </div>
                <div class="sub-judul-address font-[800] text-[#b1b493]">Gg. Swadaya 5 Rt.05 Rw.021 no. 132</div>
              </div>
              <div class="email flex gap-[8.8vw]">
                <div class="judul-email">Email :</div>
                <div class="sub-judul-email font-[800] text-[#b1b493]">Kgs.farhanaziz@gmail.com</div>
              </div>
              <div class="phone flex gap-[8.4vw]">
                <div class="judul-phone">Phone :</div>
                <div class="sub-judul-phone font-[800] text-[#b1b493]">+62 813-2664-5567</div>
              </div>
            </div>
            <div class="hobby flex mt-[2vw]">
              <div class="hobby1 flex gap-[1vw]">
                <div class="garis-hobby1 w-[0.1vw] h-[2vw] bg-black"></div>
                <div class="gambar-hobby1"><i class="fa-solid fa-futbol"></i></div>
                <div class="text-hobby1">Sports</div>
              </div>
              <div class="hobby2 flex ml-[2vw] gap-[1vw] ">
                <div class="garis-hobby2 w-[0.1vw] h-[2vw] bg-black"></div>
                <div class="gambar-hobby2"><i class="fa-solid fa-music"></i></div>
                <div class="text-hobby2">Music</div>
              </div>
              <div class="hobby3 flex ml-[2vw] gap-[1vw]">
                <div class="garis-hobby3 w-[0.1vw] h-[2vw] bg-black"></div>
                <div class="gambar-hobby3"><i class="fa-solid fa-pen-nib"></i></div>
                <div class="text-hobby3">Design</div>
              </div>
            </div>
        </div>
      </div>
    </div>
    <div class="skills mt-[14vw]" id="skills">
      <div class="text-skills ml-[50vw] text-[1vw]" data-aos="zoom-in-up">
        <h4>Skills</h4>
      </div>
      <div class="judul-skills ml-[46vw] text-[3vw] font-bold" data-aos="zoom-in-up" data-aos-delay="200">
        <h1>My Skills</h1>
      </div>
      <div class="subjudul-skills text-[1.3vw] ml-[29vw] mt-[1vw] font-light" data-aos="zoom-in-up" data-aos-delay="300">
        <h4>here are some of my skills, not very good at programming, but can be a little design</h4>
      </div>
      <div class="card-skills mt-[5vw] flex">
        <div class="card1 w-[255px] h-[260px] bg-white " data-aos="flip-left" data-aos-delay="100">
          <div class="gambar-card1 ">
            <img src="{{ asset('asset-agus/html.png') }}" alt="" class="gambar-html w-[4vw]">
          </div>
          <div class="judul-card1">
            <h1 class="ml-[2vw] mt-[1vw] font-bold text-[1.5vw]">Html</h1>
          </div>
          <div class="subjudul-card1 w-[12vw] ml-[2vw] mt-[1vw] font-[700]">
            <h1>I Can create some web with html, Html it's my first language and i learn so much.</h1>
          </div>
        </div>
        <div class="card2 w-[255px] h-[260px] bg-white" data-aos="flip-left" data-aos-delay="200">
          <div class="gambar-card2">
            <img src="{{ asset('asset-agus/css-3.png') }}"  class="gambar-css w-[4vw]">
          </div>
          <div class="judul-card2">
           <h1 class="ml-[2vw] mt-[1vw] font-bold text-[1.5vw]"> Css</h1>
          </div>
          <div class="subjudul-card2">
            <h1 class="subjudul-card2 w-[12vw] ml-[2vw] mt-[1vw] font-[700]">I do css for styling website, it makes awesome my website, and i do styling this website with css.</h1>
          </div>
        </div>
        <div class="card3 w-[255px] h-[260px] bg-white" data-aos="flip-left" data-aos-delay="300">
          <div class="gambar-card3">
            <img src="{{ asset('asset-agus/javascript.png') }}" class="gambar-js w-[4vw]">
          </div>
          <div class="judul-card3">
            <h1 class="ml-[2vw] mt-[1vw] font-bold text-[1.5vw]">Javascript</h1>
          </div>
          <div class="subjudul-card3 w-[12vw] ml-[2vw] mt-[1vw] font-[700]">
           <h1> I can do a little bit javascript, I use javascript just for make my website more interactive. </h1>
          </div>
        </div>
        <div class="card4 w-[255px] h-[260px] bg-white" data-aos="flip-left" data-aos-delay="400">
          <div class="gambar-card4">
            <img src="{{ asset('asset-agus/photoshop.png') }}" class="gambar-ps w-[4vw]">
          </div>
          <div class="judul-card4">
            <h1 class="ml-[2vw] mt-[1vw] font-bold text-[1.5vw]">Photoshop</h1>
          </div>
          <div class="subjudul-card4 w-[12vw] ml-[2vw] mt-[1vw] font-[700]">I do Photoshop just for my design, photoshop just </div>
        </div>
      </div>
      <div class="card-skills2 mt-[5vw] flex">
        <div class="card5 w-[255px] h-[260px] bg-white" data-aos="flip-left" data-aos-delay="500">
          <div class="gambar-card5 ">
            <img src="{{ asset('asset-agus/figma.png') }}" class="gambar-html w-[4vw]">
          </div>
          <div class="judul-card5">
            <h1 class="ml-[2vw] mt-[1vw] font-bold text-[1.5vw]">Figma</h1>
          </div>
          <div class="subjudul-card5 w-[12vw] ml-[2vw] mt-[1vw] font-[700]">
            <h1>Figma is my daily apss, i open this app every day and everytime, i love this so much</h1>
          </div>
        </div>
        <div class="card6 w-[255px] h-[260px] bg-white" data-aos="flip-left" data-aos-delay="600">
          <div class="gambar-card6">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 54 33" class="gambar-css w-[4vw] ml-[6vw]"><g clip-path="url(#prefix__clip0)"><path fill="#000" fill-rule="evenodd" d="M27 0c-7.2 0-11.7 3.6-13.5 10.8 2.7-3.6 5.85-4.95 9.45-4.05 2.054.513 3.522 2.004 5.147 3.653C30.744 13.09 33.808 16.2 40.5 16.2c7.2 0 11.7-3.6 13.5-10.8-2.7 3.6-5.85 4.95-9.45 4.05-2.054-.513-3.522-2.004-5.147-3.653C36.756 3.11 33.692 0 27 0zM13.5 16.2C6.3 16.2 1.8 19.8 0 27c2.7-3.6 5.85-4.95 9.45-4.05 2.054.514 3.522 2.004 5.147 3.653C17.244 29.29 20.308 32.4 27 32.4c7.2 0 11.7-3.6 13.5-10.8-2.7 3.6-5.85 4.95-9.45 4.05-2.054-.513-3.522-2.004-5.147-3.653C23.256 19.31 20.192 16.2 13.5 16.2z" clip-rule="evenodd"/></g><defs><clipPath id="prefix__clip0"><path fill="#fff" d="M0 0h54v32.4H0z"/></clipPath></defs></svg>
          </div>
          <div class="judul-card6">
           <h1 class="ml-[2vw] mt-[2.5vw] font-bold text-[1.5vw]">Tailwind Css</h1>
          </div>
          <div class="subjudul-card6">
            <h1 class="subjudul-card2 w-[12vw] ml-[2vw] mt-[1vw] font-[700]">I do css for styling website, it makes awesome my website, and i do styling this website with css.</h1>
          </div>
        </div>
        <div class="card7 w-[255px] h-[260px] bg-white" data-aos="flip-left" data-aos-delay="700">
          <div class="gambar-card7">
            <img src="{{ asset('asset-agus/php (1).png') }}" class="gambar-php w-[4vw]">
          </div>
          <div class="judul-card7">
            <h1 class="ml-[2vw] mt-[1vw] font-bold text-[1.5vw]">Php</h1>
          </div>
          <div class="subjudul-card7 w-[12vw] ml-[2vw] mt-[1vw] font-[700]">
           <h1>Php is a language that i learned too, i use php just for connect my website into database</h1>
          </div>
        </div>
        <div class="card8 w-[255px] h-[260px] bg-white" data-aos="flip-left" data-aos-delay="800">
          <div class="gambar-card8">
            <img src="{{ asset('asset-agus/laravel.png') }}"  class="gambar-laravel w-[4vw]">
          </div>
          <div class="judul-card8">
            <h1 class="ml-[2vw] mt-[1vw] font-bold text-[1.5vw]">Laravel</h1>
          </div>
          <div class="subjudul-card8 w-[12vw] ml-[2vw] mt-[1vw] font-[700]">Laravel is my php framework, and i still learning this framework.</div>
        </div>
      </div>
    </div>

    <div class="resume ml-[30vw] mt-[10vw]" id="resume">
      <div class="text-resume ml-[18vw]" data-aos="zoom-in-up">Resume</div>
      <div class="judul-resume text-[3vw] ml-[9vw] font-bold" data-aos="zoom-in-up" >Curiculum Vitae</div>
      <div class="subjudul-resume ml-[1vw] text-[1.3vw] mt-[1vw] font-light" data-aos="zoom-in-up" >Here are my curiculum vitae, you can download it, click download cv text</div>
      <div class="download-cv mt-[3vw]"><a download="Cv-agus.pdf" href="Cv-agus.pdf" class="text-download ml-[33vw] font-bold mt-[3vw]" data-aos="zoom-in-up" > Download CV</a></div>
      <img src="{{ asset('asset-agus/CV-agus.png') }}" class="gambar-cv mt-[vw] w-[40vw] bg-white" data-aos-delay="300" data-aos="flip-left">
    </div>

    <div class="contact-me" id="contact-me">
     <h1 class="text-[10vw] ml-[10vw]">BELUM SELESAIII</h1> 
    </div>
  </div>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/TextPlugin.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <script src="{{ asset('asset-agus/script.js') }}"></script>
  <script src="tilt.jquery.js"></script>
  

  <script>
    gsap.registerPlugin(TextPlugin);
    gsap.from(".subjudul", {
      duration: 3,
      text: "",
      delay: 4
    })
  </script>

  <script>
    $('.gambar-hero').tilt({
      scale: 1
    })
  </script>

<script>
  $('.kiri-about').tilt({
    scale: 1
  })
</script>
</body>

</html>