<?php
session_start();

include 'core/funcations.php';
include 'inc/nav.php';

header("location: login.php");
session_destroy();
die;