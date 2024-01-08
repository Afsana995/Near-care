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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
    <link rel="stylesheet" href="style/confirmation.css">
    <script>
        function submitForm() {
            // Get form data
            var name = document.querySelector('input[name="name"]').value;
            var disease = document.querySelector('input[name="disease"]').value;
            var age = document.querySelector('input[name="age"]').value;
            var ambulance = document.querySelector('#checkbox').checked;
            var gender = document.querySelector('input[name="gender"]').value;
            var hospital = document.querySelector('select[name="hospital"]').value; // Get the selected hospital value
    
            // Construct URL with query parameters
            var url = 'receipt.html' + '?name=' + encodeURIComponent(name) + '&disease=' + encodeURIComponent(disease) +
                '&age=' + encodeURIComponent(age) + '&ambulance=' + encodeURIComponent(ambulance) +
                '&gender=' + encodeURIComponent(gender) + '&hospital=' + encodeURIComponent(hospital); // Append the hospital value
    
            // Redirect to receipt.html
            window.location.href = url;
        }
    
        window.onload = function() {
            var urlParams = new URLSearchParams(window.location.search);
            var buttonId = urlParams.get('id');
            var h1Element = document.querySelector('.form-box h1');
            var hospitalID = document.querySelector('#hospitalName');
            if (buttonId === 'kurmi') {
                h1Element.textContent = 'Kurmitola Hospital';
                hospitalID.textContent = ': Kurmitola Hospital';
                document.querySelector('#ops').style.visibility = 'hidden';
                document.querySelector('select[name="hospital"]').value = 'kurmi';
            } else if (buttonId === 'popular') {
                h1Element.textContent = 'POPULAR Hospital';
                hospitalID.textContent = ': POPULAR Hospital';
                document.querySelector('#ops').style.visibility = 'hidden';
                document.querySelector('select[name="hospital"]').value = 'popular';
            } else if (buttonId === 'labb') {
                h1Element.textContent = 'LAB AID Hospital';
                hospitalID.textContent = ': LAB AID Hospital';
                document.querySelector('#ops').style.visibility = 'hidden';
                document.querySelector('select[name="hospital"]').value = 'labb';
            } else if (buttonId === 'united') {
                h1Element.textContent = 'United-hospital';
                hospitalID.textContent = ': United-hospital';
                document.querySelector('#ops').style.visibility = 'hidden';
                document.querySelector('select[name="hospital"]').value = 'united';
            } else if (buttonId === 'medinova') {
                h1Element.textContent = 'MEDINOVA Hospital';
                hospitalID.textContent = ': MEDINOVA Hospital';
                document.querySelector('#ops').style.visibility = 'hidden';
                document.querySelector('select[name="hospital"]').value = 'medinova';       // imp
            }
        };
    </script>
    
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


        <div class="form-box">
            <h1>Near Care Services(Pvt.) Ltd.</h1>
            <form id="confirmationForm">
                <div class="input-group">
                    <div class="input-field">
                        <label for="floor"><b>Name</b></label>
                        <input type="text" name="name" placeholder="Patient Name">
                    </div>
                    <div class="input-group">
                        <div class="input-field">
                            <label for="floor"><b>Disease</b></label>
                            <input type="text" name="disease" placeholder="Disease name">
                        </div>
                        <div class="input-group">
                            <div class="input-field">
                                <label for="floor"><b>Age</b></label> 
                                <input type="text" name="age" placeholder="Age">
                            </div>
                            <div class="checkbox">
                                <input type="checkbox" id="checkbox" name="ambulance">
                                <span id="cb">Ambulance</span>
                            </div>
                            <div class="input-group">
                                <div class="input-field">
                                    <label for="floor"><b>Gender</b></label>
                                    <input type="text" name="gender" placeholder="Male/F">
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="input-field">
                                    <label for="hospital"><b>Hospital</b>&nbsp&nbsp</label>
                                    <h5 id="hospitalName">  </h5>
                                    <select name="hospital" id="ops">
                                        <option value="kurmi">Kurmitola Hospital</option>
                                        <option value="popular">POPULAR Hospital</option>
                                        <option value="labb">LAB AID Hospital</option>
                                        <option value="united">United-hospital</option>
                                        <option value="medinova">MEDINOVA Hospital</option>
                                    </select>
                                </div>
                            </div>
                            <div class="btn-field">
                                <button type="button" onclick="submitForm()">Previous</button>
                                <button type="button" onclick="submitForm()">Confirm</button>
                            </div>
            </form>
        </div>
        <img src="images/Untitled-1.png" id="img">
    </div>
</body>
</html>
