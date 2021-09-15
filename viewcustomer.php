<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View User</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/viewcustomer.css">

</head>
<body>
    
<?php
    include 'config.php';
    $sql = "SELECT * FROM user_details";
    $result = mysqli_query($conn,$sql);
?>

<?php
  include 'navbar.php';
?>

<section id="viewuserSection">
    <h1 class="heading">Users</h1>
    <table id="user_info">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Balance</th>
        </tr>

            <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td><?php echo $rows['id'] ?></td>
                        <td><?php echo $rows['name']?></td>
                        <td><?php echo $rows['email']?></td>
                        <td><?php echo $rows['balance']?></td>
                    </tr>
                <?php
                    }
                ?>
    </table>
    
    
</section>

</body>
</html>
