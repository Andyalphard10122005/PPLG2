<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('Assets-rizqih/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <div class="intro">
          <div class="profile">
            <div class="photo">
              <img src="{{asset('Assets-rizqih/k.jpeg')}}" >
            </div>
            <div class="bio">
              <h1 class="name">Muhammad Rizqih.R</h1>            </div>
          </div>
          <div class="intro-section about">
            <h1 class="title">about me</h1>
            <p class="paragraph">
              Hi everyone, I am Rizqih , creating awesome and effective visual identities for
               companies of all sizes around the globe. Let's start scrolling and learn more about me.
            </p>
          </div>
          <div class="intro-section contact">
            <h1 class="title">Contact</h1>
            <div class="info-section">
              <i class="fas fa-phone"></i>
              <span>(+62)81211866965</span>
            </div>
            <div class="info-section">
              <i class="fas fa-map-marker-alt"></i>
              <span>Depok, Indonesia</span>
            </div>
            <div class="info-section">
              <i class="fas fa-envelope"></i>
              <span><a href="mailto:muhammadrizqih14@gmail.com">mhmdrizqih14@gmail.com</a></span>
            </div>
          </div>
          <div class="intro-section lengguange">
            <h1 class="title">Social</h1>
            <div class="info-section">
              <i class="fab fa-github"></i>
              <span>mhmdrzqh_</span>
            </div>
            <div class="info-section">
              <i class="fab fa-instagram"></i>
              <span>mhmdrzqh_</span>
            </div>
            <div class="info-section">
              <i class="fab fa-facebook"></i>
              <span>Muhammad Rizqih</span>
            </div>
          </div>
        </div>
        <div class="detail">
          <div class="detail-section edu">
            <div class="detail-title">
              <div class="title-icon">
                <i class="fas fa-user-graduate"></i>
              </div>
              <span>Education</span>
            </div>
            <div class="detail-content">
              <div class="timeline-block">
                <h1>MTS Al-Hidayah</h1>
                <time>2017 - 2019</time>
              </div>
              <div class="timeline-block">
                <h1>SMK Taruna Bhakti</h1>
                <time>2020 - present</time>
              </div>
            </div>
          </div>
          <div class="detail-section pg-skill">
            <div class="detail-title">
              <div class="title-icon">
                <i class="fas fa-laptop-code"></i>
              </div>
              <span>Programming skills</span>
            </div>
            <div class="detail-content">
              <ul class="pg-list">
                <li>
                  <span>HTML</span>
                  <div class="sb-skeleton">
                    <div class="skillbar" style="--pgbar-length: 80%"></div>
                  </div>
                </li>
                <li>
                  <span>CSS</span>
                  <div class="sb-skeleton">
                    <div class="skillbar" style="--pgbar-length: 75%"></div>
                  </div>
                </li>

              </ul>
            </div>
          </div>
          <div class="detail-section tool-skill">
            <div class="detail-title">
              <div class="title-icon">
                <i class="fas fa-tools"></i>
              </div>
              <span>Developement Tools</span>
            </div>
            <div class="detail-content">
              <ul class="tool-list">
                <li>
                  <svg viewbox="0 0 100 100">
                    <circle cx="50" cy="50" r="45"></circle>
                    <circle class="cbar" cx="50" cy="50" r="45" style="--percent: 0.6"></circle>
                  </svg>
                  <span class="tl-name">Photoshop</span>
                  <span class="tl-exp">60%</span>
                </li>
                <li>
                  <svg viewbox="0 0 100 100">
                    <circle cx="50" cy="50" r="45"></circle>
                    <circle class="cbar" cx="50" cy="50" r="45" style="--percent: 0.8"></circle>
                  </svg>
                  <span class="tl-name">Vs Code</span>
                  <span class="tl-exp">80%</span>
                </li>
                <li>
                  <svg viewbox="0 0 100 100">
                    <circle cx="50" cy="50" r="45"></circle>
                    <circle class="cbar" cx="50" cy="50" r="45" style="--percent: 0.7"></circle>
                  </svg>
                  <span class="tl-name">Git</span>
                  <span class="tl-exp">70%</span>
                </li>
              </ul>
            </div>
      
          </div>
          <div class="detail-section interests">
            <div class="detail-title">
              <div class="title-icon">
                <i class="fas fa-heart"></i>
              </div>
              <span>Hobby</span>
            </div>
            <div class="detail-content">
              <div class="outer-frame">
                <ul class="favor-list">
                  <li>
                    <i class="fas fa-gamepad"></i>                 
                    <span>Game</span>
                  </li>
                  <li>
                    <i class="fas fa-film"></i>
                    <span>Movie</span>
                  </li>
                  <li>
                    <i class="fas fa-headphones-alt"></i>
                    <span>Music</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>