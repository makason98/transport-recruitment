<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
</head>

<body>
<div class="login-page">
  <div class="form">
  <h2> Truckers Admin Login</h2>
  <form class="login-form" method="get" action="view/admin/login_process.php" onsubmit="return validateForm()">
                <input type="text" placeholder="username" name="username" id="username" required />
                <input type="password" placeholder="password" name="password" id="password" required />
                <button type="submit" name="submit1">login</button>
            </form>
  </div>
</div>
    



</body>
</html>
<style media="screen">
  @import url(https://fonts.googleapis.com/css?family=Roboto:300);

  body {
    background: #76b852;
    font-family: "Roboto", sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }

  .login-page {
    width: 100%;
    max-width: 360px;
    padding: 8% 0 0;
    margin: auto;
  }

  .form {
    position: relative;
    z-index: 1;
    background: #FFFFFF;
    max-width: 360px;
    margin: 0 auto 100px;
    padding: 45px;
    text-align: center;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  }

  .form input {
    font-family: "Roboto", sans-serif;
    outline: 0;
    background: #f2f2f2;
    width: 100%;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
    box-sizing: border-box;
    font-size: 14px;
  }

  .form button {
    font-family: "Roboto", sans-serif;
    text-transform: uppercase;
    outline: 0;
    background: #4CAF50;
    width: 100%;
    border: 0;
    padding: 15px;
    color: #FFFFFF;
    font-size: 14px;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    cursor: pointer;
  }

  .form button:hover,
  .form button:active,
  .form button:focus {
    background: #43A047;
  }

  .form .message {
    margin: 15px 0 0;
    color: #b3b3b3;
    font-size: 12px;
  }

  .form .message a {
    color: #4CAF50;
    text-decoration: none;
  }

  .form .register-form {
    display: none;
  }

  @media screen and (min-width: 600px) {
    /* Add styles for screens larger than 600 pixels */
    .login-page {
    width: 100%;
    max-width: 360px;
    padding: 8% 0 0;
    margin: auto;
  }
  }
</style>

<script>
    $('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
function validateForm() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            if (username === "" || password === "") {
                alert("Please fill in all required fields.");
                return false; // Prevent form submission
            }

            // Continue with form submission if fields are filled
            return true;
        }
</script>
