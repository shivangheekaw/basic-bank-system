<?php
$server="localhost";
$username="root";
$password="";

$conn =mysqli_connect($server, $username, $password);
if(!$conn){
    die("no conn due to" . mysqli_connect_error());
}

//$name=$_POST["userinfo"];
$name = isset($_POST['userinfo']) ? $_POST['userinfo'] : '';



$sql = "SELECT * FROM `bank`.`user` where name='$name'";
$result = mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num==0){
  ?>
  <script>
            window.alert("User does not exist");
        </script>
  <?php      
  exit("user does not exist");
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="user.css">
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
    <a class="nav-item nav-link" href="home.html">home</a>

    <a class="nav-item nav-link" href="user_details.php">view all customers</a>

      <a class="nav-item nav-link" href="transaction_history.php">transaction history</a>
    </div>
  </div>
</nav>
<?php
while($rows=mysqli_fetch_assoc($result))
{
?>
<table class="hello" style="margin-left:10%; margin-bottom:6%; margin-top:50px;">
  <tr>
    <td><?php echo $rows['id']; ?></td>
    <td><?php echo $rows['name']; ?></td>
    <td><?php echo $rows['email']; ?></td>
    <td><?php echo $rows['balance']; ?></td>

  </tr>
  </table>
<?php
}
?>
<button style="margin-left:43%;" type="button" class="btn btn-primary btn-lg" onclick="window.location.href='transfer.html';">transfer money</button>



</body>
</html>
