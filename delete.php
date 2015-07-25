<?php

include('db-connect.php');


$id = $_GET['id'];

// sql to delete a record

$sql = "UPDATE utisci SET active = 0 WHERE id = $id";

$conn->query($sql);
