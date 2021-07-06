<?php
require_once("../CLBS-DEMO/components.php");
// require_once("../crud/php/operation.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CLBS-DEMO</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="styles.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
  <!-- Navbar Section -->
  <nav class="navbar">
    <div class="navbar__container">
      <a href="/" id="navbar__logo"><i class="fal fa-paper-plane"></i> CLBS-DEMO</a>
      <ul class="navbar__menu">
        <li class="navbar__item">
          <a href="/" class="navbar__links"> Home </a>
        </li>
        <li class="navbar__item">
          <a href="/" class="navbar__links"> News </a>
        </li>
        <li class="navbar__item">
          <a href="/" class="navbar__links"> Imprint </a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="bg--img">
    <img src="images/birds.jpg" class="bg" alt="pic" />
  </div>

  <!-- Modal -->
  <div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <div class="modal__main--content">
        <div class="modal__content--container">
          <div class="modal__content--text">
            <h2>Welcome</h2>
            <p>
              Maecenas sed diam eget risus varius blandit sit amet non magna.
              Etiam porta sem malesuada magna mollis euismod. Donec sed odio
              dui. Cras justo odio, dapibus ac facilisis in, egestas eget
              quam. Curabitur blandit tempus porttitor.
              <br />
              <br />
              Integer posuere erat a ante venenatis dapibus posuere velit
              aliquet. Nulla vitae elit libero, a pharetra augue. Praesent
              commodo cursus magna, vel scelerisque nisl consectetur et. Cum
              sociis natoque penatibus et magnis dis parturient montes,
              nascetur ridiculus mus.
            </p>
          </div>
          <div class="modal__content--form">
            <form action="" method="post">
              <h3>Contact Form</h3>
              <label for="name">First name:</label><br />
              <!-- <input type="text" name="name" /> -->
              <?php inputElement("name", "") ?>
              <br />
              <label for="surname">Surname:</label><br />
              <!-- <input type="text" name="surname" /> -->
              <?php inputElement("surname", "") ?>
              <br />
              <label for="email">Email:</label><br />
              <!-- <input type="text" name="email" /> -->
              <?php inputElement("email", "") ?>
              <br />
              <label for="telephone">Telephone:</label><br />
              <!-- <input type="text" name="telephone" /> -->
              <?php inputElement("telephone", "") ?>
              <br />
              <?php buttonElement("btn-  ", "submitBtn", "Submit", "create", "data-toggle='tooltip' data-placement='bottom' title='Create'"); ?>
              <!-- <button class="" data-dismiss="modal" id="submit" type="submit">
                Submit
              </button> -->
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Content Section -->
  <div class="main">
    <div class="main__container">
      <div class="main__content">
        <p>
          Aenean lacinia bibendum nulla sed consectetur. Duis mollis, est non
          commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem
          nec elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam
          venenatis vestibulum. Curabitur blandit tempus porttitor. Cras
          mattis consectetur purus sit amet fermentum. Vivamus sagittis lacus
          vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula
          porta felis euismod semper.
          <br />
          <br />

          Maecenas faucibus mollis interdum. Maecenas faucibus mollis
          interdum. Vestibulum id ligula porta felis euismod semper. Donec sed
          odio dui.
          <br />
          <br />

          Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
          Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
          Nullam id dolor id nibh ultricies vehicula ut id elit. Donec
          ullamcorper nulla non metus auctor fringilla. Donec ullamcorper
          nulla non metus auctor fringilla.
          <br />
          <br />

          Sed posuere consectetur est at lobortis. Praesent commodo cursus
          magna, vel scelerisque nisl consectetur et. Praesent commodo cursus
          magna, vel scelerisque nisl consectetur et. Fusce dapibus, tellus ac
          cursus commodo, tortor mauris condimentum nibh, ut fermentum massa
          justo sit amet risus. Integer posuere erat a ante venenatis dapibus
          posuere velit aliquet. Sed posuere consectetur est at lobortis.
        </p>
      </div>
      <div class="main__img--container">
        <img src="images/flowers.jpg" alt="pic" id="main__img" />
      </div>
    </div>
  </div>

  <!-- Footer Section -->
  <div class="footer__container">
    <div class="footer__links">
      <div class="footer__links--wrapper">
        <div class="footer__links--items">
          <h2>About Us</h2>
          <a href="/">How is works</a>
          <a href="/">Testimonals</a>
          <a href="/">Career</a>
          <a href="/">Inverstments</a>
          <a href="/">Terms of Service</a>
        </div>
        <div class="footer__links--items">
          <h2>Contact Us</h2>
          <a href="/">Contact</a>
          <a href="/">Support</a>
          <a href="/">Destinations</a>
          <a href="/">Sponsorships</a>
        </div>
      </div>
      <div class="footer__links--wrapper">
        <div class="footer__links--items">
          <h2>Videos</h2>
          <a href="/">Submit Video</a>
          <a href="/">Ambassadors</a>
          <a href="/">Agency</a>
          <a href="/">Influencer</a>
        </div>
        <div class="footer__links--items">
          <h2>Social Media</h2>
          <a href="https://www.instagram.com">Instagram</a>
          <a href="https://www.facebook.com">Facebook</a>
          <a href="https://www.youtube.com">Youtube</a>
          <a href="https://www.twitter.com">Twitter</a>
        </div>
      </div>
    </div>
    <div class="social__media">
      <div class="social__media--wrap">
        <div class="footer__logo">
          <a href="/" id="footer__logo"><i class="fal fa-paper-plane"></i>CLBS-DEMO</a>
        </div>
        <p class="website__rights">CLBS-DEMO 2021. ALL rights reserved</p>
        <div class="social__icons">
          <a href="https://www.facebook.com" class="social__icon--links" tartget="_blank">
            <i class="fab fa-facebook"></i>
          </a>
          <a href="https://www.instagram.com" class="social__icon--links" tartget="_blank">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="https://www.twitter.com" class="social__icon--links" tartget="_blank">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="https://www.linkedin.com" class="social__icon--links" tartget="_blank">
            <i class="fab fa-linkedin"></i>
          </a>
          <a href="https://www.youtube.com" class="social__icon--links" tartget="_blank">
            <i class="fab fa-youtube"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
  <script>
    $('#submit').submit(function(e) {
      e.preventDefault();
      $('#IDModal').modal('hide');
      return false;
    });
  </script>
  <script src="app.js"></script>
</body>

</html>