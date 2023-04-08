<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./form.css" />
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
  <script>
    function portfolio()
    {
      window.location.assign("portfolio.php");
    }
  </script>

  <body>
    <div class="desktop-4">
      <div class="rectangle-group">
        <div class="group-inner"></div>
        <b class="build-your-portfolio">Build your portfolio in minutes</b
        ><img class="group-icon" alt="" src="./public/group.svg" />
      </div>
      <div class="start-testing-in-minutes-parent">
        <div class="start-testing-in">Start testing in minutes !</div>
        <img class="ellipse-icon" alt="" src="./public/ellipse-1.svg" /><b
          class="build-your-portfolio-container"
          ><p class="build-your">Build your</p>
          <p class="build-your">Portfolio instantly !!</p></b
        >
      </div>

      <form class="form" action="portfolio.php" method="get" id="form">
      
        <div class="firstname">
          <input
            class="firstname-child"
            type="text"
            name = "firstname"
            defaultvalue="firstname"
            required
          />
          <div class="firstname-item"></div>
          <div class="first-name">First name</div>
        </div>
        <div class="education">
          <input
            class="education-child"
            type="text" 
            name = "education"
            defaultvalue="education"
            required
          />
          <div class="education-item"></div>
          <div class="education1">Education</div>
        </div>
        <div class="workplace">
          <div class="workplace-child"></div>
          <div class="workplace-item"></div>
          <input
            class="workplace-inner"
            type="text"
            name = "workplace"
            defaultvalue="workplace"
            required
          />
          <div class="workplace-item"></div>
          <div class="work-place">Work place</div>
        </div>
        <div class="hobbies">
          <input
            class="hobbies-child"
            type="text"
            name = "hobbies"
            defaultvalue="hobbies"
            required
          />
          <div class="hobbies-item"></div>
          <div class="hobbies1">Hobbies</div>
        </div>
        <div class="hobbies2">
          <input
            class="hobbies-child"
            type="text"
            name = "instaid"
            defaultvalue="hobbies"
            required
          />
          <div class="hobbies-child1"></div>
          <div class="insta-id-link">Insta id link</div>
        </div>
        <div class="hobbies3">
          <input
            class="hobbies-child"
            type="text"
            name = "gitid"
            defaultvalue="hobbies"
            required
          />
          <div class="hobbies-child2"></div>
          <div class="insta-id-link">Git id link</div>
        </div>
        <div class="hobbies4">
          <input
            class="hobbies-child"
            type="text"
            name = "linkedinid"
            defaultvalue="hobbies"
            required
          />
          <div class="hobbies-child4"></div>
          <div class="linked-in-id">Linked in id link</div>
        </div>
        <div class="skills">
          <input
            class="skills-child"
            type="text"
            name = "skills"
            defaultvalue="skills"
            required
          />
          <div class="skills-item"></div>
          <div class="skills1">Skills</div>
        </div>
        <div class="lastname">
          <input
            class="firstname-child"
            type="text"
            name = "lastname"
            defaultvalue="lastname"
            required
          />
          <div class="lastname-item"></div>
          <div class="last-name">Last name</div>
        </div>
        <div class="form-child"></div>
        <b class="please-enter-your">Please enter your details</b>
        <button class="clickbutton">
          <div class="proceedbutn" name = "btn" onclick="portfolio()">
            <div class="rectangle-container">
              <div class="rectangle-div"></div>
              <div class="click-to-proceed">Click to proceed</div>
             
            </div>
          </div>          
        </button>
      </form>

      <img
        class="social-media-instagram1"
        alt=""
        src="./public/social-media--instagram.svg"
      /><img class="vector-icon3" alt="" src="./public/vector.svg" /><img
        class="logo-11-icon"
        alt=""
        src="./public/logo-11.svg"
      />
    </div>
  </body>
</html>

