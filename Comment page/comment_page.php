<?php
if (session_id() == "") {
    session_start();
} ?>
<?php include "action.php"; ?>
<?php $do = isset($_GET["do"]) ? $_GET["do"] : "comment"; ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Discover Egypt</title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Reggae+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">

  <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="../Main_page/css/styleform.css">
  <link rel="stylesheet" href="../Main_page/css/styles.css">


  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>



  <section class="colored-section" id="title">
    <div class="item">
            <div class="carousel-caption">
                <div class="container-fluid">
                    <div class="item">
                      <nav class="navbar navbar-expand-lg navbar-dark">
                          <a class="navbar-brand"  href="../Main_page/index.php">Discover Egypt</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
                        <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                              <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                          <a href="#">
                            <button type="button" class="btn btn-outline-warning btn-sm btn--show-modal"><i class="fas fa-sign-in-alt"></i>Register/Login</button></a>
                        </li>
                        <li class="nav-item">
                          <button type="button" class="btn btn-outline-warning btn-sm"><i class="fas fa-envelope"></i>Contact</button>
                        </li>
                          <li class="nav-item">
                            <a href="../Historical places/index.php">
                            <button type="button" class="btn btn-outline-warning btn-sm"><i class="bell icon"></i>Historical Places</button></a>
                        </li>
                        <?php if (isset($_SESSION["username"])) { ?>
                          <form action="../register_login/logout.php" method="POST">
                              <button name="logout" class="btn btn-outline-warning btn-sm"><i class="fas fa-envelope"></i>Logout</button>
                              </form>
                        <?php } ?>
                             
                                </ul>
                              </div>
                            </nav>
                          </div>
                          </div>

             </div>

                </div>


  </section>
<section>
  <div class="Saqqara">
    <h1 class="cards"><?php echo $rowMonument["monument_name"]; ?></h1>
    <h3 class="cards-heading"><?php echo $rowMonument[
        "monument_location"
    ]; ?></h3>
  <h4 class="card-text"><?php echo $rowMonument["monument_description"]; ?></h4>
</h4>
  </div>
</section>



<div class="album py-5 ">
        <div class="container">

          <div class="row">
          <?php while ($rowImages1 = mysqli_fetch_assoc($resultImage)) { ?>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 300px; width: 100%; display: block;" src=<?= $rowImages1[
                    "image_source"
                ] ?>  data-holder-rendered="true">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><i class="fas fa-thumbs-up"></i> Like </button>
                      <button type="button" class="btn view-btn btn-sm btn-outline-secondary"><i class="fas fa-comment"></i>View</button>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>

          </div>
        </div>
<div class="comment">


        <div class="container colored-section ">

                    <div class="row  mt-4 mb-4 ">

                        <div class="col-6 butt rounded">

                         <h4 class="cards p-2">Write your comment !</h4>

                         
                             <?php if (isset($_SESSION["username"])) { ?>
                              <form action="#" method="POST" class="p-2">

                              <div class="form-group form-group-lg">
                              <h4 class="cards p-2">Posting comment as : <?php echo $_SESSION["username"]; ?></h4>
                              
                              <div class="form-group form-group-lg">
   
                                  <textarea style="width: 100%; height:auto;" rows="5" cols="60" name="comment" class="form-control rounded-0" placeholder="Write your comment !" required ></textarea>
   
                              </div>
                              </div>


                             

                            
                              <input type="submit" name="submit"class="btn btn-sm btn-outline-secondary">
                              </form>
                              <?php } else { ?>
                              <h4 class="cards p-2">Please log in to write comments</h4>
                              <a href="#"><button class="btn btn-sm btn-outline-secondary btn--show-modal">Log in</button></a>

                              <?php } ?>
                              




                         



                    </div>
                    

                </div>

              </div>

</div>

<div class="row justify-content-center">
                      <div class="col-8 rounded p-3">
                        <?php
                        $querySelect = "SELECT * FROM comments1 WHERE monument_id='$monument_id' ORDER BY comment_date DESC";
                        $selectResult = mysqli_query($connection, $querySelect);
                        while ($row = mysqli_fetch_assoc($selectResult)) { ?>
                        <div class="card mb-2  border-primary">
                          <div class="card-header zoz header-color py-1">
                          <span class="font-italic ">Posted by: <?= $row[
                              "comment_author"
                          ] ?> </span>
                          <span class="float-right font-italic">On: <?= $row[
                              "comment_date"
                          ] ?></span>
                          </div>
                        </div>
                        <div class="card-body comment-section-color comment-bar py-2">
                        <p class="card-text"><?= $row["comment_content"] ?></p>
                        </div>
                        <div class="card-footer py-2">
                        <div class="float-right"></div>
                        </div> 
                        <?php }
                        ?>
                        
                        
                      </div>
                    
                    
                    </div>

      </div>




  <section class="colored-section" id="press">
    <h2 class="featurette-heading">Trusted By</h2>
    <img class="press-logo" src="images/techcrunch.png" alt="tc-logo">
    <img class="press-logo" src="images/tnw.png" alt="tnw-logo">
    <img class="press-logo" src="images/bizinsider.png" alt="biz-insider-logo">
    <img class="press-logo" src="images/mashable.png" alt="mashable-logo">

  </section>






  <!-- Footer -->

<?php include "../utilities/footer.php"; ?>
<?php include "../register_login/form.php"; ?>
<?php $testArr=(explode("/",$_SERVER["PHP_SELF"])) ;
  echo $testArr[3];

?>
</body>

<script src="../js/main.js" ></script>
</html>
