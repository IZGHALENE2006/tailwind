<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="login_style.css" />
    <title>Login Page</title>
  </head>

  <body id="body_design" class="dbe">
    <!-- button ta3 dark mode -->
    <div class="darkmode">
<label for="theme" class="theme">
	<span class="theme__toggle-wrap">
		<input id="theme" class="theme__toggle" type="checkbox" role="switch" name="theme" value="dark" >
		<span class="theme__fill"></span>
		<span class="theme__icon">
			<span class="theme__icon-part"></span>
			<span class="theme__icon-part"></span>
			<span class="theme__icon-part"></span>
			<span class="theme__icon-part"></span>
			<span class="theme__icon-part"></span>
			<span class="theme__icon-part"></span>
			<span class="theme__icon-part"></span>
			<span class="theme__icon-part"></span>
			<span class="theme__icon-part"></span>
		</span>
	</span>
</label>

    </div>
    <div class="container" id="container">
      <div class="form-container sign-up" id="up">
        <form action="file.php" method="post">
          <h1>Sign Up</h1>
          <span>use your email for registeration</span>
          <input type="text" id="name" name="namee" placeholder="Name" />
          <input type="email" id="email" name="emaile" placeholder="Email" />
          <input type="password" name="passworde" placeholder="Password" />
          <button id="submit" type="submit" name="submit">Sign Up</button>
        </form>
      </div>

      
      <div class="form-container sign-in" >
        <form action="file.php" method="post">
          <h1>Sign In</h1>
          <span>use your email & password</span>
          <input type="email" placeholder="Email" name="email"  />
          <input type="password" placeholder="Password" name="password" />
          <a href="#">Forget Your Password?</a>
          <button type="submit" name="signin">Sign In</button>
        </form>
      </div>
      <div class="toggle-container">
        <div class="toggle">
          <div class="toggle-panel toggle-left">
            <h1>Welcome Back!</h1>
            <p>if you have an account..! you can sign in here</p>
            <button class="hidden" id="login">Sign In</button>
          </div>
          <div class="toggle-panel toggle-right">
            <h1>Hello.. Friend!</h1>
            <p>
              You don't have an account ! you can register here 
            </p>
            <button class="hidden" id="register">Sign Up</button>
          </div>
        </div>
      </div>
    </div>

    <script src="login.js"></script>
  </body>
</html>
