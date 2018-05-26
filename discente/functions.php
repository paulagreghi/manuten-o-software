<?php
require_once('../config.php');
require_once(DBDIS);

$discente = null;
$discentes = null;

function index() {
	global $discente;
	$discente = find_all('discente');
}

function add() {
  if (!empty($_POST['discentes'])) {   
    $discentes = $_POST['discentes'];     
    save('discente', $discentes);
    header('location: index.php');
  }
}

function edit() {
  
  if (isset($_GET['dis_id'])) {
    $id = $_GET['dis_id'];
    if (isset($_POST['discentes'])) {
      $discentes = $_POST['discentes'];
      
      update('discente', $id, $discentes);
      header('location: index.php');
    } else {
      global $discentes;
      $discentes = find('discente', $id);
    } 
  } else {
    header('location: index.php');
  }
}

function view($id = null) {
  global $discentes;
  $discentes = find('discente', $id);
}


function delete($id = null) {
  global $discentes;
  $discentes = remove('discente', $id);
  header('location: index.php');
}
