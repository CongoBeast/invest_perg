<?php include('admin/user.php') ?>
<?php
    function searchOffer($search){
      include('admin/db.php');
      $query  =  '%'.$search.'%';

      $sql = "SELECT * FROM offers WHERE title LIKE ? OR description LIKE ? ";
      $stmt = $db->prepare($sql);
      $stmt->execute([$query, $query]);

      $search_res = $stmt->fetchAll();

      return($search_res);
      // header("location: ../view.php");
      // exit();
    }

    $search_res = searchOffer($_GET['search']);

    //var_dump($_GET['search']);

?>
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
        background-image: url(includes/cover2.jpg);
        background-size: cover;
        background-attachment: fixed;
        background-position:center center;
        min-height: 100vh;
        height: fit-content;
        width: 100%;
        background-repeat: no-repeat;
      }
      .color-overlay{
        height: inherit;
        background-color: rgba(142, 36, 170, 0.5);
        min-height: 100vh;
        padding: 10px;
      }
      .card-slide{
        width: 300px;
        height: fit-content;
        border: 5px solid #8e24aa;
        color: black;
      }
      .offers{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-around;
        margin-top: 10px;
        margin-bottom: 10px;
      }
      .search-bar{
        margin-top: 10px;
        margin-bottom: 10px;
      }
      .null-search{
        margin-top: 20px;
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
      .social-header{
        font-weight: bold !important;
        color: #ffc107;
      }
    </style>
  </head>
  <body>

    <?php include 'header.php'; ?>

    <div class="main-div">

        <div class="color-overlay">

          <nav class="search-bar container">
              <div class="nav-wrapper purple darken-1">
                <form method="get" action="view.php">
                  <div class="input-field">
                    <input id="search" type="search" placeholder="Search for offers" name="search" required>
                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                    <i class="material-icons">close</i>
                  </div>
                </form>
              </div>
         </nav>

         <div class="offers container">
           <?php if (isset($search_res)): ?>
                 <?php foreach ($search_res as $item => $value): ?>

                         <div class="card white darken-1 card-slide z-depth-4">
                           <div class="card-content black-text">
                             <span class="card-title"><?php echo $search_res[$item]['title']; ?></span>
                             <p class="card-text"><?php echo $search_res[$item]['description']; ?></p>
                             <br>
                             <p>Posted by  <?php echo $search_res[$item]['username']; ?></p>
                             <br>
                             <p><?php echo $search_res[$item]['offer_date']; ?></p>
                             <br>
                             <p>Contact me on this number</p>
                             <p><?php echo $search_res[$item]['phone_number']; ?></p>
                           </div>
                         </div>

                 <?php endforeach; ?>

                 <?php if ($search_res == null): ?>
                    <div class="null-search container z-depth-4 white">
                      <h5 class="center-align">Oooops!!!! Sorry</h4>
                      <h5 class="center-align">There are no offers with that no offers</h4>
                    </div>
                 <?php endif; ?>

           <?php else: ?>
             <?php foreach ($all_info as $item => $value): ?>

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

             <?php endforeach; ?>
           <?php endif; ?>



         </div>


        </div>

    </div>

    <?php include('footer.php'); ?>

    <script src="includes/jquery-3.4.1.min.js" charset="utf-8"></script>
    <script src="includes/materialize.js" charset="utf-8"></script>
    <script src="includes/init.js" charset="utf-8"></script>
  </body>
</html>
