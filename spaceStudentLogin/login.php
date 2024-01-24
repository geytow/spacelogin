<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: index.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="login.css">
  <title>Login</title>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form method="post">
                    <h2>Login</h2>

                    <?php if ($is_invalid): ?>
                        <center>
                            <p style='color:red;'><em>Incorrect password or email</em></p>
                        </center>
                    <?php endif; ?>

                    <div class="inputbox">
                        <ion-icon name="person"></ion-icon>
                        <input type="email" name="email" id="email" required>
                        <label for="email">Email</label>
                    </div>

                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" id="email" required>
                        <label for="password">Password</label>
                    </div>

                    <button>Log in</button>
                    <div class="register">
                        <p>Don't have a account <a href="signup.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>