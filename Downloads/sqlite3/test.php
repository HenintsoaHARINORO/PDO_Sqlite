<?php

$myPDO = new PDO('sqlite:test.db');
$result = $myPDO->query("SELECT * FROM girl")->fetchAll();
var_dump($result);
?>
