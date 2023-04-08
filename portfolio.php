<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./portfolio.css"/>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Sora:wght@700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@500;700&display=swap"
    />
  </head>
  
  <body>
    <div class="desktop-5">
      <div class="homepage-desktop">
        <div class="navbar-section">
          <div class="menu-navbar"></div>
          <div class="hero-text-section-parent">
            <div class="hero-text-section">
              <div class="hi-im-lastname" id="main">
              Hi I'm <?php echo $_GET['firstname'] ;echo "\x20\x20\x20";echo $_GET['lastname']?>, a special human with some ability to love
                learning and working on teamwork.
              </div>
            </div>
            <div class="background"></div>
            <b class="naufaldi-logo"><?php echo $_GET['lastname']?></b>
            <div class="home">Home</div>
            <div class="portfolio">Portfolio</div>
            <div class="border-bottom-navbar"></div>
          </div>
        </div>
        <div class="bio-section-parent">
          <div class="bio-section">
            <div class="biography-section">
              <div class="lets-connect-section">
                <b class="lets-connect">Lets connect</b>
              </div>
              <div class="description-body">
                <div class="hi-iam-firstname-container" id="biography">
                  <p class="hi-iam-firstname">
                    Hi I’am <?php echo $_GET['firstname'] ;echo "\x20";echo $_GET['lastname']?> pursuing my <?php echo $_GET['education'];?> and &nbsp;&nbsp;I live in <?php echo $_GET['workplace'];?> and in my free time I like to do things like <?php echo $_GET['hobbies']?> .
                
                  </p>
                </div>
              </div>
              <div class="bio-title"><b class="biography">Biography</b></div>
            </div>
            <div class="avatar">
              <img
                class="avatar-child"
                alt=""
                src="./public/ellipse-1.svg"
              /><img
                class="image-1-icon"
                alt=""
                src="./public/image-1@2x.png"
              />
            </div>
          </div>
          <div class="group-child"></div>
          <a class="social-media-instagram" href="<?php echo $_GET['instaid']?>"
            ><div class="logo-container"></div>
            <img class="logo-2-icon" alt="" src="./public/logo-2.svg"
          /></a>
        </div>
        <img
          class="image-1048-icon"
          alt=""
          src="./public/image-1048@2x.png"
        /><a class="logo-12" href="linkedin.com"
          ><img
            class="vector-icon1"
            alt=""
            src="./public/vector1.svg" /></a
        ><a class="rectangle-parent" href="<?php echo $_GET['gitid']?>"
          ><div class="group-item"></div>
          <img class="vector-icon2" alt="" src="./public/vector.svg"
        /></a>
      </div>
      <div class="what-i-do-section-parent">
        <div class="what-i-do-section">
          <div class="what-i-do-section">
            <b class="what-im-interested">What I’m interested in</b>
            <div class="my-skills-are" id="skills">My skills are <?php echo $_GET['skills']?>.</div>
          </div>
        </div>
        <img class="image-1047-icon" alt="" src="./public/image-1047@2x.png" />
      </div>
    </div>
  </body>
</html>
