<?php $db = new mysqli("localhost", "root", "", "withjquery");

if (mysqli_connect_errno()) {
    printf("", mysqli_connect_error());
}

$raws = $db->query("SELECT * FROM info");
$output = "";
?>
<table border="1"  >
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>action</th>
    </tr>


    <?php
    while ($raw = $raws->fetch_assoc()) {
        echo "
      <tr>
         <td> {$raw['name']} </td>
          <td> {$raw['address']} </td>
          <td> Edit | <button id={$raw['id']} class='btndel'>DELETE</button> </td>
      </tr>
    
    ";
    }


    ?>
</table>