<?php
require (__DIR__."\\db.php");

$totalPages = $db->query('SELECT COUNT(*) as count FROM news');

echo $totalPages;