</<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BANKING SYSTEM</title>
    <link rel="stylesheet" href="Css/style_transactions.css">
  </head>

  <body>
    <div class="navbar">

      <center>
        <hr color="grey" width=70% size=1>

        <h1> THE SPARKS BANK LTD. </h1>
        <a  href="index.php">Home</a>
        <a href="customers.php">View All Customers</a>
        <a href="sendmoney.php">Send Money</a>
        <a class="active"  href="transactions.php">Transactions</a>
        <a href="contact.php">Contact Us</a>
        <a href="about.php">About Us</a>

        <hr color="grey" width=70% size=1>
      </center>

    </div>

    <div class="container">
      <div class="header"> Hello User,<br>Sparks Bank Welcomes you </div>
      <img src="images/bank.png" height=65% width=30% alt="Welcome to the sparks bank!" style="padding: 5px; margin-right: 8vw; margin-top:8vh; float:right"> 
    </div>

    <br>

    <div class="contentbox">
      <center>
        <h1> TRANSACTION HISTORY </h1>
      <center>

      <table class="customer">
        <th> ID </th>
        <th> SENDER'S ACCOUNT NO. </th>
        <th> SENDER'S NAME </th>
        <th> RECEIVER'S ACCOUNT NO. </th>
        <th> RECEIVER'S NAME </th>
        <th> AMOUNT TRANSFERRED </th>
        <th> SENDER'S BALANCE </th>
        <th> RECEIVER'S BALANCE </th>
        <th> TRANSACTION STATUS </th>
        <th> TIME </th>
        </tr>

          

          <?php
          $server="localhost";
          $username="root";
          $password="";
          $dbname="bankingsystem";

          //create connections
          $con=mysqli_connect( $server, $username, $password, $dbname);
          //check for connection success
          if (!$con){
          die("Connection to this database failed due to ".mysqli_connect_error());
          }
          // $sql="Select * from transactions WHERE ID>202200000";
          $sql = "SELECT * FROM `transactions`;";
          $result= $con-> query($sql);
          if ($result-> num_rows>0){
            while ($row = $result-> fetch_assoc()){
              echo "<tr><td>".$row["ID"]."</td><td>".$row["Sender_AccountNo"]."</td><td>".$row["Sender_Name"]."</td><td>".$row["Receiver_AccountNo"]."</td><td>".$row["Receiver_Name"]."</td><td>".$row["Amount_transferred"]."</td><td>".$row["Sender_Balance"]."</td><td>".$row["Receiver_Balance"]."</td><td>".$row["Status"]."</td><td>".$row["Transaction_Date"]."</td></tr>";
            }
            echo "</table>";
          }
          else{
            echo "</table> <br>";
            echo "0 Result Found!";
          }
          $con->close();
          ?>

    </div>
    <br> <br>
    <br> <br>   
    <br> <br> 
    <br> <br> 
    <br> <br> 
    <br> <br>
    <br> <br>
    <br> <br>

    <center>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <div class="pagebreak"></div>
      <div style="width: 80%; color: white; padding:  20px">
        <h4>From launching Sparks Bank Ltd. to becoming one of the country’s most trusted financial institutions today, it’s been quite a journey.<br>At Sparks, we expect more from ourselves, than
            what anyone else expects of us. This way, we are creating
            a rewarding and delightful experience every day for our customers.
        </h4>
      </div>
    </center>


    <div class="pagebreak"> </div>
    <div class="footer"> 
      <center>
        Copyright © PRATHAMESH PISAL 2023. All Rights Reserved .
      </center>
    </div>
    </center>
  </body>
</html>