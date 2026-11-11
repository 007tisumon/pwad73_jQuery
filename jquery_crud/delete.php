<?php $db = new mysqli("localhost", "root", "", "withjquery");
 $id = $_GET['id'];

 $db->query("DELETE FROM info WHERE id='$id'");

 if($db->affected_rows){
    echo "success";
 }