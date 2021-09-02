<?php
if(session_id()==""){

  session_start(); 
} 
include "../register_login/connection.php";


if(isset($_POST['submit'])){
  include "../register_login/register.php";
}
?>
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

  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
   <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="../Main_page/css/styleform.css">
</head>

<body>
  <section class="colored-section" id="title">
    <div class="item">
            <img src="images/simon.jpg" alt="pic 2">
              <?php include "../utilities/navbar.php" ?> 
    </div>
  </section>

  <section class="colored-section" id="press">
    <h2 class="featurette-heading">Discover historical places</h2>
    <div class="row">
        <div class="col-lg-4">
          <svg width="400" height="200">
      <defs>
          <clipPath id="circleView">
              <circle cx="200" cy="100" r="100" fill="#FFFFFF" />
          </clipPath>
      </defs>
  <image width="400" height="200" xlink:href="https://images.unsplash.com/photo-1560157368-946d9c8f7cb6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1502&q=80" clip-path="url(#circleView)" />

   </svg>

          <h2 class="testimonial-text">Old Kingdom</h2>
          <h2 class="testimonial-text">(2686 BC/2181 BC)</h2>
          <em>The Third to Sixth Dynasties make up the Old Kingdom. The king’s power continued to grow during this period. The early-Third Dynasty King Djoser built an even grander tomb, this time back in Saqqara.</em>
          <p><a class="btn btn-secondary" href="#">View details »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <svg width="400" height="200">
      <defs>
          <clipPath id="circleView">
              <circle cx="200" cy="100" r="100" fill="#FFFFFF" />
          </clipPath>
      </defs>
  <image width="400" height="200" xlink:href="https://images.unsplash.com/photo-1594489869852-19437c9c7720?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" clip-path="url(#circleView)" />

   </svg>

          <h2 class="testimonial-text">Middle Kingdom</h2>
          <h2 class="testimonial-text">(2055 BC/1650 BC)</h2>
          <em>The Middle Kingdom was a time of great prosperity. It consists of the Eleventh to Thirteenth Dynasties. Although the Eleventh Dynasty had its origins in the First Intermediate Period, it is a later king in this same royal family who reunified Egypt.</em>
          <p><a class="btn btn-secondary" href="#">View details »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <svg width="400" height="200">
      <defs>
          <clipPath id="circleView">
              <circle cx="200" cy="100" r="100" fill="#FFFFFF" />
          </clipPath>
      </defs>
  <image width="400" height="200"  xlink:href="https://images.unsplash.com/photo-1587975844610-40f1ad10d07e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=751&q=80" clip-path="url(#circleView)" />

   </svg>

          <h2 class="testimonial-text">New Kingdom</h2>
          <h2 class="testimonial-text">(1550 BC/1069 BC)</h2>
          <em>During the New Kingdom, Egypt became a great empire of the ancient Near East. Its southern borders reached the Fourth Cataract in Nubia, and to modern-day Syria in the north.he economy flourished to an astounding degree .</em>
          <p><a class="btn btn-secondary" href="#">View details »</a></p>
        </div><!-- /.col-lg-4 -->
      </div>

  </section>
  <section class="colored-section" id="press">
  <div class="container">
        <div class="row general-info">
           
        
       
    </div>
</div>
</section>

<section class="part3">

  <h2 class="featurette-heading">Discover not only historical places</h2>

  <div class="row featurette">
            <div class="col-md-7">

              <h3 class="Matroh">Matroh </h3>
              <em> is one of the governorates of Egypt. Located in the north-western part of the country, it borders Libya. Its capital is Mersa Matruh.</em>
            </div>
            <div class="col-md-5">
                        <img class="featurette-image img-fluid mx-auto" data-src="holder.js/900x500/auto" alt="900x500" style="width: 900px; height: 500px;" src="images/met.jpg" data-holder-rendered="true">
                      </div>
          </div>

  <div class="row featurette">
    <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/900x500/auto" alt="900x500" style="width: 900px; height: 500px;" src="images/dahab.jpg" data-holder-rendered="true">
              </div>
            <div class="col-md-7">

              <h3 class="Matroh">Dahab</h3>
              <em>is a new-constructed Egyptian town on the southeast coast of the Sinai Peninsula in Egypt, approximately 80 km (50 mi) northeast of Sharm el-Sheikh.</em>
            </div>

          </div>
          <div class="row featurette">
                    <div class="col-md-7">

                      <h3 class="Matroh">Siwa Oasis </h3>
                      <em>  is an urban oasis in Egypt between the Qattara Depression and the Great Sand Sea in the Western Desert, 50 km (30 mi) east of the Libyan border, and 560 km (348 mi) from Cairo.</em>
                    </div>
                    <div class="col-md-5">
                                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/900x500/auto" alt="900x500" style="width: 900px; height: 500px;" src="images/sewa.jpg" data-holder-rendered="true">
                              </div>
                  </div>
                    <div class="row featurette">
                      <div class="col-md-5">
                                      <img class="featurette-image img-fluid mx-auto" data-src="holder.js/900x500/auto" alt="900x500" style="width: 900px; height: 500px;" src="images/mrsaalam.jpg" data-holder-rendered="true">
                                    </div>
                                  <div class="col-md-7">

                                  <h3 class="Matroh">Marsa Allam</h3>
                                    <em>is a town in south-eastern Egypt, located on the western shore of the Red Sea. It is currently seeing fast increasing popularity as a tourist destination and development following the opening of Marsa Alam International Airport in 2003.</em>
                                  </div>

                                </div>

</section>


  <!-- Features -->

  <section class="white-section" id="features">

    <div class="container-fluid">
<h1 class="Matroh">Why DiscoverEgypt.com</h1>
      <div class="row">
        <div class="feature-box col-lg-4">
          <i class="icon fas fa-check-circle fa-3x"></i>
          <h3 class="Matroh">Always Refreshed.</h3>
          <p>find always new places to visit in Egypt.</p>
        </div>

        <div class="feature-box col-lg-4">
          <i class="icon fas fa-bullseye fa-3x"></i>
          <h3 class="Matroh">Guaranteed</h3>
          <p>all our articles from official sources .</p>
        </div>

        <div class="feature-box col-lg-4">
          <i class="icon fas fa-heart fa-3x"></i>
          <h3 class="Matroh">you are welcome.</h3>
          <p>your review is important for us and other tourists visiting Egypt.</p>
        </div>
      </div>


    </div>
  </section>
   <section id=press>
  <div class="container center">
   <div class="card center">
    <img class="card-img-top" src="images/sky.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title header ">Skyscanner</h5>
      <p class="card-text font ">Find affordable flights to Egypt now !</p>
      <a href="https://www.skyscanner.net/uk/en-us/gbp/routes/mosc/eg/moscow-to-egypt.html" target="_blank" class="btn btn-primary">Visit Skyscanner</a>
      </div>
    </div>
  </div>
   </section>                        
  <!-- Testimonials -->

  <section class="colored-section" id="testimonials">

    <div id="testimonial-carousel" class="carousel slide" data-ride="false">
      <div class="carousel-inner">
        <div class="carousel-item active container-fluid">
          <h2 class="testimonial-text">Wow, if you have thought about going to Egypt, or grew up loving the ancient world, please go. I never felt unsafe or unwelcome, the sites are beautiful and the people are friendly. We booked this tour for our honeymoon and was not disappointed!</h2>
          <img class="testimonial-image" src="images/camel.jpg" alt="dog-profile">
          <em>Pebbles, New York</em>
        </div>
        <div class="carousel-item container-fluid">
          <h2 class="testimonial-text">It was a life changing experience. All the things we saw and experienced were amazing and we fell in love with the country and would love to return!!</h2>
          <img class="testimonial-image" src="images/group.jpg" alt="lady-profile">
          <em>vinza, Florence</em>
        </div>
        <div class="carousel-item container-fluid">
          <h2 class="testimonial-text">A once in a lifetime adventure unlike any other I’ve ever experienced! I had a once in a lifetime trip to Egypt!</h2>
          <img class="testimonial-image" src="images/memnon.jpg" alt="lady-profile">
          <em>Beverly, Illinois</em>
        </div>
      </div>
      <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon"></span>
      </a>
    </div>

  </section>


  <!-- Press -->

  <section class="colored-section" id="press">
    <h2 class="featurette-heading">Trusted By</h2>
    <img class="press-logo" src="images/techcrunch.png" alt="tc-logo">
    <img class="press-logo" src="images/tnw.png" alt="tnw-logo">
    <img class="press-logo" src="images/bizinsider.png" alt="biz-insider-logo">
    <img class="press-logo" src="images/mashable.png" alt="mashable-logo">

  </section>

<?php include "../register_login/form.php" ?>

  <!-- Footer -->

 <?php include "../utilities/footer.php" ?>
 <script src="../js/main.js" ></script>
