<?php 


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link  type="text/css" rel="stylesheet" href="register.css">
</head>

<body>
    <div class="form ">
        <form action="register.php" method="POST" enctype="multipart/form-data">

           <div class="inputname">
            <label for="name">Write your valuable name</label><br>
            <input class="inputbox" type="text" name="name" id="name" placeholder="Write your name" required>
            </div>

            <div class="inputname">
            <label for="name">Write your user name</label><br>
            <input class="inputbox" type="text" name="uname" id="uname" placeholder="Write your user name" required>
            </div>

            <div class="inputname">
            <label for="name">Write your email</label><br>
            <input class="inputbox" type="email" name="email" id="email" placeholder="Write your email" required>
            </div>

            <div class="inputname">
            <label for="name">Write your password</label><br>
            <input class="inputbox" type="password" name="password" id="password" placeholder="Write your password" required>
            </div>

            <div class="inputname">
            <label for="name">Re-write your password</label><br>
            <input class="inputbox" type="password" name="repassword" id="repassword" placeholder="Re-write your password" required>
            </div>

            <div class="">
                <p><span>***</span>I am agree with your terms and condition</p>
            </div>

            <div class="">
           
            <input type="button"  class="btn btn-outline-warning btn-lg" value="Submit Form">
            </div>

            <div class="">
            <p>Already have an account <a href="login.php">LOG IN</a></p>
            </div>
            
        </form>
    </div>
</body>
</html>