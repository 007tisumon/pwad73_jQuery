<?php $db = new mysqli("localhost", "root", "", "withjquery");

if (mysqli_connect_errno()) {
    printf("", mysqli_connect_error());
}

 $name = $_GET['name'];
 $address = $_GET['address'];

$db->query("INSERT INTO info (id,name,address) VALUES (null,'$name', '$address')");

if ($db->affected_rows) {
     'succefully inserted';
} else {
    "faild insert";
}
