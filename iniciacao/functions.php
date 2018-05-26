<?php

require_once('../config.php');
require_once(DBINI);

$iniciacao = null;
$iniciacoes = null;
$discentes = null;
$docentes = null;
$programas = null;

function index() {
	global $iniciacao;
	$iniciacao = find_all('iniciacao');
  global $discentes;
  $discentes = find_all('discente');
  global $docentes;
  $docentes = find_all('docente');
  global $programas;
  $programas = find_all('programa');
}

function add() {
  if (!empty($_POST['iniciacoes'])) {   
    $iniciacoes = $_POST['iniciacoes'];     
    save('iniciacao', $iniciacoes);
    header('location: index.php');
  }
}

function edit() {
  
  if (isset($_GET['ini_id'])) {
    $id = $_GET['ini_id'];
    if (isset($_POST['iniciacoes'])) {
      $iniciacoes = $_POST['iniciacoes'];
      
      update('iniciacao', $id, $iniciacoes);
      header('location: index.php');
    } else {
      global $iniciacoes;
      $iniciacoes = find('iniciacao', $id);
    } 
  } else {
    header('location: index.php');
  }
}

function view($id = null) {
  global $iniciacoes;
  $iniciacoes = find('iniciacao', $id);
}


function delete($id = null) {
  global $iniciacoes;
  $iniciacoes = remove('iniciacao', $id);
  header('location: index.php');
}
