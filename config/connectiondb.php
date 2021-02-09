
<?php

# connect to db
$conn = new PDO('mysql:host=localhost;dbname=employees', 'root', '');
# test if connected
if (!$conn) {
  echo 'pas connection';
  print_r($conn->errorInfo());
}

# prepare sql query
$sql = $conn->prepare('SELECT * FROM employee');

$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);

$conn = NULL;
$sql = NULL;

