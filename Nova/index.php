<?php
$css = 'includes/layout/style/';
$js = 'includes/layout/script/';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <meta lang="en"/>
    <title>Nova</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <link href="favico.ico" rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo $css; ?>style.css"/>
    <link rel="stylesheet" href="<?php echo $css; ?>normalize.css"/>
    <link rel="stylesheet" href="<?php echo $css; ?>web-fonts-with-css/css/all.min.css">
    <link rel="stylesheet" href="<?php echo $css; ?>bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo $css; ?>aos.css"/>
    <script src="<?php echo $js; ?>jquery-3.3.1.min.js"></script>
    <script src="<?php echo $js; ?>jquery-ui.min.js"></script>
    <meta name="description" content="Nova">
    <!--[if It IE 9]>
    <script src="<?php echo $js; ?>html5shiv.min.js"></script>
    <script src="<?php echo $js; ?>respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <!-- <img src="img/bg.jpg" alt="" class="header-bg"> -->
    <div class="background-header">
    <header>
      <div class="row" style="width:100%">
        <div class="col-6">
          <img src="img/logo.png" alt="" class="logo-header">
        </div>
        <div class="col-6">
          <div class="header-info">
            <div class="links-content">
              <ul class="header-list">
                <li><a href="#" style="color: #0F1E32;text-shadow: 0 0 7px white;">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
            <div class="header-icons">
              <i class="fas fa-shopping-bag" id="shop-ico"></i>
              <i class="fas fa-search" id="search-ico"></i>
            </div>
          </div>
          <div class="search-content" id="search_content">
            <input type="text" name="" placeholder="Search ..." class="search-box">
            <i class="fas fa-file-signature"></i>
          </div>
        </div>
      </div>
    </header>
      <section>
        <div class="welcome-content">
          <div class="text-1">
            <h4>Hello!</h4>
            <h3>Abdelrahman Samir here,</h3>
            <p>What's in your mind ? Design ? Creative Idea for Company ? <br>Let's start now.</p>
          </div>
          <div class="arrow-content">
            <i class="fas fa-angle-double-left"></i>
            <i class="fas fa-angle-double-right"></i>
          </div>
          <button type="button" name="button" class="hire-btn">Hire Me</button>
        </div>
      </section>
    </div>
      <div class="conatier_">
      <main>
      <section>
        <div class="features-content">
          <div class="features">
            <i class="far fa-lightbulb"></i>
            <h4>Creative</h4>
            <p>Awesome Elements and Dimensions.</p>
            <div class="bottom-line"></div>
          </div>
          <div class="features">
            <i class="fas fa-stopwatch"></i>
            <h4>Duration</h4>
            <p>Fast than you think, More efficiently.</p>
            <div class="bottom-line"></div>
          </div>
          <div class="features">
            <i class="far fa-folder"></i>
            <h4>Customiation</h4>
            <p>Full access for your content, Easy to edit.</p>
            <div class="bottom-line"></div>
          </div>
          <div class="features">
            <i class="fas fa-sticky-note"></i>
            <h4>Notes</h4>
            <p>No complicated layers - scripts - shapes.</p>
            <div class="bottom-line"></div>
          </div>
        </div>
      </section>

      <hr>
      <section>
        <div class="example-one">
          <div class="ex-one-img">
            <img src="img/sep-icons.png" alt="" class="example-img">
          </div>
          <div class="ex-one-info">
            <h4 class="center-title">Special Icons</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
            <ul class="example-list">
              <li>Organization</li>
              <li>Simple</li>
              <li>text</li>
              <li>another text</li>
            </ul>
          </div>
        </div>
      </section>
      <hr>
      <section>
        <h4 class="center-title">My Skills</h4>
        <div class="skills-content">
          <div class="skills">
            <img src="img/svg/graphic-ico.svg" alt="">
            <h4>Graphic Design</h4>
          </div>
          <div class="skills">
            <img src="img/svg/motion-ico.svg" alt="">
            <h4>Motion Design</h4>
          </div>
          <div class="skills">
            <img src="img/svg/web-ico.svg" alt="">
            <h4>Web Design</h4>
          </div>
          <div class="skills">
            <img src="img/svg/development-ico.svg" alt="">
            <h4>Web Development</h4>
          </div>
        </div>
      <hr>
      <section>
        <div class="skills-info">
          <div class="sk-in-content">
            <img src="img/svg/graphic-ico.svg" alt="">
            <h3>Graphic Design</h3>
            <p>Started learning graphics in 2012 using simple and beginner software like (PhotoScape - InkScape), then tried to increase my skills by "Visual Feeding" so it's time for Adobe ! Started with the basics of tools in the programs, taking courses and doing the same examples ,Finally making my own projects</p>
            <div class="apps-img">
              <ul>
                <li><img src="img/adobe/indesign.png"/></li>
                <li><img src="img/adobe/Illustrator.png"/></li>
                <li><img src="img/adobe/Photoshop.png"/></li>
                <li><img src="img/adobe/Bridge.png"/></li>
              </ul>
            </div>
          </div>
          <div class="sk-in-content sk-prefix">
            <img src="img/svg/motion-ico.svg" alt="">
            <h3>Motion Design</h3>
            <p>Text goes here Text goes here Text goes here Text goes here Text goes here Text goes here Text goes here </p>
            <div class="apps-img">
              <ul>
                <li><img src="img/adobe/after-effects.png"/></li>
                <li><img src="img/adobe/PR.png"/></li>
                <li><img src="img/adobe/AAudition.png"/></li>
              </ul>
            </div>
          </div>
          <div class="sk-in-content">
            <img src="img/svg/web-ico.svg" alt="">
            <h3>Web Design</h3>
            <p>Text goes here Text goes here Text goes here Text goes here Text goes here Text goes here Text goes here </p>
            <div class="apps-img">
              <ul>
                <li><img src="img/web-design/jQuery.png" style="width: 33px;"/></li>
                <li><img src="img/web-design/js.png"/></li>
                <li><img src="img/web-design/bootstrap.png" style="background-color: #FFF;width: 39px;border-radius: 5px;"/></li>
                <li><img src="img/web-design/CSS3-HTML5.png" style="width: 46px;"/></li>
              </ul>
            </div>
          </div>
          <div class="sk-in-content sk-prefix">
            <img src="img/svg/development-ico.svg" alt="">
            <h3>Web Development</h3>
            <p>Text goes here Text goes here Text goes here Text goes here Text goes here Text goes here Text goes here </p>
            <div class="apps-img">
              <ul>
                <li><img src="img/web-develope/php.png" style="width: 46px;"/></li>
                <li><img src="img/web-develope/mysql.png" style="background-color: #FFF;width: 39px;border-radius: 5px;padding: 5px;"/></li>
                <li><img src="img/web-develope/ajax.png" /></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <hr>
      <section>
        <div class="lastet-projects">
          <h4>Lastet Project</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>

          <a href="https://www.behance.net/lesemary" target="_blank" class="behance-ico"><i class="fab fa-behance"></i></a>
          <div class="projects-content">
              <div class="projects-imgs">
                <img src="img/image1.jpg" alt="">
              </div>
              <div class="projects-imgs">
                <img src="img/image1.jpg" alt="">
              </div>
              <div class="projects-imgs">
                <img src="img/image1.jpg" alt="">
              </div>
              <div class="projects-imgs">
                <img src="img/image1.jpg" alt="">
              </div>
          </div>
        </div>
      </section>
    </main>
    <footer>
      <div class="footer-content">
        <div class="top-img">
          <img src="img/galaxy.png" alt="">
        </div>
        <div class="footer-info">
          <div class="contact-info">
            <ul>
              <li><i class="fas fa-phone"></i>Phone Number : 01027012337</li>
              <li><i class="far fa-envelope"></i>Email : Lesemary123@gmail.com</li>
              <li><i class="fas fa-globe-africa"></i><a href="">www.semarys.com</a></li>
              <li></li>
            </ul>
          </div>
          <div class="another-info">
            <h4>Note</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commod.</p>
          </div>
          <div class="form-info">
            <form class="" action="index.html" method="post">
                <input type="text" class="input-box-3" placeholder="Type your name...">
                 <input type="text" class="input-box-3" placeholder="Type your name...">
                  <input type="text" class="input-box-3" placeholder="Type your name...">
                 <textarea name="name" class="input-box-3" placeholder="Message"></textarea>
            </form>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <section>
  <div class="shop-content" id="shop_content">
    <div class="close-menu">
      <i class="fas fa-times" id="close-ico"></i>
    </div>
    <h5>Shopping</h5>
    </div>
  </section>
  <script type="text/javascript">
  $( "#search-ico" ).click(function() {
    $("#search_content").fadeToggle(1000);
    });
  $( "#shop-ico" ).click(function() {
    $("#shop_content").fadeToggle(1000);
    });
  $( "#close-ico" ).click(function() {
    $("#shop_content").fadeOut(1000);
    });

    $(document).ready(function(){

    $(".features").hover(function() {
      $(this).find("i").css('animation','flip-scale-up-hor 1s cubic-bezier(0.455, 0.030, 0.515, 0.955) both');
    });
  });
  </script>
</body>
</html>
