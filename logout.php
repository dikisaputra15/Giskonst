<?php

session_start();
session_destroy();

echo "<script language='javascript'>alert('anda berhasil logout!'); document.location='index.php';</script>";
?>