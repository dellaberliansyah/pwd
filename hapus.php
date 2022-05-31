<?php
include("connect.php");

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM identitas WHERE no_identitas=$id";
    $query = mysqli_query($db, $sql);
header('location:index.php');
}