<?php
$server="localhost";
$username="root";
$password="";

$conn =mysqli_connect($server, $username, $password);
if(!$conn){
    die("no conn due to" . mysqli_connect_error());
}

$sql = "SELECT * FROM `bank`.`user`";
$result = mysqli_query($conn,$sql);



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
      <a class="nav-item nav-link" href="index.html">home</a>
      <a class="nav-item nav-link" href="transaction_history.php">transaction history</a>
    </div>
  </div>
</nav>

<div class="table">
<table>
<tr class="tableheaders">
          <th>ID</th>
          <th>Name</th>
          <th>email</th>
          <th>Balance</th>
        </tr>
    <tr>
</table>
<?php
while($rows=mysqli_fetch_assoc($result))
{
?>
<table class="hello">
     
    <td><?php echo $rows['id']; ?></td>
    <td><?php echo $rows['name']; ?></td>
    <td><?php echo $rows['email']; ?></td>
    <td><?php echo $rows['balance']; ?></td>

  </tr>
  </table>
<?php
}
?>
</div>

<div class="form">


<form action="name.php" method="post">
<label for="name">select a user</label>
</br>
<input style="padding:5px;" type="text" name="userinfo" id="name" placeholder="enter your name">

<button class="button" type="submit">click here</button>
</form>
</div>



    
</body>
</html>