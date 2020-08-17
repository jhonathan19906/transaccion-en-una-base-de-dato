<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'trabajo'
) or die(mysqli_erro($mysqli));

?>
