<?php

session_start();
session_unset();
session_destroy();

header("location: ../blog-F1-main/index.php?error=none");