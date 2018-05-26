<?php require_once DBAPI; ?>

<?php
function find( $table = null, $id = null ) {  
  $database = open_database();
  $found = null;
  try {
    if ($id) {
      $sql = "SELECT * FROM " . $table . " WHERE doc_id = " . $id;
      $result = $database->query($sql);
      
      if ($result->num_rows > 0) {
        $found = $result->fetch_assoc();
      }
      
    } else {
      
      $sql = "SELECT * FROM " . $table;
      $result = $database->query($sql);
      
      if ($result->num_rows > 0) {
        $found = $result->fetch_all(MYSQLI_ASSOC);
       
      }
    }
  } catch (Exception $e) {
    $_SESSION['message'] = $e->GetMessage();
    $_SESSION['type'] = 'danger';
  }
  
  close_database($database);
  return $found;
}
?>

<?php
function find_all( $table ) {
  return find($table);
} 
?>

<?php
function save($table = null, $data = null) {
  $database = open_database();
  $columns = null;
  $values = null;
  
  foreach ($data as $key => $value) {
    $columns .= trim($key, "'") . ",";
    $values .= "'$value',";
  }
  $columns = rtrim($columns, ',');
  $values = rtrim($values, ',');
  
  $sql = "INSERT INTO " . $table . "($columns)" . " VALUES " . "($values);";
  try {
    $database->query($sql);
    $_SESSION['message'] = 'Registro cadastrado com sucesso.';
    $_SESSION['type'] = 'success';
  
  } catch (Exception $e) { 
  
    $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
    $_SESSION['type'] = 'danger';
  } 
  close_database($database);
}
?>

<?php
function update($table = null, $id = 0, $data = null) {
  $database = open_database();
  $items = null;
  foreach ($data as $key => $value) {
    $items .= trim($key, "'") . "='$value',";
  }
  
  $items = rtrim($items, ',');
  $sql  = "UPDATE " . $table;
  $sql .= " SET $items";
  $sql .= " WHERE doc_id=" . $id . ";";
  try {
    $database->query($sql);
    $_SESSION['message'] = 'Registro atualizado com sucesso.';
    $_SESSION['type'] = 'success';
  } catch (Exception $e) { 
    $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
    $_SESSION['type'] = 'danger';
  } 
  close_database($database);
}
?>

<?php
function remove( $table = null, $id = null ) {
  $database = open_database();  
  try {
    if ($id) {
      $sql = "DELETE FROM " . $table . " WHERE doc_id = " . $id;
      $result = $database->query($sql);
      if ($result = $database->query($sql)) {     
        $_SESSION['message'] = "Registro Removido com Sucesso.";
        $_SESSION['type'] = 'success';
      }
    }
  } catch (Exception $e) { 
    $_SESSION['message'] = $e->GetMessage();
    $_SESSION['type'] = 'danger';
  }
  close_database($database);
}