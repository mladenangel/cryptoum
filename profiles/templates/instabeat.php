
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Criptoum&trade;</title>

<!-- Bootstrap -->
<link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- NProgress -->
<link href="vendors/nprogress/nprogress.css" rel="stylesheet">
<!-- bootstrap-daterangepicker -->
<link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

<!-- Custom Theme Style -->
<link href="build/css/custom.min.css" rel="stylesheet">
<link href="build/css/general.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet"> 

<!-- Icons -->
<link rel="stylesheet" href="./images/Icon-font-7-stroke/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
<link rel="stylesheet" href="./images/Icon-font-7-stroke/pe-icon-7-stroke/css/helper.css">    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet"> 
  </head>

  <body class="login">
    <header id="particles-js" class="header">
      <div class="skew">
        <div class="header-inner">
          <script src="documentation/particles.js-master/particles.js"></script>
        </div>
      </div>
    </header>

    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">

            <div class="dropdown language-picker">
              <button class="language-pickerbtn" id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Language&nbsp;&nbsp;&nbsp; <img src="images/login/flags/flag-uk.png" alt="United Kingdom Flag"/>
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu languages" aria-labelledby="dLabel">
                <li class="language">UK&nbsp;&nbsp;&nbsp; <img src="images/login/flags/flag-uk.png" alt="United Kingdom Flag"/></li>
                <li class="language">ES&nbsp;&nbsp;&nbsp; <img src="images/login/flags/flag-es.png" alt="Spanish Flag"/></li>
                <li class="language">FR&nbsp;&nbsp;&nbsp; <img src="images/login/flags/flag-fr.png" alt="French Flag"/></li>
              </ul>
            </div>

            <form id="form-login">
              <img class="align-center" src="images/cryptoum_logo.svg" width="200" alt="logo">
              <br><br>
              <div>
                <input type="email" class="form-control" placeholder="Email" name="email" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" />
              </div>
              <div>
                <button type="submit" class="btn btn-default submit greenbtn" style="float:left;">Log in</button>

                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New account?
                  <a href="#signup" class="to_register" style="font-size:17px;"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>

                  <p>&copy;2017 All Rights Reserved.<br> <a href="#" target="_blank">Privacy and Terms</a></p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">

            <div class="dropdown language-picker">
              <button class="language-pickerbtn" id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Language&nbsp;&nbsp;&nbsp; <img src="images/login/flags/flag-uk.png" alt="United Kingdom Flag"/>
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu languages" aria-labelledby="dLabel">
                <li class="language">UK&nbsp;&nbsp;&nbsp; <img src="images/login/flags/flag-uk.png" alt="United Kingdom Flag"/></li>
                <li class="language">ES&nbsp;&nbsp;&nbsp; <img src="images/login/flags/flag-es.png" alt="Spanish Flag"/></li>
                <li class="language">FR&nbsp;&nbsp;&nbsp; <img src="images/login/flags/flag-fr.png" alt="French Flag"/></li>
              </ul>
            </div>

            <form id="form-create">
              <img class="align-center" src="images/cryptoum_logo.svg" width="200" alt="logo">
              <br><br>
              <div>
                <input type="text" class="form-control" placeholder="Name" name="name" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" name="email" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" />
              </div>
              <div>
                <button type="submit" class="btn btn-default submit greenbtn">Submit</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register" style="font-size:17px;"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <p>&copy;2017 All Rights Reserved.<br> <a href="#" target="_blank">Privacy and Terms</a></p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


    <script type="text/javascript">

        $(function () {

          $('form#form-login').submit(function (event) {
            event.preventDefault();

            $.post('service.php?action=login', $(this).serialize(), function (response) {

              if (response.result == 'error') {
                toastr.error(response.message);
              } else if (response.result == 'ok') {
                top.location.href = './';
              }

            }, 'json');

          });

          $('form#form-create').submit(function (event) {
            event.preventDefault();

            $.post('service.php?action=create', $(this).serialize(), function (response) {

              if (response.result == 'error') {
                toastr.error(response.message);
              } else if (response.result == 'ok') {
                top.location.href = './';
              }

            }, 'json');

          });

          $('.reset_pass').click(function (event) {
            event.preventDefault();

            if ($('#form-login input[name="email"]').val() == '') {
              toastr.error('Please insert your email');
              return;
            }

            var obj = new Object();
            obj.email = $('#form-login input[name="email"]').val();

            $.post('service.php?action=lostpassword', obj, function (response) {

              if (response.result == 'error') {
                toastr.error(response.message);
              } else if (response.result == 'ok') {
                toastr.success('Please check your email');
              }

            }, 'json');

          });

        });

    </script>

    <script>

        /* ---- particles.js config ---- */

        particlesJS("particles-js", {
          "particles": {
            "number": {
              "value": 100,
              "density": {
                "enable": true,
                "value_area": 1000
              }
            },
            "color": {
              "value": ["#FFFFFF"]
            },

            "shape": {
              "type": "circle",
              "stroke": {
                "width": 0,
                "color": "#FFFFFF"
              },
              "polygon": {
                "nb_sides": 5
              },
              "image": {
                "src": "img/github.svg",
                "width": 100,
                "height": 100
              }
            },
            "opacity": {
              "value": 0.6,
              "random": false,
              "anim": {
                "enable": false,
                "speed": 1,
                "opacity_min": 0.1,
                "sync": false
              }
            },
            "size": {
              "value": 2,
              "random": true,
              "anim": {
                "enable": false,
                "speed": 40,
                "size_min": 0.1,
                "sync": false
              }
            },
            "line_linked": {
              "enable": true,
              "distance": 120,
              "color": "#FFFFFF",
              "opacity": 0.4,
              "width": 1
            },
          },
          "interactivity": {
            "detect_on": "canvas",
            "events": {
              "onhover": {
                "enable": true,
                "mode": "grab"
              },
              "onclick": {
                "enable": false
              },
              "resize": true
            },
            "modes": {
              "grab": {
                "distance": 140,
                "line_linked": {
                  "opacity": 1
                }
              },
              "bubble": {
                "distance": 400,
                "size": 40,
                "duration": 2,
                "opacity": 8,
                "speed": 3
              },
              "repulse": {
                "distance": 200,
                "duration": 0.4
              },
              "push": {
                "particles_nb": 4
              },
              "remove": {
                "particles_nb": 2
              }
            }
          },
          "retina_detect": true
        });
    </script>

  </body>
</html>
