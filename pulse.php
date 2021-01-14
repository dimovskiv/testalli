<?php require_once("couch/cms.php"); ?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Pulse | Alliancys</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/7aa0d05815.js" crossorigin="anonymous"></script>
  </head>

  <body>
    <div class="back-to-top-btn" id="backToTopBtn" title="Back to top">
      <i class="fas fa-angle-up fa-2x"></i>
    </div>

    <div class="navbar-mobile">
      <div class="content">
        <div class="nav-link">
          <a class="linky" href="index.html">Home</a>
        </div>
        <div class="nav-link">
          <div class="mlink">
            <a class="linky" href="services.html">Services</a>
            <span id="this" style="color: white;">+</span>
          </div>
          <div class="menu" id="men">
            <div class="menuWrapper">
              <a href="blueprinting.html">Blueprinting</a>
              <a href="solutions.html">Solutions</a>
              <a href="consulting.html">Consulting</a>
              <a href="training.html">Training</a>
            </div>
          </div>
        </div>
        <div class="nav-link">
          <a class="linky" href="dna.html">DNA</a>
        </div>
        <div class="nav-link">
          <a class="linky">Pulse</a>
        </div>
        <div class="nav-link">
          <a class="linky" href="aboutus.php">About us</a>
        </div>
        <div class="nav-link">
          <a class="linky" href="contact.html">Contact</a>
        </div>
        <div class="nav-link PK">
          <a class="linky"><img src="united-kingdom.png" class="zastava"></a>
          <a class="linky"><img src="netherlands.png" class="zastava"></a>
        </div>
      </div>
    </div>

    <div class="navbar">
      <div class="sub">
        <div>
          <img src="logo-alt.png">
        </div>
      </div>
      <div class="sub">
        <div class="nav-links">
          <div class="nav-link">
            <a class="linky" href="index.html">Home</a>
          </div>
          <div class="nav-link">
            <a class="linky"href="services.html" >Services</a>
            <div class="dropdown">
              <a href="blueprinting.html">Blueprinting</a>
              <a href="solutions.html">Solutions</a>
              <a href="consulting.html">Consulting</a>
              <a href="training.html">Training</a>
            </div>
          </div>
          <div class="nav-link">
            <a class="linky" href="dna.html">DNA</a>
          </div>
          <div class="nav-link">
            <a class="linky" style="opacity:0.5">Pulse</a>
          </div>
          <div class="nav-link">
            <a class="linky" href="aboutus.html">About us</a>
          </div>
          <div class="nav-link">
            <a class="linky" href="contact.html">Contact</a>
          </div>
          <div class="nav-link">
            <a class="linky"><img src="united-kingdom.png" class="zastava"></a>
          </div>
          <div class="nav-link">
            <a class="linky"><img src="netherlands.png" class="zastava"></a>
          </div>
        </div>
        <div class="nav-mobile" id="nm">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
        </div>
      </div>
    </div>

    <div class="scroll-position">
      <div class="scroll-position__bar" id="scrollPositionBar"></div>
    </div>

    <div class="aboutHeader">
      <div class="sub">
        <h1>Blog</h1>
        <p>Read our awesome blog plz xd.</p>
      </div>
    </div>

    <div class="aboutContent1">
      <div class="blog__list">
        <div>
          <cms:pages masterpage="blog.php" paginate="1" limit="3">
            <h1><cms:show k_page_title/></h1>
            <p><cms:show blog_content/></p>
            <img src="<cms:show blog_image/>"><br>
            <button>
              <a href="<cms:show k_page_link/>">Read More</a>
            </button>
            <hr>

            <cms:if k_paginated_bottom>
              <p class="paginator">
                <cms:if k_paginate_link_next>
                  <a href="<cms:show k_paginate_link_next/>">Previous posts</a>
                </cms:if>
                <cms:if k_paginate_link_prev>
                  <a href="<cms:show k_paginate_link_prev/>">Newer posts</a>
                </cms:if>
              </p>
            </cms:if>
          </cms:pages>
        </div>
      </div>
    </div>

    <div class="footer">
      <div class="sub">
        <p>Contact</p>
        <div class="other">
          <ul>
            <li>Blueprints</li>
            <li>Solutions</li>
            <li>Consulting</li>
            <li>Training</li>
          </ul>
        </div>
      </div>
      <div class="sub">
        <p>Services</p>
        <div class="other">
          <ul>
            <li>Blueprints</li>
            <li>Solutions</li>
            <li>Consulting</li>
            <li>Training</li>
          </ul>
        </div>
      </div>
      <div class="sub">
        <p>Legal</p>
        <div class="other">
          <ul>
            <li>Terms and conditions</li>
            <li>Cookie Statement</li>
            <li>Disclaimer</li>
            <li>Privacy</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="copyright">
      <p>© 2021 - Alliancys</p>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>

</html>

<?php COUCH::invoke(); ?>