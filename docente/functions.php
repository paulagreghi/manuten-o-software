<?php

require_once('../config.php');
require_once(DBDOC);

$docente = null;
$docentes = null;
$departamentos = null;

function index() {
	global $docente;
	$docente = find_all('docente');
  global $departamentos;
  $departamentos = find_all('departamento');
}

function add() {
  if (!empty($_POST['docentes'])) {   
    $docentes = $_POST['docentes'];     
    save('docente', $docentes);
    header('location: index.php');
  }
}

function edit() {
  
  if (isset($_GET['doc_id'])) {
    $id = $_GET['doc_id'];
    if (isset($_POST['docentes'])) {
      $docentes = $_POST['docentes'];
      
      update('docente', $id, $docentes);
      header('location: index.php');
    } else {
      global $docentes;
      $docentes = find('docente', $id);
    } 
  } else {
    header('location: index.php');
  }
}

function view($id = null) {
  global $docentes;
  $docentes = find('docente', $id);
}


function delete($id = null) {
  global $docentes;
  $docentes = remove('docente', $id);
  header('location: index.php');
}
