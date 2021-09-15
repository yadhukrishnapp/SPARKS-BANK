<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/viewcustomer.css">

    <style type="text/css">
      button{
        padding: 4px 10px;
        transition: 1.5s;
        border-radius: 10px;
        border-style: none;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
    }
    button:hover{
        background-color: grey;
        color: white;
        font-weight: bold;
      }
    </style>

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
    <h1 class="heading">Transfer Money</h1>
    <table id="user_info">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Balance</th>
            <th>Operation</th>
        </tr>

            <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td><?php echo $rows['id'] ?></td>
                        <td><?php echo $rows['name']?></td>
                        <td><?php echo $rows['email']?></td>
                        <td><?php echo $rows['balance']?></td>
                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="button">Transfer</button></a></td>
                    </tr>
                <?php
                    }
                ?>
    </table>
    
    
</section>

</body>
</html>