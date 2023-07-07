<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <link rel="icon" type="image/ico" href="images/favicon.png">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
  .radio-container {
    display: inline-block;
    position: relative;
    padding-left: 30px;
    padding-right: 15px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 16px;
    user-select: none;
    color: grey;
  }

  .radio-container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
  }

  .checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 20px;
    width: 20px;
    background-color: #eee;
    border-radius: 50%;
  }

  .radio-container:hover input~.checkmark {
    background-color: #ccc;
  }

  .radio-container input:checked~.checkmark {
    background-color: #2196F3;
  }

  .checkmark:after {
    content: "";
    position: absolute;
    display: none;
  }

  .radio-container input:checked~.checkmark:after {
    display: block;
  }

  .radio-container .checkmark:after {
    top: 6px;
    left: 6px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: white;
  }
</style>

<body>
  <img class="wave" src="images/wave.png">
  <div class="container">
    <div class="img">
      <img src="images/bg.svg">
    </div>
    <div class="login-content">
      <form method="post" action="loginLogic.php">
        <img src="images/Logo.png">
        <h2 class="title">Welcome</h2>
        <div class="input-div one">
          <div class="i">
            <i class="fas fa-user"></i>
          </div>
          <div class="div">
            <h5>Username</h5>
            <input type="text" class="input" name="txtUser" id="txtUser">
          </div>
        </div>
        <div class="input-div pass">
          <div class="i">
            <i class="fas fa-lock"></i>
          </div>
          <div class="div">
            <h5>Password</h5>
            <input type="password" class="input" name="txtPass" id="txtPass">
          </div>
        </div>
        <br>
        <br>
        <label class="radio-container">Employer
          <input type="radio" name="cmbUser" value="Employer" checked="checked">
          <span class="checkmark"></span>
        </label>

        <label class="radio-container">Worker
          <input type="radio" name="cmbUser" value="JobSeeker">
          <span class="checkmark"></span>
        </label>


        <a href="./Forget.html">Forgot Password?</a>
        <input type="submit" class="btn" value="Login">
      </form>
    </div>
  </div>
  <script type="text/javascript" src="js/main1.js"></script>
</body>

</html>