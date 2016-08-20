<?php
session_start();
session_unset();
session_destroy();
header("location: question.php?n=1");
?>
