<?php

require_once('../config.php');
require_once(DBPRO);

$programa = null;
$programas = null;
$fontes = null;

function index() {
	global $programa;
	$programa = find_all('programa');
  global $fontes;
  $fontes = find_all('fonte');
}

function add() {
  if (!empty($_POST['programas'])) {
    $programas = $_POST['programas'];
    $programas['fon_id'] = (Integer) $programas['fon_id'];
    save('programa', $programas);
    header('location: index.php');
  }
}

function edit() {
  
  if (isset($_GET['pro_id'])) {
    $id = $_GET['pro_id'];
    if (isset($_POST['programas'])) {
      $programas = $_POST['programas'];
      
      update('programa', $id, $programas);
      header('location: index.php');
    } else {
      global $programas;
      $programas = find('programa', $id);
    } 
  } else {
    header('location: index.php');
  }
}

function view($id = null) {
  global $programas;
  $programas = find('programa', $id);
}


function delete($id = null) {
  global $programas;
  $programas = remove('programa', $id);
  header('location: index.php');
}
