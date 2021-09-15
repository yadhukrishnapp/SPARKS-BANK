<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/viewcustomer.css">
    <link rel="stylesheet" href="css/transactionhistory.css">

</head>
<body>
    
<?php
  include 'navbar.php';
?>

<section id="transactionSection">
    <h1 class="title">Transaction History</h1>
    <table id="transaction_details">
        <tr>
            <th>S.No.</th>
            <th>Sender</th>
            <th>Receiver</th>
            <th>Amount</th>
            <th>Date and Time</th>
        </tr>

            <?php 
                    include 'config.php';
                    $sql ="select * from transaction_details";
                    $query =mysqli_query($conn, $sql);
                    while($rows=mysqli_fetch_assoc($query)){
                ?>
                    <tr>
                        <td><?php echo $rows['sno'] ?></td>
                        <td><?php echo $rows['sender']?></td>
                        <td><?php echo $rows['receiver']?></td>
                        <td><?php echo $rows['balance']?></td>
                        <td><?php echo $rows['datetime']?></td>
                    </tr>
                <?php
                    }
                ?>
    </table>
    
</section>

</body>
</html>
