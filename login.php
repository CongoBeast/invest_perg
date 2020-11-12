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
      .main-page{
        background-image: url(includes/sign-up.jpg);
        background-size: cover;
        background-attachment: fixed;
        background-position:center center;
        height: 100vh;
        width: 100%;
      }
      .color-overlay{
        height: inherit;
        background-color: rgba(142, 36, 170, 0.5);
      }
      .card-cont{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 20px;
      }
      #test5 , #test4{
        width: 300px !important;
      }
      .card-item{
        max-width: 680px;
        margin: 10px;
      }
      .cardz{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
      }
      .card-tabz{
        max-width: 580px;
        height: auto;
        margin-top: 110px;
        min-width: 305px;
      }
      nav{
        font-family: Poppins;
      }

      /* label color */
   .input-field label {
     color: #8e24aa;
   }
   /* label focus color */
   .input-field input[type=text]:focus + label {
     color: #8e24aa;
   }
   /* label underline focus color */
   .input-field input[type=text]:focus {
     border-bottom: 1px solid #8e24aa;
     box-shadow: 0 1px 0 0 #8e24aa;
   }
   /* valid color */
   .input-field input[type=text].valid {
     border-bottom: 1px solid #000;
     box-shadow: 0 1px 0 0 #000;
   }
   /* invalid color */
   .input-field input[type=text].invalid {
     border-bottom: 1px solid #000;
     box-shadow: 0 1px 0 0 #000;
   }
   /* icon prefix focus color */
   .input-field .prefix.active {
     color: #000;
   }
   .null-search{
     margin-top: 20px;
   }
    </style>
  </head>
  <body>

    <?php include('header.php') ?>

    <div class="main-page">
        <div class="color-overlay">



          <div class=" row card-cont ">

            <?php if (isset($_GET['res'])): ?>
              <div class="null-search container z-depth-4 white">
                <h5 class="center-align">Oooops!!!! Sorry</h4>
                <h5 class="center-align">Username or phone number already exists</h4>
              </div>
            <?php endif; ?>

            <div class="s10 card card-tabz">
                  <div class="card-tabs">
                    <ul class="tabs tabs-fixed-width">
                      <li class="tab purple darken-1"><a href="#test4" class="active text-white">Sign In</a></li>
                      <li class="tab purple darken-1"><a class="" href="#test5">Log In</a></li>
                    </ul>
                  </div>
                  <div class="card-content grey lighten-4">
                    <div id="test4">
                      <div class="row">
                          <form class="col s12" enctype="multipart/form-data" method="post" action="admin/user.php">
                            <div class="row">
                              <div class="input-field col s6">
                                <input id="first_name" name="first_name" type="text" required class="validate">
                                <label for="first_name">First Name</label>
                              </div>
                              <div class="input-field col s6">
                                <input id="last_name" type="text" name="Last_name" required class="validate">
                                <label for="last_name">Last Name</label>
                              </div>
                            </div>
                            <div class="row">
                              <div class="input-field col s12">
                                <input id="username" name="username" required type="text" class="validate">
                                <label for="username">Username</label>
                              </div>
                            </div>
                            <div class="row">
                              <div class="input-field col s12">
                                <input id="password" type="password" required name="password" class="validate">
                                <label for="password">Password</label>
                              </div>
                            </div>
                            <div class="row">
                              <div class="input-field col s12">
                                <input id="email" type="email" name="email" required class="validate">
                                <label for="email">Email</label>
                              </div>
                              <div class="input-field col s12">
                                <input id="phone_number" type="tel" name="phone_number" placeholder="263786343648 ---no spaces--no '+' " required class="validate">
                                <label for="phone_number">Phone number</label>
                              </div>
                            </div>
                                <input type="submit" class="btn wave-effect center-align purple darken-1" name="btn_sign">
                          </form>
                      </div>
                    </div>
                    <div id="test5">
                      <div class="row">
                          <form class="col s12" method="post" action="admin/user.php">
                            <div class="row">
                              <div class="input-field col s12">
                                <input id="l_username" name="log_username" type="text" class="validate">
                                <label for="disabled">Username</label>
                              </div>
                            </div>
                            <div class="row">
                              <div class="input-field col s12">
                                <input id="l_password" type="password" name="log_password" class="validate">
                                <label for="password">Password</label>
                              </div>
                            </div>

                                <input type="submit" class="btn wave-effect center-align purple darken-1" name="btn_log" value="Submit">
                          </form>
                      </div>

                    </div>
                  </div>
            </div>
          </div>

        </div>
    </div>


    <script src="includes/jquery-3.4.1.min.js" charset="utf-8"></script>
    <script src="includes/materialize.js" charset="utf-8"></script>
    <script src="includes/init.js" charset="utf-8"></script>
  </body>
</html>
