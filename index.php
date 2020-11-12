<?php include('admin/user.php') ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="includes/materialize.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title></title>
    <style media="screen">
    @import url('https://fonts.googleapis.com/css?family=Poppins');
    body{
      font-family: Poppins;
    }
    .main-div{
      background-image: url(includes/cover-foto.jpg);
      background-size: cover;
      background-attachment: fixed;
      background-position:center center;
      height: 80vh;
      width: 100%;
      background-repeat: no-repeat;
    }

    .header-text{
      font-family: Poppins !important;
      color: white;
      font-weight: bold;
      font-size: 5vw;
    }
    .color-overlay{
      height: inherit;
      background-color: rgba(142, 36, 170, 0.5);
    }
    .search-bar{
      max-width: 500px;
      margin-top: 50px;
      margin-bottom: 20px;
    }
    .header-title{
      width: fit-content;
      font-weight: bold;
    }
    .inner-main{
      display: flex;
      flex-direction: column;
      flex-wrap: wrap;
      align-items: center;
      justify-content: center;
    }
    .btns{
      width: fit-content;
      margin-bottom: 30px;
    }
    .btns-pos{
      margin-top: 20px;
      margin-bottom: 20px;
    }
    .card-slide{
      width: 300px;
      height: fit-content;
      border: 5px solid #8e24aa;
      color: black;
    }
    .slide{
    }
    .carousel-item{
      height: fit-content !important;
      width: fit-content !important;
    }
    .service-cards{
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: space-around;
      flex-wrap: wrap;
    }
    .serv-card{
      width: 300px;
      height: fit-content;
    }
    footer{
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      height: fit-content;
      color: white;
      font-weight: bold;
    }
    .socials{
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
    }
    .serv-text{
      font-weight: bold !important;
    }
    .current-title{
      margin:auto;
      text-align: center;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .social-header{
      font-weight: bold !important;
      color: #ffc107;
    }
    .btn-text{
      color: black;
      font-weight: bold !important;
    }
    .card-text{
      font-size: 12px;
    }
    </style>
  </head>
  <body>

    <?php include('header.php') ?>

  <div class="main-div">
    <div class="color-overlay valign-wrapper">

        <div class="container inner-main r">

            <h3 class="header-text center-align">"Connecting skill to the co-operate world"</h3>

          <?php if (isset($_SESSION['username'])): ?>
            <a href="admin/dashboard.php" class="waves-effect waves-light btn amber btns btns-pos btn-text">Create a New Offer</a>
          <?php else: ?>
            <a href="#modal2" class="waves-effect waves-light btn modal-trigger amber btns btns-pos btn-text">Create a New Offer</a>
          <?php endif; ?>
        </div>

      </div>

    </div>

    <div class="offer-div">
        <div class="container current-title">
          <h3 class="header-title center-align">Current Offers</h3>
        </div>


        <nav class="search-bar container">
            <div class="nav-wrapper purple darken-1">
              <form method="post" action="admin/user.php">
                <div class="input-field">
                  <input id="search" type="search" name="search" required>
                  <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                  <i class="material-icons">close</i>
                </div>
              </form>
            </div>
       </nav>

      <div class="slide">

        <div class="carousel">

          <?php foreach ($all_info as $item => $value): ?>

            <div class="carousel-item">
                <div class="">
                  <div class="card white darken-1 card-slide z-depth-4">
                    <div class="card-content black-text">
                      <span class="card-title"><?php echo $all_info[$item]['title']; ?></span>
                      <p class="card-text"><?php echo $all_info[$item]['description']; ?></p>
                      <br>
                      <p>Posted by  <?php echo $all_info[$item]['username']; ?></p>
                      <br>
                      <p><?php echo $all_info[$item]['offer_date']; ?></p>
                    </div>
                  </div>
                </div>
            </div>

          <?php endforeach; ?>

        </div>
      </div>

      <div class="container center-align btns-pos">
        <a href="view.php" class="waves-effect waves-light btn black ">View all offers</a>
      </div>

    </div>

    <div id="services" class="service-div">

      <div class="container center-align ">
        <h3 class="serv-text">What we do...</h3>
      </div>

      <div class="service-cards">

        <div class="serv-card">
          <div class="">
            <div class="card">
              <div class="card-image">
                <img src="includes/team.jpg">
                <span class="card-title">Service 2</span>
              </div>
              <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="serv-card">
          <div class="">
            <div class="card">
              <div class="card-image">
                <img src="includes/team.jpg">
                <span class="card-title">Service 1</span>
              </div>
              <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
              </div>
            </div>
          </div>
       </div>

        <div class="serv-card">
          <div class="">
            <div class="card">
              <div class="card-image">
                <img src="includes/team.jpg">
                <span class="card-title">Service 3</span>
              </div>
              <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
              </div>
            </div>
          </div>
       </div>


      </div>

    </div>

    <div id="modal1" class="modal">
      <div class="modal-content">
        <h4 class="center-align">About Us</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
      </div>
    </div>

    <div id="modal2" class="modal">
      <div class="modal-content">
        <h4 class="center-align">You are not logged in!</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
      </div>
    </div>

    <?php include('footer.php'); ?>

  <script src="includes/jquery-3.4.1.min.js" charset="utf-8"></script>
  <script src="includes/materialize.js" charset="utf-8"></script>
  <script src="includes/init.js" charset="utf-8"></script>
  </body>
</html>
