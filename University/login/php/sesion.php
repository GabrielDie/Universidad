<?php
    session_start();
    session_destroy();
    header("location:./../../login/HTML/Index.html");
?>