<?php
$server="localhost";
$username="root";
$password="";

$conn =mysqli_connect($server, $username, $password);
if(!$conn){
    die("no conn due to" . mysqli_connect_error());
}

$sql = "SELECT * FROM `bank`.`transaction`";
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
      <a class="nav-item nav-link active" href="index.html">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="user_details.php">view all customers</a>
    </div>
  </div>
</nav>
    <h1 style="text-align:center;">Transaction history</h1>
    <div class="table">
<table>
<tr class="tableheaders">
          <th>Sender</th>
          <th>Receiver</th>
          <th>Amount</th>
          <th>Date and time</th>
        </tr>
    <tr>
</table>
    <?php
    while($rows=mysqli_fetch_assoc($result))
    {
    ?>
    <table class="hello">
  <tr>
    <td><?php echo $rows['sender']; ?></td>
    <td><?php echo $rows['receiver']; ?></td>
    <td><?php echo $rows['amount']; ?></td>
    <td><?php echo $rows['date']; ?></td>

  </tr>
  </table>
<?php
}
?>
    

</body>
</html>