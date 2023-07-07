<!DOCTYPE html>
<html>
  <head>
    <title>Registration</title>
    <link rel="icon" type="image/ico" href="images/favicon.png">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap"
      rel="stylesheet"
    />
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>
  <body>
    <img class="wave" src="images/wave.png" />
    <div class="container">
      <div class="img">
        <img src="images/bg.svg" />
      </div>
      <div class="login-content">
        <form action="EmployeInsert.php" method="post" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">
          <img src="images/Logo.png" />
          <h2 class="title">Register Yourself Here !!!</h2>
          <div class="input-div one">
            <div class="i">
              <i class="fas fa-user"></i>
            </div>
            <div class="div">
              <h5>Full Name</h5>
              <input type="text" class="input" name="txtPerson" />
            </div>
          </div>
          <div class="input-div one">
            <div class="i">
              <i class="fas fa-city"></i>
            </div>
            <div class="div">
              <h5>City</h5>
              <input type="text" class="input" name="txtCity" />
            </div>
          </div>
          <div class="input-div pass">
            <div class="i">
              <i class="fas fa-lock"></i>
            </div>
            <div class="div">
              <h5>Mobile Number</h5>
              <input type="password" class="input" name="txtMobile" />
            </div>
          </div>
        
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
		  <div class="input-div pass">
            <div class="i">
              <i class="fas fa-lock"></i>
            </div>
            <div class="div">
              <h5>UserName</h5>
              <input type="password" class="input" name="txtUserName" />
            </div>
		  </div> 
		  <div class="input-div pass">
            <div class="i">
              <i class="fas fa-lock"></i>
            </div>
            <div class="div">
              <h5>Password</h5>
              <input type="password" class="input" name="txtPassword" />
            </div>
		  </div>  

      <br>
        <label class="radio-container">What is Your Pet Name?
          <input type="radio" name="cmbQue" value="What is Your Pet Name?" checked="checked">
          <span class="checkmark"></span>
        </label>
        <label class="radio-container">Who is Your Favourite Person?
          <input type="radio" name="cmbQue" value="Who is Your Favourite Person?">
          <span class="checkmark"></span>
        </label>
        <div class="input-div pass">
            <div class="i">
              <i class="fas fa-lock"></i>
            </div>
            <div class="div">
              <h5>Security Answer</h5>
              <input type="text" class="input" name="txtAnswer" />
            </div>
		  </div>  
          <input type="submit" class="btn" value="Register" />
        </form>
      </div>
    </div>
    <script type="text/javascript" src="js/main1.js"></script>
  </body>
</html>