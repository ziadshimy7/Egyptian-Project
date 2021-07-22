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