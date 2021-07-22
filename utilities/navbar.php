<div class="carousel-caption">
                <div class="container-fluid">
                    <div class="item">
                      <nav class="navbar navbar-expand-lg navbar-light">
                          <a class="navbar-brand"  href="../Main_page/index.php">Discover Egypt</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
                        <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                              <ul class="navbar-nav ml-auto">
                              <li class="nav-item">
                                <a href="#">
                              <button class="btn btn-outline-warning btn-sm nav__link nav__link--btn btn--show-modal">
                                <i class="fas fa-sign-in-alt"></i>Register/Login</button></a>
                        </li>

                        <li class="nav-item">
                          <button type="button" class="btn btn-outline-warning btn-sm"><i class="fas fa-envelope"></i>Contact</button>
                        </li>
                          <li class="nav-item">
                            <a href="../Historical places/index.php">
                            <button type="button" class="btn btn-outline-warning btn-sm"><i class="bell icon"></i>Historical Places      </button>
                          </a>
                          </li>
                          
                          <li class="nav-item">
                            <?php if(isset($_SESSION["username"])) {?>
                              <form action="../register_login/logout.php" method="POST">
                              <button name="logout" class="btn btn-outline-warning btn-sm"><i class="fas fa-envelope"></i>Logout</button>
                              </form>
                              <?php }?>
                        </li>
                                </ul>
                              </div>
                            </nav>
                          </div>
                          <?php if(isset($_SESSION["username"])){

                           ?>
                           <div class="welcome-text-container">
                            <h1 class="welcome-user">Welcome, <?php echo $_SESSION["username"] ?></h1>
                            <?php } ?>
                              </div>
                            
                  <h1 class="big-heading">Discover Egypt Like Never Before</h1>
             </div>

                </div>