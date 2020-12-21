<?php
$server="localhost";
$username="root";
$password="";

$conn =mysqli_connect($server, $username, $password);
if(!$conn){
    die("no conn due to" . mysqli_connect_error());
}
//echo "success";
$sender = isset($_POST['sender']) ? $_POST['sender'] : '';
$receiver = isset($_POST['receiver']) ? $_POST['receiver'] : '';
$amount = isset($_POST['amount']) ? $_POST['amount'] : '';


//balance-amount mai gadbad hai but working
//$sql="UPDATE `bank`.`user` SET `balance` = 'balance-$amount' WHERE `user`.`name` = '$sender';";
//first select the balance 

$sql = "SELECT * FROM `bank`.`user` where name='$sender'";
$result = mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num==0){
  exit("sender does not exist");
}
$sql1 = "SELECT * FROM `bank`.`user` where name='$receiver'";
$result1 = mysqli_query($conn,$sql1);
$num1=mysqli_num_rows($result1);
if($num1==0){
  exit("receiver does not exist");
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color:rgb(30, 136, 118);">
  <a class="navbar-brand" href="#">sparks foundation</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="index.html">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="user_details.php">view all customers</a>
      <a class="nav-item nav-link" href="transaction_history.php">transaction history</a>
    </div>
  </div>
</nav>

<?php
while($rows=mysqli_fetch_assoc($result))
{
?>
<table>
  <tr>
  <td><?php $bal= $rows['balance']; ?></td>
    

  </tr>
  </table>
<?php
}
$remaining=$bal-$amount;

//$update="UPDATE `bank`.`user` SET 'balance' = '1000' WHERE 'user'.'name' = 'Shivanghee kaw'";
$update_sender="UPDATE `bank`.`user` SET balance='$remaining' WHERE name='$sender'";
$update_sender_result=mysqli_query($conn,$update_sender) or die(mysqli_error($conn));

//for reciever


while($rows1=mysqli_fetch_assoc($result1))
{
    $bal1= $rows1['balance'];
    
}
$remaining1=$bal1+$amount;


$update_receiver="UPDATE `bank`.`user` SET balance='$remaining1' WHERE name='$receiver'";
$update_receiver_result=mysqli_query($conn,$update_receiver) or die(mysqli_error($conn));



//insert in transaction table
$sql="INSERT INTO `bank`.`transaction` (`sender`, `receiver`, `amount`) VALUES ('$sender', '$receiver', '$amount')";
$result= mysqli_query($conn,$sql);

echo "Transfer Successful";

?>
    
</body>
</html>