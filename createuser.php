<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/createuser.css">
    <link rel="stylesheet" href="css/viewcustomer.css">
</head>
<body>

<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into user_details(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('user is created successfully');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>

<?php
  include 'navbar.php';
?>

<section id="createuserSection">
    <h1>Create a User</h1>
    <div id="createuserSection_container">
        <img src="img/user2.jpg">
        <div id="contact-box">
                <form method="post">
                    <div class="form-group">
                        <label for="name">NAME </label>
                        <input type="text" name="name" class="input" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">EMAIL </label>
                        <input type="email" name="email" class="input" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone number">DEPOSIT </label>
                        <input type="number" name="balance" class="input" placeholder="Enter amount to deposit" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" value="CREATE"></input>
                    </div>
                    <div class="form-group">
                        <input type="reset" name="reset" id="reset" value="RESET"></input>
                    </div>
                </form>
            </div>
    </div>
    
</section>

</body>
</html>