<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $nombre = $_POST['nombre'];
  $query = "INSERT INTO task(title, description, nombre) VALUES ('$title', '$description ','$nombre')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Depósito agregado con exito';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}
if (!$mysqli -> commit()) {
  echo "Commit transaction failed";
  exit();
}

// Rollback transaction
$mysqli -> rollback();

$mysqli -> close();


$resultado = mysql_query("SELECT SUM(MONTO) as MONTO FROM task WHERE id_=11");	
$row = mysql_fetch_array($resultado, MYSQL_ASSOC);

echo $row["MONTOTotal"];

?>
