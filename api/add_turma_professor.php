<?php
  session_start();
  $universidade = isset($_POST['universidade']) ? $_POST['universidade'] : "";
  $turma = isset($_POST['turma']) ? $_POST['turma'] : "";
  $professor = isset($_SESSION['id']) ? $_SESSION['id'] : "";

  // include db connect class
  require_once __DIR__ . '/db_connect.php';


  $query  = "INSERT INTO turma (nome, id_universidade, id_professor) VALUES ('{$turma}', {$universidade}, {$professor})";
  $result = mysqli_query($connection, $query);
  if (!$result) { die("Database query failed. " . mysqli_error ($connection)); }
?>