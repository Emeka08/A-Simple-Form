<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
        if(isset($_POST['submit'])){
            $firstname  = $_POST['firstname'];
            $lastname  = $_POST['lastname'];
            $phonenumber  = $_POST['phonenumber'];
            $email  = $_POST['email'];
            $it  = $_POST['it'];
            $hr  = $_POST['hr'];
            $business  = $_POST['business'];
            $homeaddress  = $_POST['homeaddress'];
            $state  = $_POST['state'];
            $country  = $_POST['country'];

            echo $firstname . "  ";
            echo $lastname . "  ";
            echo $phonenumber . "  ";
            echo $email . "  ";
            echo $it . "  ";
            echo $hr . "  ";
            echo $business . "  ";
            echo $homeaddress . "  ";
            echo $state . "  ";
            echo $country . "  ";
        }
    ?>

    <header>
        <div class="header-name">
            <h1>Contact</h1>
        </div>
        <div class="header-sign-up">
            <a href="#" target="blank">
                <h4>Sign-Up</h4>
            </a>
        </div>
    </header>
    
    <main>
        <form action="site.php" method="POST">
            <div class="form-heading">
                <h2>Fill the Form</h2>
            </div>
            <hr>
            <div class="form-input">
                <div class="label">
                    <label for="firstname"> First Name </label>
                    <input type="text" name="firstname" required>
                </div>
                <div class="label">
                    <label for="lastname"> Last Name </label>
                    <input type="text" name="lastname" required>
                </div>
                <div class="label">
                    <label for="phonenumber">Phone Number </label>
                    <input type="number" name="phonenumber" required>
                </div>
                <div class="label">
                    <label for="email">Email </label>
                    <input type="email" name="email" required>
                </div>
                <div class="label">
                    <label for="department-unit" class="checkbox-label">Department/Unit  <br>
                        <label class="yes" for="it"> IT <input type="checkbox" name="it"> </label>
                        <label class="yes" for="hr"> HR <input type="checkbox" name="hr"> </label>
                        <label class="yes" for="business"> Buisness <input type="checkbox" name="business"> </label>
                    </label>
                </div>
                <div class="label">
                    <label for="homeaddress">Home Address </label>
                    <input type="text" name="homeaddress" required>
                </div>
                <div class="label"> 
                    <label for="state">State </label> 
                    <select name="state" required>
                        <option value="select-a-state" disabled selected>Select a state</option>
                        <option value="imo">Imo</option>
                        <option value="lagos">Lagos</option>
                        <option value="edo">Edo</option>
                        <option value="calarbar">Calarbar</option>
                        <option value="abuja">Abuja</option>
                    </select>
                </div>
                <div class="label">
                    <label for="country"> Country </label>
                    <input type="text" name="country" required>
                </div>
            </div>
            <div class="submit-button">
                <input type="submit" value="Submit" name="submit">
            </div>
        </form>
    </main>

    <footer>
        <div class="footer">
            <h3>Thanks For Your Patronage</h3>
            <p>Designed by <a href="https://github.com/Emeka08" target="blank">Emeka</a> </p>
        </div>
    </footer>
</body>
</html>