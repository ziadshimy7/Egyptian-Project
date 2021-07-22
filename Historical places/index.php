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
            <img src="images/11lo.jpg" alt="pic 2">
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
          <h2 class="testimonial-text">Old Kingdom (2686 BC/2181 BC)</h2>
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

          <h2 class="testimonial-text">Middle Kingdom (2055 BC/1650 BC)</h2>
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

          <h2 class="testimonial-text">New Kingdom (1550 BC/1069 BC)</h2>
          <em>During the New Kingdom, Egypt became a great empire of the ancient Near East. Its southern borders reached the Fourth Cataract in Nubia, and to modern-day Syria in the north.he economy flourished to an astounding degree .</em>
          <p><a class="btn btn-secondary" href="#">View details »</a></p>
        </div>
      </div>

  </section>



<section class="part3">

      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="h2text">Old Kingdom (2686 BC/2181 BC)</h1>
          <em>The Third to Sixth Dynasties make up the Old Kingdom. The king’s power continued to grow during this period. The early-Third Dynasty King Djoser built an even grander tomb, this time back in Saqqara. He intended to built a mastaba tomb like the kings of the First and Second Dynasties. This was gradually expanded, and five successive mastabas were built on top of one another, resulting in Egypt’s first pyramid and oldest fully stone structure, the Step Pyramid. The attempted step pyramids of the other kings of the Third Dynasty were never completed, presumably due to a succession of short reigns..</em>
          <a href="#">Continue reading.</a>
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-6 ">
          <div class="card flex-md-row mb-4 box-shadow h-100">
            <div class="card-body d-flex flex-column align-items-start">
              <h1 class="cards">The Step Pyramid Complex of Djoser</h1>
              <h3 class="mb-0">
                <h3 class="cards-heading">Saqqara
              </h3>
              <h4 class="card-text mb-auto">Djoser’s Step Pyramid in Saqqara is one of Egypt’s most iconic monuments—and rightfully so. It constitutes a significant historical turning point in ancient Egyptian</h4>
<div class="Buttons">
    <a href="#">Continue reading</a>
    <a  href="../Comment page/comment_page.php?do=comment&monument_id=1"><button type="button" class="btn Buttons btn-link btn-sm">Reviews</button><i class="fas fa-comment"></i></a>
</div>

            </div>
            <img class="card-img-right flex-auto d-none d-md-block" style="width: 250px; height: 200px;" src="images/djoser.jpg" data-holder-rendered="true">
          </div>
        </div>
        <div class="col-6">
          <div class="card flex-md-row mb-4 box-shadow h-100">
            <div class="card-body d-flex flex-column align-items-start">
              <h1 class="cards">The Great Pyramid</h1>
              <h3 class="mb-0">
                <h3 class="cards-heading"> Giza Plateau</h3>
              </h3>

              <h4 class="card-text mb-auto">The Great Pyramid is the tomb of King Khufu (c.2589–2566 BC), rendered "Cheops" by the Greeks.original height of 146.5 meters. it was the tallest structure in world for 3,800 years.</h4>
              <div class="Buttons">
                  <a href="#">Continue reading</a>
                  <a  href="../Comment page/comment_page.php?do=comment&monument_id=2"><button type="button" class="btn Buttons btn-link btn-sm">Reviews</button><i class="fas fa-comment"></i></a>
              </div>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" style="width: 250px; height: 200px;" src="images/khofo.jpg" data-holder-rendered="true">
          </div>
        </div>
      </div>

      <div class="row mb-4">
    <div class="col-6">
    <div class="card flex-md-row mb-4 box-shadow h-100">
      <div class="card-body d-flex flex-column align-items-start">
          <h1 class="cards">Pyramid Complex of Khafre</h1>
        <h3 class="mb-0">
        <h3 class="cards-heading"> Giza Plateau </h3>
        </h3>

        <h4 class="card-text mb-auto">Khafre (c.2558–2532 BC), whom the ancient Greeks knew as Khefren, was a son of King Khufu (Cheops), the builder of the Great Pyramid. He built the second pyramid complex at Giza.</h4>
        <div class="Buttons">
            <a href="#">Continue reading</a>
            <a  href="../Comment page/comment_page.php?do=comment&monument_id=3"><button type="button" class="btn Buttons btn-link btn-sm">Reviews</button><i class="fas fa-comment"></i></a>
        </div>
      </div>
      <img class="card-img-right flex-auto d-none d-md-block" style="width: 250px; height: 200px;" src="images/khafra.jpg" data-holder-rendered="true">
    </div>
    </div>
    <div class="col-6">
    <div class="card flex-md-row mb-4 box-shadow h-100">
      <div class="card-body d-flex flex-column align-items-start">
          <h1 class="cards">Pyramid Complex of Menkaure</h1>
        <h3 class="mb-0">
          <h3 class="cards-heading"> Giza Plateau</h3>
        </h3>

        <h4 class="card-text mb-auto">Menkaure (Mykerinos to the ancient Greeks; c.2532–2503 BC) is the builder of the third of the three large Giza Pyramids. He was most likely the son of Khafre (Khefren), and grandson of Khufu.</h4>
        <div class="Buttons">
        
            <a href="#">Continue reading</a>
            <a  href="../Comment page/comment_page.php?do=comment&monument_id=4"><button type="button" class="btn Buttons btn-link btn-sm">Reviews</button><i class="fas fa-comment"></i></a>
        </div>
      </div>
      <img class="card-img-right flex-auto d-none d-md-block" style="width: 250px; height: 200px;" src="images/mankr.jpg" data-holder-rendered="true">
    </div>
    </div>
    </div>

    <div class="row mb-4">
    <div class="col-6">
    <div class="card flex-md-row mb-4 box-shadow h-100">
    <div class="card-body d-flex flex-column align-items-start">
    <h1 class="cards">The Great Sphinx</h1>
    <h3 class="mb-0">
    <h3 class="cards-heading"> Giza Plateau </h3>
    <h4 class="card-text mb-auto">Colossal statues are one of the hallmarks of ancient Egyptian civilization, and the Great Sphinx of Giza is the most famous. It was carved directly out of the bedrock during the Fourth...</h4>
    <div class="Buttons">
        <a href="#">Continue reading</a>
        <a  href="../Comment page/comment_page.php?do=comment&monument_id=5"><button type="button" class="btn Buttons btn-link btn-sm">Reviews</button><i class="fas fa-comment"></i></a>
    </div>
    </div>
    <img class="card-img-right flex-auto d-none d-md-block" style="width: 250px; height: 200px;" src="images/sphinx.jpg" data-holder-rendered="true">
    </div>
    </div>
    <div class="col-6">
    <div class="card flex-md-row mb-4 box-shadow h-100">
    <div class="card-body d-flex flex-column align-items-start">
    <h1 class="cards">Pyramid Complex of Teti</h1>
    <h3 class="mb-0">
    <h3 class="cards-heading">Saqqara</h3>
    </h3>

    <h4 class="card-text mb-auto">Teti (c.2345–2323 BC), the first ruler of the Sixth Dynasty, built his pyramidal complex not far from the Step Pyramid of Djoser (c.2667–2648 BC), in Saqqara. Upon completion, it stood...</h4>
    <div class="Buttons">
        <a href="#">Continue reading</a>
        <a  href="../Comment page/comment_page.php?do=comment&monument_id=6"><button type="button" class="btn Buttons btn-link btn-sm">Reviews</button><i class="fas fa-comment"></i></a>
    </div>
    </div>
    <img class="card-img-right flex-auto d-none d-md-block" style="width: 250px; height: 200px;" src="images/0197.jpg" data-holder-rendered="true">
    </div>
    </div>
    </div>


    <section class="section colored-section " id="title">
      <div class="container-fluid  middlecont">
        <h1 class="pompa"> Facts about Ancient Egypt </h1>
        <h1 class="pompa"> "The pyramids were not built by slaves" </h1>
        <h1 class="pompa1">The life of a pyramid builder certainly wasn’t easy—skeletons of workers commonly show signs of arthritis and other ailments—but evidence suggests that the massive tombs were built not by slaves but by paid laborers. These ancient construction workers were a mix of skilled artisans and temporary hands, and some appear to have taken great pride in their craft. Graffiti found near the monuments suggests they often assigned humorous names to their crews like the “Drunkards of Menkaure” or the “Friends of Khufu.”</h1>
    </div>
      </section>


                <section class="section white-section" id="features">
                  <div class="container-fluid">
                    <div class="jumbotron jumbotron-fluid">
                      <div class="container">
                        <h1 class="h2text">Middle Kingdom (2055 BC/1650 BC)</h1>
                        <em>The Middle Kingdom was a time of great prosperity. It consists of the Eleventh to Thirteenth Dynasties. Although the Eleventh Dynasty had its origins in the First Intermediate Period, it is a later king in this same royal family who reunified Egypt, thus initiating the Middle Kingdom. This king was Nebhepetre Mentuhotep (c.2055–2004 BC). The Eleventh Dynasty came from Thebes (modern Luxor) which, although hitherto an unimportant city, would become one of the most prominent throughout the rest of ancient Egyptian history. One of the main gods of Thebes, Amun, had similarly had a minor role in ancient Egyptian religion, but he quickly rose to prominence in step with his city, eventually gaining the adjective “King of the Gods”. The oldest evidence for his main place of worship, Karnak Temple, dates to the Middle Kingdom, and it would become the largest and wealthiest ancient Egyptian religious establishment by the end of the New Kingdom.</em>
                        <a href="#">Continue reading.</a>
                      </div>
                    </div>

              <div class="row mb-4">
                <div class="col-6 ">
                  <div class="card flex-md-row mb-4 box-shadow h-100">
                    <div class="card-body d-flex flex-column align-items-start">
                      <h1 class="cards">Deir al-Bahari</h1>
                      <h3 class="mb-0">
                        <h1 class="cards-heading">Luxor </h1>
                      </h3>
                      <p class="card-text  mb-auto">The celebrated temple of Hatshepsut (c.1473–1458 BC), the queen who became Pharaoh, is located here, in Deir al-Bahari, on the west bank of Luxor. Made up of three man-made terraces that </p>
                      <div class="Buttons">
                          <a href="#">Continue reading</a>
                          <a  href="../Comment page/comment_page.php?do=comment&monument_id=7"><button type="button" class="btn Buttons btn-link btn-sm">Reviews</button><i class="fas fa-comment"></i></a>
                      </div>
                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block" style="width: 250px; height: 200px;" src="images/deir.jpg" data-holder-rendered="true">
                  </div>
                </div>
                <div class="col-6">
                  <div class="card flex-md-row mb-4 box-shadow h-100">
                    <div class="card-body d-flex flex-column align-items-start">
                      <h1 class="cards">Statue of Mentuhotep</h1>
                      <h3 class="mb-0">
                        <h1 class="cards-heading"> The Egyptian Museum</h1>
                      </h3>
                      <p class="card-text mb-auto">Mentuhotep Nebheptre, the king who unified Upper and Lower Egypt for the second time after King Narmer. He is depicted wearing the Red Crown and the tight fitting costume of the Sed fe.</p>
                      <div class="Buttons">
                          <a href="#">Continue reading</a>
                          <a  href="../Comment page/comment_page.php?do=comment&monument_id=8"><button type="button" class="btn Buttons btn-link btn-sm">Reviews</button><i class="fas fa-comment"></i></a>
                      </div>
                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block" style="width: 250px; height: 200px;" src="images/mento.jpg" data-holder-rendered="true">
                  </div>
                </div>
              </div>

              <div class="row mb-4">
              <div class="col-6">
              <div class="card flex-md-row mb-4 box-shadow h-100">
              <div class="card-body d-flex flex-column align-items-start">
                  <h1 class="cards">Sarcophagus of Kawit</h1>
                <h3 class="mb-0">
                <h1 class="cards-heading"> The Egyptian Museum</h1>
                </h3>

                <p class="card-text mb-auto">This is the sarcophagus of Queen Kawit, the wife of King Nebhepetre Mentuhotep, the founder of the Middle Kingdom. The outer faces are </p>
                <div class="Buttons">
                    <a href="#">Continue reading</a>
                    <a  href="../Comment page/comment_page.php?do=comment&monument_id=9"><button type="button" class="btn Buttons btn-link btn-sm">Reviews</button><i class="fas fa-comment"></i></a>
                </div>
              </div>
              <img class="card-img-right flex-auto d-none d-md-block" style="width: 250px; height: 200px;" src="images/kewt.jpg" data-holder-rendered="true">
              </div>
              </div>
              <div class="col-6">
              <div class="card flex-md-row mb-4 box-shadow h-100">
              <div class="card-body d-flex flex-column align-items-start">
                  <h1 class="cards">Senusret III</h1>
                <h3 class="mb-0">
                  <h1 class="cards-heading">Luxor Museum</h1>
                </h3>

                <p class="card-text mb-auto">was a pharaoh of Egypt. He ruled from 1878 BC to 1839 BC during a time of great power and prosperity,[1] and was the fifth king of the Twelfth Dynasty of the Middle Kingdom. He was.</p>
                <div class="Buttons">
                    <a href="#">Continue reading</a>
                    <a  href="../Comment page/comment_page.php?do=comment&monument_id=10"><button type="button" class="btn Buttons btn-link btn-sm">Reviews</button><i class="fas fa-comment"></i></a>
                </div>
              </div>
              <img class="card-img-right flex-auto d-none d-md-block" style="width: 250px; height: 200px;" src="images/seno.jpg" data-holder-rendered="true">
              </div>
              </div>
              </div>
              </div>
              </div>
              </section>

                <section class="section colored-section " id="title">
                  <div class="container-fluid  middlecont">
                    <h1 class="pompa"> Facts about Ancient Egypt </h1>
                    <h1 class="pompa"> "mummification" </h1>
                    <h1 class="pompa1">The afterlife was incredibly important to the Egyptians. They believed that by preserving a dead person’s body – which they did through the process of mummification – their soul would live on in the after-life forever”</h1>
                </div>
                  </section>
                              <section class="section white-section" id="features">
                                <div class="container-fluid">
                                  <div class="jumbotron jumbotron-fluid">
                                    <div class="container">
                                      <h1 class="h2text">New Kingdom (1550 BC/1069 BC)</h1>
                                      <em class="text11">During the New Kingdom, Egypt became a great empire of the ancient Near East. Its southern borders reached the Fourth Cataract in Nubia, and to modern-day Syria in the north. The economy flourished to an astounding degree, and most of the most famous and impressive surviving ancient Egyptian monuments date to this period.</em>
                                      <a href="#">Continue reading.</a>
                                    </div>
                                  </div>

                            <div class="row mb-4">
                              <div class="col-6 ">
                                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                                  <div class="card-body d-flex flex-column align-items-start">
                                    <h1 class="cards">Abu Simbel</h1>
                                    <h3 class="mb-0">
                                      <h1 class="cards-heading">Aswan</h1>
                                    </h3>

                                    <p class="card-text  mb-auto">The Great Temple of Abu Simbel, in Nubia near Egypt’s southern border, is among the most awe-inspiring monuments of Egypt. It was cut into the living rock by King Ramesses II (the Great) of </p>
                                    <div class="Buttons">
                                        <a href="#">Continue reading</a>
                                        <a  href="../Comment page/comment_page.php?do=comment&monument_id=11"><button type="button" class="btn Buttons btn-link btn-sm">Reviews</button><i class="fas fa-comment"></i></a>
                                    </div>
                                  </div>
                                  <img class="card-img-right flex-auto d-none d-md-block" style="width: 250px; height: 200px;" src="images/abo.jpg" data-holder-rendered="true">
                                </div>
                              </div>
                              <div class="col-6">
                                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                                  <div class="card-body d-flex flex-column align-items-start">
                                    <h1 class="cards-heading">Karnak</h1>
                                    <h3 class="mb-0">
                                      <h1 class="cards-heading">Luxor</h1>
                                    </h3>

                                    <p class="card-text mb-auto">Aptly called Ipet-Sut “The Most Select of Places” by the ancient Egyptians, Karnak Temple was the most important temple in Thebes (modern Luxor), in Upper Egypt. This was where the cult of.</p>
                                    <div class="Buttons">
                                        <a href="#">Continue reading</a>
                                        <a  href="../Comment page/comment_page.php?do=comment&monument_id=12"><button type="button" class="btn Buttons btn-link btn-sm">Reviews</button><i class="fas fa-comment"></i></a>
                                    </div>
                                  </div>
                                  <img class="card-img-right flex-auto d-none d-md-block" style="width: 250px; height: 200px;" src="images/karnak.jpg" data-holder-rendered="true">
                                </div>
                              </div>
                            </div>

                            <div class="row mb-4">
                            <div class="col-6">
                            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                            <div class="card-body d-flex flex-column align-items-start">
                                <h1 class="cards">Valley of the Kings</h1>
                              <h3 class="mb-0">
                              <h1 class="cards-heading">Luxor</h1>
                              </h3>

                              <p class="card-text mb-auto">The rulers of the Eighteenth, Nineteenth, and Twentieth Dynasties of Egypt’s prosperous New Kingdom (c.1550–1069 BC) were buried in a desolate dry river valley across the river from the ancient c.</p>
                              <div class="Buttons">
                                  <a href="#">Continue reading</a>
                                  <a  href="../Comment page/comment_page.php?do=comment&monument_id=13"><button type="button" class="btn Buttons btn-link btn-sm">Reviews</button><i class="fas fa-comment"></i></a>
                              </div>
                            </div>
                            <img class="card-img-right flex-auto d-none d-md-block" style="width: 250px; height: 200px;" src="images/vvvv.jpg" data-holder-rendered="true">
                            </div>
                            </div>
                            <div class="col-6">
                            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                            <div class="card-body d-flex flex-column align-items-start">
                                <h1 class="cards">Luxor Temple</h1>
                              <h3 class="mb-0">
                                <h1 class="cards-heading">Luxor</h1>
                              </h3>

                              <p class="card-text mb-auto">luxor Temple, Ipet‑resyt “Southern Sanctuary” to the ancient Egyptians, was so called because of its location within ancient Thebes (modern Luxor). It is located around three kilometers to the sout</p>
                              <div class="Buttons">
                                  <a href="#">Continue reading</a>
                                  <a  href="../Comment page/comment_page.php?do=comment&monument_id=14"><button type="button" class="btn Buttons btn-link btn-sm">Reviews</button><i class="fas fa-comment"></i></a>
                              </div>
                            </div>
                            <img class="card-img-right flex-auto d-none d-md-block" style="width: 250px; height: 200px;" src="images/mnmn.jpg" data-holder-rendered="true">
                            </div>
                            </div>
                            </div>
                            <div class="row mb-4">
                            <div class="col-6">
                            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                            <div class="card-body d-flex flex-column align-items-start">
                                <h1 class="cards">Tomb of Tutankhamun</h1>
                              <h3 class="mb-0">
                              <h1 class="cards-heading">Valley of the Kings</h1>
                              </h3>

                              <p class="card-text mb-auto">The tomb of the Eighteenth Dynasty king Tutankhamun (c.1336–1327 BC) is world-famous because it is the only royal tomb from the Valley of the Kings that was discovered relatively intact.</p>
                              <div class="Buttons">
                                  <a href="#">Continue reading</a>
                                  <a  href="../Comment page/comment_page.php?do=comment&monument_id=15"><button type="button" class="btn Buttons btn-link btn-sm">Reviews</button><i class="fas fa-comment"></i></a>
                              </div>
                            </div>
                            <img class="card-img-right flex-auto d-none d-md-block" style="width: 250px; height: 200px;" src="images/nnoo.jpg" data-holder-rendered="true">
                            </div>
                            </div>
                            <div class="col-6">
                            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                            <div class="card-body d-flex flex-column align-items-start">
                                <h1 class="cards">Tomb of Ramesses VI (KV9)</h1>
                              <h3 class="mb-0">
                                <h1 class="cards-heading">Valley of the Kings</h1>
                              </h3>

                              <p class="card-text mb-auto">This tomb was begun by King Ramesses V (c.1147–1143 BC) of the Twentieth Dynasty. Although it is uncertain whether he was ultimately buried here, it is clear that his u(c.</p>
                              <div class="Buttons">
                                  <a href="#">Continue reading</a>
                                  <a  href="../Comment page/comment_page.php?do=comment&monument_id=16"><button type="button" class="btn Buttons btn-link btn-sm">Reviews</button><i class="fas fa-comment"></i></a>
                              </div>
                            </div>
                            <img class="card-img-right flex-auto d-none d-md-block" style="width: 250px; height: 200px;" src="images/cdc.jpg" data-holder-rendered="true">
                            </div>
                            </div>
                            </div>



                    </div>
                            </div>


                              </section>








      <div class="modal-register hidden-1">
      <button class="btn--close-modal">&times;</button>
      <h2 class="modal__header">Register<br>
      </h2>
      <form class="modal__form" action="" method="POST">
      <label>Full Name</label>
      <input type="text" name="fullName"/>
      <label>Username</label>
      <input type="text" name="username"/>
      <label>Password</label>
      <input type="password" name="password" />
      <label>Confirm Password</label>
      <input type="password" name="password2" required/>
      <label>Email</label>
      <input type="email" name="email" />
      <div class="signup">
      <h3 class="log">Already have an account ? <a class="sign-in-button btn btn-primary" href="">Sign in</a> </h3>
      </div>
      <button name="submit" class="btn btn-outline-warning btn-sm btn--submit">Register &rarr;</button>
      </form>
    </div>
    <div class="modal-login hidden-1">
      <button class="btn--close-modal">&times;</button>
      <h2 class="modal__header">Login<br>
      </h2>
      <form class="modal__form" action="../register_login/login.php" method="POST">
      <label>Username</label>
      <input type="text" name="username" />
      <label>Password</label>
      <input type="password" name="password" />
      <button name="login" class="btn btn-outline-warning btn-sm">Login</button>
      <div class="signup">
      <h3 class="log" >Don't have an account ? <a class="register-button btn btn-primary" href=""> Sign Up</a> </h3>
      </div>
      </form>
      </div>
  <div class="overlay-login hidden-1"></div>




  <section class="colored-section" id="press">
    <h2 class="featurette-heading">Trusted By</h2>
    <img class="press-logo" src="images/techcrunch.png" alt="tc-logo">
    <img class="press-logo" src="images/tnw.png" alt="tnw-logo">
    <img class="press-logo" src="images/bizinsider.png" alt="biz-insider-logo">
    <img class="press-logo" src="images/mashable.png" alt="mashable-logo">

  </section>






  <!-- Footer -->

<?php include "../utilities/footer.php" ?>

<?php $testArr=(explode("/",$_SERVER["PHP_SELF"])) ;
  echo $testArr[3];
  print_r(explode("/",$_SERVER["PHP_SELF"]))

?>
</body>
<script src="../js/main.js" >

</script>
</html>
