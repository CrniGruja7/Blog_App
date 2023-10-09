<?php
session_start();
$config = require 'config.php';

require 'classes/Conection.php';

$db = Conection::connect($config['database']);  

require 'classes/QueryBilder.php';
require 'classes/User.php';
require 'classes/Post.php';

$user = new User($db);
$query = new QueryBilder($db);
$post = new Post($db);
?>