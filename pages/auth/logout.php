<?php
 include_once("../../config/koneksi.php");
 session_start();
 session_destroy();
 header("Location:../..");
?>