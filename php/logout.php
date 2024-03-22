<?php
    session_start();
    unset($_SESSION['uid']);
    unset($_SESSION['insid']);
    unset($_SESSION['instructor']);
    echo '<meta http-equiv="refresh" content="0; URL=../index.html"/>';
?>