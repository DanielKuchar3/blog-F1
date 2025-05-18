<?php

session_start();
session_unset();
session_destroy();

header("Location: ../blog-F1-main/index.php");
die();