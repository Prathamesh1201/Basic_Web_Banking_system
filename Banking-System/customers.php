</<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BANKING SYSTEM</title>
    <link rel="stylesheet" href="Css/style_customers.css">
  </head>

  <body>
    <div class="navbar">

      <center>
        <hr color="grey" width=70% size=1>

        <h1> THE SPARKS BANK LTD.</h1>
        <a  href="index.php">Home</a>
        <a class="active" href="customers.php">View All Customers</a>
        <a href="sendmoney.php">Send Money</a>
        <a href="transactions.php">Transactions</a>
        <a href="contact.php">Contact Us</a>
        <a href="about.php">About Us</a>

        <hr color="grey" width=70% size=1>
      </center>
    </div>

    <div class="container">
      <div class="header"> Hello User,<br>Sparks Bank Welcomes you </div>
      <img src="images/bank.png" height=65% width=30% alt="Welcome to the sparks bank!" style="padding: 5px; margin-right: 8vw; margin-top:8vh; float:right"> 
    </div>
    
    <center>
      <div class="contentbox" cellspacing="20px" cellpadding="20px">
        <h1> ALL CUSTOMERS </h1>

        <table class="customer" style="font-color: white">
        <th> Name </th>
        <th> Email </th>
        <th> Account No </th>
        <th> Balance </th>
        </tr>

        <?php
        $server="localhost";
        $username="root";
        $password="";
        $dbname="bankingsystem";

       
        $con=mysqli_connect( $server, $username, $password, $dbname);
        
        if (!$con){
         die("Connection to this database failed due to ".mysqli_connect_error());
        }

        $sql="Select Name, Email, Account_no, Balance from customers";
        $result= $con-> query($sql);
        if ($result-> num_rows>0){
          while ($row = $result-> fetch_assoc()){
            echo "<tr><td>".$row["Name"]."</td><td>".$row["Email"]."</td><td>".$row["Account_no"]."</td><td>".$row["Balance"]."</td></tr>";
          }
          echo "</table>";
          }
        else{
          echo "0 Result Found!";
        }
        $con->close();
        ?>
  
      </div>

      <div class="pagebreak"> </div>

      <div style="width: 80%; color: white; padding: 20px">
        <h4>From launching Sparks Bank Ltd. to becoming one of the country’s most trusted financial institutions today, it’s been quite a journey.<br>At Sparks, we expect more from ourselves, than
            what anyone else expects of us. This way, we are creating
            a rewarding and delightful experience every day for our customers.
        </h4>
      </div>

      <div class="pagebreak"> </div>


      <div class="footer"> 
        <center>
        Copyright © PRATHAMESH PISAL 2023. All Rights Reserved .
        </center>
      </div>
    </center>
  </body>
</html>