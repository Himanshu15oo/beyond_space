<?php
include("controllers/login_controller.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>eLEARNING</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <!-- J QUERY  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Required Bootstrap JS files -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <style>
        .form-box {
            max-width: 300px;
            background: #e4ded7;
            overflow: hidden;
            border-radius: 16px;
            color: #010101;
        }

        .form {
            position: relative;
            display: flex;
            flex-direction: column;
            padding: 32px 24px 24px;
            gap: 16px;
            text-align: center;
        }

        /*Form text*/
        .title {
            font-weight: bold;
            font-size: 1.6rem;
        }

        .subtitle {
            font-size: 1rem;
            color: #666;
        }

        /*Inputs box*/
        .form-container {
            overflow: hidden;
            border-radius: 8px;
            background-color: #fff;
            margin: 1rem 0 .5rem;
            width: 100%;
        }

        .input {
            background: none;
            border: 0;
            outline: 0;
            height: 40px;
            width: 100%;
            border-bottom: 1px solid #eee;
            font-size: .9rem;
            padding: 8px 15px;
        }

        .form-section {
            padding: 16px;
            font-size: .85rem;
            background-color: #d4cabf;
            box-shadow: rgb(0 0 0 / 8%) 0 -1px;
        }

        .form-section a {
            font-weight: bold;
            color: #8d847a;
            transition: color .3s ease;
        }

        .form-section a:hover {
            color: #655f58;
            text-decoration: underline;
        }

        /*Button*/
        .form button {
            background-color: #b5aa9e;
            color: #fff;
            border: 0;
            border-radius: 24px;
            padding: 10px 16px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color .3s ease;
        }

        .form button:hover {
            background-color: #8d847a;
        }

        /* LOADER CSS */
        /* .loader {
            position: relative;
            width: 2.5em;
            height: 2.5em;
            transform: rotate(165deg);
        }

        .loader:before,
        .loader:after {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            display: block;
            width: 0.5em;
            height: 0.5em;
            border-radius: 0.25em;
            transform: translate(-50%, -50%);
        } */

        .loader:before {
            animation: before8 2s infinite;
        }

        .loader:after {
            animation: after6 2s infinite;
        }

        @keyframes before8 {
            0% {
                width: 0.5em;
                box-shadow: 1em -0.5em rgba(225, 20, 98, 0.75), -1em 0.5em rgba(111, 202, 220, 0.75);
            }

            35% {
                width: 2.5em;
                box-shadow: 0 -0.5em rgba(225, 20, 98, 0.75), 0 0.5em rgba(111, 202, 220, 0.75);
            }

            70% {
                width: 0.5em;
                box-shadow: -1em -0.5em rgba(225, 20, 98, 0.75), 1em 0.5em rgba(111, 202, 220, 0.75);
            }

            100% {
                box-shadow: 1em -0.5em rgba(225, 20, 98, 0.75), -1em 0.5em rgba(111, 202, 220, 0.75);
            }
        }

        @keyframes after6 {
            0% {
                height: 0.5em;
                box-shadow: 0.5em 1em rgba(61, 184, 143, 0.75), -0.5em -1em rgba(233, 169, 32, 0.75);
            }

            35% {
                height: 2.5em;
                box-shadow: 0.5em 0 rgba(61, 184, 143, 0.75), -0.5em 0 rgba(233, 169, 32, 0.75);
            }

            70% {
                height: 0.5em;
                box-shadow: 0.5em -1em rgba(61, 184, 143, 0.75), -0.5em 1em rgba(233, 169, 32, 0.75);
            }

            100% {
                box-shadow: 0.5em 1em rgba(61, 184, 143, 0.75), -0.5em -1em rgba(233, 169, 32, 0.75);
            }
        }

        .loader {
            position: absolute;
            top: calc(50% - 1.25em);
            left: calc(50% - 1.25em);
        }
    </style>
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <!-- <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary">
                <i class="fa fa-book me-3"></i>
                 eLEARNING 
                <img src="img/logo.png" style="width: 110px;">
            </h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <button id="button1" style="background-color: transparent; border: none;" class="nav-item nav-link active">Login</button>
                <button id="button2" style="background-color: transparent; border: none;" class="nav-item nav-link">Register</button>
                <button id="button1" style="background-color: transparent; border: none;" class="nav-item nav-link">About</button>
            </div>
        </div>
    </nav> -->
    <a href="index.html" class="navbar-brand d-flex align-items-center justify-content-center px-4 px-lg-5">
        <h2 class="m-0 text-primary">
            <!-- Beyond Space -->
            <!-- <img src="/Document_files/bs_logo.svg" alt="" srcset=""> -->
            <svg width="300" height="80">
                <image xlink:href="bs_logo.svg" />
            </svg>
        </h2>
    </a>
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0" style="background-color: #c9bdaf;">
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="contact.html" class="btn btn-primary py-4 px-lg-5 ms-auto d-none d-lg-block me-auto" style="width: 220px;">
            <i class="fas fa-phone-alt"></i>
        </a>
        <div class="collapse navbar-collapse" id="navbarCollapse" style="background-color: #c9bdaf;">
            <div class="navbar-nav mx-auto p-4 p-lg-0 d-flex justify-content-center">
                <button id="button1" style="background-color: transparent; border: none;" class="nav-item nav-link active">Login</button>
                <button id="button2" style="background-color: transparent; border: none;" class="nav-item nav-link">Register</button>
                <button id="button1" style="background-color: transparent; border: none;" class="nav-item nav-link">About</button>
            </div>
            <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu fade-down m-0">
                            <a href="team.html" class="dropdown-item">Our Team</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="404.html" class="dropdown-item">404 Page</a>
                        </div>
                    </div> -->
            <a href="" class="btn btn-primary py-4 px-lg-5 ms-4 d-none d-lg-block" style="width: 220px;">
                <i class="fa fa-search" style="margin-right: 30px;"></i>
                <i class="fas fa-user" style="margin-right: 30px;"></i>
                <i class="fas fa-shopping-cart"></i>
            </a>
            <!-- <i class="fa fa-arrow-right ms-3"></i> -->
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- LOGIN PAGE  -->
    <div style="padding: 100px; text-align: center; display: flex; justify-content: center; align-items: center;" id="div1">
        <div class="form-box">
            <form class="form" method="post">
                <span class="title">Login</span>
                <?php
                if (isset($_SESSION['message'])) {
                    echo "<span class='subtitle'>{$_SESSION['message']}</span>";
                }
                ?>
                <div class="form-container">
                    <input type="email" class="input" placeholder="Email" name="email">
                    <input type="password" class="input" placeholder="Password" name="password">
                </div>
                <button type="submit" name="login">Log in</button>
            </form>
            <div class="form-section">
                <p>
                    Don't have an account?
                    <a id="signup_link" href="">Sign Up</a>
                </p>
            </div>
        </div>
    </div>
    <!-- LOGIN PAGE END  -->
    <!-- REGISTRATION PAGE  -->
    <div style="padding: 100px; text-align: center; display: flex; justify-content: center; align-items: center;" id="div2">
        <div class="form-box">
            <form class="form" method="post">
                <span class="title">Register</span>
                <?php
                if (isset($_SESSION['message'])) {
                    echo "<span class='subtitle'>{$_SESSION['message']}</span>";
                }
                ?>
                <div class="form-container">
                    <input type="text" class="input" placeholder="Full Name" name="name">
                    <input type="email" class="input" placeholder="Email" name="email">
                    <input type="password" class="input" placeholder="Password" name="password">
                </div>
                <button type="submit" name="register">Sign up</button>
            </form>
            <div class="form-section">
                <p>
                    Have an account?
                    <a id="login_link" href="">Log in</a>
                </p>
            </div>
        </div>
    </div>

    <div class="loader" id="loader">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#loader').hide();
            $("#div1").show();
            $("#div2").hide();
            $(this).addClass('active');
            $('#button2').removeClass('active');
            $('#button3').removeClass('active');

            $("#button1").click(function() {
                $("#div1").hide();
                $("#div2").hide();
                $('#loader').show();

                setTimeout(function() {
                    $('#loader').hide();
                    $("#div1").show();
                    $("#div2").hide();
                    $(this).addClass('active');
                    $('#button2').removeClass('active');
                }, 500); // 500 milliseconds = half seconds


            });

            $("#button2").click(function() {
                $("#div1").hide();
                $("#div2").hide();
                $('#loader').show();

                // Hide loader after half seconds
                setTimeout(function() {
                    $('#loader').hide();
                    $("#div1").hide();
                    $("#div2").show();
                    $(this).addClass('active');
                    $('#button1').removeClass('active');
                }, 500); // 500 milliseconds = half seconds


            });

            $('a#login_link').click(function(event) {
                event.preventDefault(); // prevent the default action of clicking on a link

                $("#div1").hide();
                $("#div2").hide();
                $('#loader').show();

                setTimeout(function() {
                    $('#loader').hide();
                    $('#div1').show();
                    $('#div2').hide();
                    $('#button1').addClass('active');
                    $('#button2').removeClass('active');
                }, 500);
                // show/hide the divs and add/remove the 'active' class

            });

            $('a#signup_link').click(function(event) {
                event.preventDefault(); // prevent the default action of clicking on a link

                // show/hide the divs and add/remove the 'active' class
                $("#div1").hide();
                $("#div2").hide();
                $('#loader').show();

                setTimeout(function() {
                    $('#loader').hide();
                    $('#div1').hide();
                    $('#div2').show();
                    $('#button2').addClass('active');
                    $('#button1').removeClass('active');
                }, 500);

            });
        });
    </script>
</body>

</html>