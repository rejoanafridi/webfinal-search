<?php
$searchdata = $_POST['search'];
$conn = mysqli_connect('localhost', 'root', '', 'users');


$sql = "SELECT user.FirstName FROM userdata where userdata.user.FirstName=:search";
$query = $dbh->prepare($sql);
$query->bindParam(':search', $searchdata, PDO::PARAM_STR);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);
$cnt = $query->rowCount();
?>
