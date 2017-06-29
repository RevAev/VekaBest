<!-- User starts on this page -->
  <!-- Clicks the Login button -->
    <!-- if user go back to user home -->
  <!-- Goes to shopping -->
  <!-- Goes to shopping cart -->
    <!-- if admin go to admin home -->
      <!-- can add/edit/delete admins and users -->
      <!-- can add/edit/delete items in the store -->

<!-- Can admins also login as regular users? -->

<?php
$host = "localhost";
$username = "root";
$password = "root";
$db_name = "vekabestwebsite";
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE = edge">
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Novaict Afspraken</title>
    <link href="vekabest.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!--HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body id="index" style="background-color: #f0f0f0;">
    <div class="row">
      <div class="banner">
        <img src="stockvekafotos/busbanner.jpg" />
        <div class="login">
        <a href="user_login.php"><button>Log in</button></a>
      </div>
      </div>

    <div class="nav2">
        <button onclick="showPage('user_home');" class="edit-color">
          Home page
        </button>
        <button onclick="showPage('user_contact');" class="edit-color">
          Contact
        </button>
        <button onclick="showPage('user_webshop');" class="edit-color">
          Webshop
        </button>
        <button onclick="showPage('user_shopping_cart');" class="edit-color">
          Winkelwagen
        </button>
    </div>

    <div class="row" style="padding-top: 10px;">
      <div class="container">
              <?php @include("user_home.php"); ?>
      <?php @include("user_profile.php"); ?>
      <?php @include("user_edit_profile.php"); ?>
      <?php @include("user_contact.php"); ?>
      <?php @include("user_webshop.php"); ?>
      <?php @include("user_shopping_cart.php"); ?>
      <?php @include("webshop_auto.php"); ?>
      <?php @include("webshop_brommer.php"); ?>
      <?php @include("webshop_bus.php"); ?>
      <?php @include("webshop_motor.php"); ?>
      <?php @include("webshop_spiegel.php"); ?>
      <?php @include("webshop_vrachtwagen.php"); ?>
    </div>
  </div>

    <script type="text/javascript">
    var pages = ["user_home", "user_profile", "user_edit_profile", "user_contact", "user_webshop", "user_shopping_cart", "webshop_auto", "webshop_brommer", "webshop_motor", "webshop_vrachtwagen", "webshop_bus", "webshop_spiegel"];

    function showPage(pagename) {
      for (var i = 0; i < pages.length; i++) {
        try {
          var page = document.getElementById(pages[i]);
          page.setAttribute("style", "display: none");}
        catch(err) {
        }
      }
      var showpage = document.getElementById(pagename);
      showpage.setAttribute("style", "display: block");


      var edit = document.getElementsByClassName('edit-color');
      var aNode = edit[0];
      var arrFromList = Array.prototype.slice.call(edit);

      var panel = document.getElementsByClassName('panel-color');
      var aNode = panel[0];
      var arrFromList = Array.prototype.slice.call(panel);

      for (var i = 0; i < edit.length; i++) {
        edit[i].classList.remove("button-color-blue");
        edit[i].classList.remove("button-color-orange");
        edit[i].classList.remove("button-color-yellow");
        edit[i].classList.remove("button-color-green");
        edit[i].classList.remove("button-color-darkblue");
      }

      for (var i = 0; i < panel.length; i++) {
        panel[i].classList.remove("panel-color-blue");
        panel[i].classList.remove("panel-color-orange");
        panel[i].classList.remove("panel-color-yellow");
        panel[i].classList.remove("panel-color-green");
        panel[i].classList.remove("panel-color-darkblue");
      }

      switch (pagename) {
        case "webshop_vrachtwagen":
          for (var i = 0; i < edit.length; i++) {
            edit[i].className += " " + "button-color-orange";
            }
          break;
        case "webshop_bus":
          for (var i = 0; i < edit.length; i++) {
            edit[i].className += " " + "button-color-orange";
          }
          break;
        case "webshop_brommer":
          for (var i = 0; i < edit.length; i++) {
            edit[i].className += " " + "button-color-yellow";
          }
          break;
        case "webshop_motor":
          for (var i = 0; i < edit.length; i++) {
            edit[i].className += " " + "button-color-green";
          }
          break;
        case "webshop_auto":
          for (var i = 0; i < edit.length; i++) {
            edit[i].className += " " + "button-color-darkblue";
          }
          break;
        case "webshop_spiegel":
          for (var i = 0; i < edit.length; i++) {
            edit[i].className += " " + "button-color-blue";
          }
          break;
        default:
        break;
      }
    }
    </script>
  </body>
</html>
