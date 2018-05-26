<?php

require_once('../config.php');
require_once(DBFON);

$fonte = null;
$fontes = null;

function index() {
	global $fonte;
	$fonte = find_all('fonte');
}

function add() {
  if (!empty($_POST['fontes'])) {   
    $fontes = $_POST['fontes'];     
    save('fonte', $fontes);
    header('location: index.php');
  }
}

function edit() {
  
  if (isset($_GET['fon_id'])) {
    $id = $_GET['fon_id'];
    if (isset($_POST['fontes'])) {
      $fontes = $_POST['fontes'];
      
      update('fonte', $id, $fontes);
      header('location: index.php');
    } else {
      global $fontes;
      $fontes = find('fonte', $id);
    } 
  } else {
    header('location: index.php');
  }
}

function view($id = null) {
  global $fontes;
  $fontes = find('fonte', $id);
}


function delete($id = null) {
  global $fontes;
  $fontes = remove('fonte', $id);
  header('location: index.php');
}
