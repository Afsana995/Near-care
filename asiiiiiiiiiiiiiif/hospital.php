<?php
include('server.php');

// Check if the user is logged out
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospitals</title>
    <script>
        function goToNextPage(buttonId) {
          window.location.href = "confirmation.php?id=" + buttonId;
        }
    </script>
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/hospital.css">
</head>
<body>
    <div class="container">
        <div class="navbar">
          <div class="head">
            <div id="circle"></div>
            <img src="images/+.png" id="logo">
            <span id="cn">Near Care</span>
          </div>
          <nav>
            <ul>
              <li><a href="index.php" id="home">Home</a></li>
              <li><a href="hospital.php">Hospital</a></li>
              <li><a href="confirmation.php">Confirmation</a></li>
              <li><a href="receipt.html">Receipt</a></li>
              <?php if (isset($_SESSION['username'])) : ?>
                <li id="log"><a href="index.php?logout='1'">Log out</a></li>
                <li id="sign"><a>Welcome, <?php echo $_SESSION['username']; ?></a></li>
              <?php else : ?>
                <li id="log"><a href="login.php">Log in</a></li>
                <li id="sign"><a href="register.php">Sign up</a></li>
              <?php endif ?>
            </ul>
          </nav>
        </div> 
        <!-- Rest of the HTML content -->


        <div class="images">
            <a href="confirmation.php?id=kurmi" class="kurmi">
                <div class="image">
                    <img class="image__img" src="images/kurmitola.jpg" alt="Kurmitola Hospital">
                    <div class="image__overlay image__overlay--blur">
                        <div class="image__title">Kurmitola Hospital</div>
                        <p class="image__description">
                            House # 48, Road # 9/A, Dhanmondi, Dhaka 1209.
                        </p>
                        <p class="image__description">
                            Bed Available: 11<br>
                            Bed Cost: 4500 tk/per day
                        </p>
                    </div>
                </div>
            </a>

            <a href="confirmation.php?id=popular" class="kurmi">
                <div class="image">
                    <img class="image__img" src="images/img.jpg" alt="POPULAR Hospital">
                    <div class="image__overlay image__overlay--blur">
                        <div class="image__title">POPULAR Hospital</div>
                        <p class="image__description">
                            House # 48, Road # 9/A, Dhanmondi, Dhaka 1209.
                        </p>
                        <p class="image__description">
                            Bed Available: 9<br>
                            Bed Cost: 4800 tk/per day
                        </p>
                    </div>
                </div>
            </a>

            <a href="confirmation.php?id=labb" class="kurmi">
                <div class="image">
                    <img class="image__img" src="images/img3.jpg" alt="LAB AID Hospital">
                    <div class="image__overlay image__overlay--blur">
                        <div class="image__title">LAB AID Hospital</div>
                        <p class="image__description">
                            House # 48, Road # 9/A, Dhanmondi, Dhaka 1209.
                        </p>
                        <p class="image__description">
                            Bed Available: 21<br>
                            Bed Cost: 5900 tk/per day
                        </p>
                    </div>
                </div>
            </a>

            <a href="confirmation.php?id=united" class="kurmi">
                <div class="image">
                    <img class="image__img" src="images/labaid.jpg" alt="United-hospital">
                    <div class="image__overlay image__overlay--blur">
                        <div class="image__title">United-hospital</div>
                        <p class="image__description">
                            House # 48, Road # 9/A, Dhanmondi, Dhaka 1209.
                        </p>
                        <p class="image__description">
                            Bed Available: 17<br>
                            Bed Cost: 4500 tk/per day
                        </p>
                    </div>
                </div>
            </a>

            <a href="confirmation.php?id=medinova" class="kurmi">
                <div class="image">
                    <img class="image__img" src="images/medinova.png" alt="MEDINOVA Hospital">
                    <div class="image__overlay image__overlay--blur">
                        <div class="image__title">MEDINOVA Hospital</div>
                        <p class="image__description">
                            House # 48, Road # 9/A, Dhanmondi, Dhaka 1209.
                        </p>
                        <p class="image__description">
                            Bed Available: 5<br>
                            Bed Cost: 5000 tk/per day
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</body>
</html>
