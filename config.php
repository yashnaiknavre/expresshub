<?php

$conn = mysqli_connect("localhost", "root", "", "cms_db");

if (!$conn) {
    echo "Connection Failed";
}