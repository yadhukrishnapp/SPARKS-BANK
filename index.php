<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPARKS BANK</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css">
</head>
<body>
<?php include 'navbar.php'; ?>

    <section id="introSection">
        <div id="introSection_container">
            <h3>Welcome to</h3>
            <h1>SPARKS BANK</h1>
            <img src="img/bank.png">
        </div>
    </section>

    <section id="operationSection">
        <div class="box">
            <img src="img/user1.png">
            <a href="createuser.php"><button>Create a User</button></a>
        </div>
        <div class="box">
            <img src="img/viewuser.png">
            <a href="viewcustomer.php"><button>View Users</button></a>
        </div>
        <div class="box">
            <img src="img/money.png">
            <a href="transfermoney.php"><button>Make a Transaction</button></a>
        </div>
        <div class="box">
            <img src="img/history.png">
            <a href="transactionhistory.php"><button>Transaction History</button></a>
        </div>
    </section>

    <footer>
        <div class="footerSection">
            Copyright &copy; 2021 | Made by Yadhu Krishna P P
        </div>
    </footer>

</body>
</html>