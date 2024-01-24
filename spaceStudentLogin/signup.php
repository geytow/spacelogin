<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup</title>
  
  <link rel="stylesheet" href="signup.css">
  <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
  <script src="/js/validation.js" defer></script>
  <!--
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
  -->
</head>
<body>
  <section>
    <div class="form-box">
      <div class="form-value">
        <h2> Sign up </h2>

        <form action="process-signup.php" method="post" id="signup" novalidate>
          
          <div class="inputbox">
            <label for="name">Name</label>
            <input type="text" id="name" name="name">
          </div>

          <div class="inputbox">
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
          </div>

          <div class="inputbox">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
          </div>

          <div class="inputbox">
            <label for="password_confirmation">Repeat Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
          </div>

          <button> Sign up </button>

          <div class="register">
            <p>Already have an account? <a href="login.php">Login</a></p>
          </div>

        </form>
      </div>
    </div>
  </section>
</body>
</html>