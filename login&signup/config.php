<?php

$conn = mysqli_connect("localhost", "root", "", "preppros");

if (!$conn) {
    echo "Connection Failed";
}