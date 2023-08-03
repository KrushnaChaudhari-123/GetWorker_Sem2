<!DOCTYPE html>
<html>

<head>
    <title>Registration</title>
    <link rel="icon" type="image/ico" href="images/favicon.png">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
    <link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
    <SCRIPT language="JavaScript1.2" src="gen_validation.js"></SCRIPT>
    <SCRIPT language="JavaScript1.2">
    var arrFormValidation = [

        [ //Contact Person
            ["minlen=1",
                "Please Enter Contact Person"
            ]

        ],

        [ //City
            ["minlen=1",
                "Please Enter City"
            ]
        ],

        [ //Mobile
            ["num",
                "Please Enter valid Mobile "
            ],
            ["minlen=10",
                "Please Enter valid Mobile "
            ]
        ],


        [ //User
            ["minlen=1",
                "Please Enter UserName "
            ]


        ],
        [ //Password
            ["minlen=1",
                "Please Enter Password "
            ]


        ],
        [ //Que


        ],
        [ //Answer

            ["minlen=1",
                "Please Enter Answer "
            ]

        ]

    ];
    </SCRIPT>

    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
    <img class="wave" src="images/wave.png" />
    <div class="container">
        <div class="img">
            <img src="images/bg.svg" />
        </div>
        <div class="login-content">
            <form action="EmployeInsert.php" method="post" onSubmit="return validateForm(this,arrFormValidation);"
                enctype="multipart/form-data" id="form2">
                <img src="images/Logo.png" />
                <h2 class="title">Register Yourself Here !!!</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Full Name</h5>
                        <input type="text" class="input" name="txtPerson" pattern="[A-Za-z ]+"
                            title="Full Name field content Alphabetical value only" required />
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-city"></i>
                    </div>
                    <div class="div">
                        <h5>City</h5>
                        <input type="text" class="input" name="txtCity" pattern="[A-Za-z ]+"
                            title="City field content Alphabetical value only" required />
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Mobile Number</h5>
                        <input type="text" class="input" name="txtMobile" pattern="[0-9]{10}"
                            title="Mobile Number Must content 10 digit number only." required />
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
                        <input type="text" class="input" name="txtUserName" pattern="[A-Za-z ]+"
                            title="UserName Field content Alphabetical value only." required />
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" class="input" name="txtPassword"
                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            title="Password must contain at least one number, one uppercase letter, one lowercase letter, and be at least 8 characters long."
                            required />
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
                        <input type="text" class="input" name="txtAnswer" pattern="[A-Za-z ]+"
                            title="Answer Field content Alphabetical value only." required />
                    </div>
                </div>
                <input type="submit" class="btn" value="Register" />
            </form>
        </div>
    </div>

    <script type="text/javascript" src="js/main1.js"></script>
    <script type="text/javascript">
    <!--
    var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
    var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
    var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
    var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8");
    var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
    var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
    var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
    var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9");
    var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytextfield10");
    var sprytextfield11 = new Spry.Widget.ValidationTextField("sprytextfield11");
    //
    -->
    </script>
</body>

</html>