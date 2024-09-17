<?php
session_start();
session_destroy();
header("location:index.php?pesan=Anda telah logout");
exit();
?>
