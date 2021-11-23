<?php
$koneksi = mysqli_connect("localhost", "userdev", "password", "dss_saw");
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal" . mysqli_connect_error();
}
