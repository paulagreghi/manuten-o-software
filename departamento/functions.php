<?php

header('Content-Type: text/html; charset=utf-8');

require_once('../config.php');
require_once(DBDEP);

$departamento = null;
$departamentos = null;

function index() {
	global $departamento;
	$departamento = find_all('departamento');
}

function add() {
  if (!empty($_POST['departamentos'])) {   
    $departamentos = $_POST['departamentos'];     
    save('departamento', $departamentos);
    header('location: index.php');
  }
}

function edit() {
  
  if (isset($_GET['dep_id'])) {
    $id = $_GET['dep_id'];
    if (isset($_POST['departamentos'])) {
      $departamentos = $_POST['departamentos'];
      
      update('departamento', $id, $departamentos);
      header('location: index.php');
    } else {
      global $departamentos;
      $departamentos = find('departamento', $id);
    } 
  } else {
    header('location: index.php');
  }
}

function view($id = null) {
  global $departamentos;
  $departamentos = find('departamento', $id);
}


function delete($id = null) {
  global $departamentos;
  $departamentos = remove('departamento', $id);
  header('location: index.php');
}
