<?php

require '../../DBTable.php';

$dbTable = new DBTable();
$dbTable->insert(array());
$dbTable->findAll();
echo '<br>';

echo $dbTable->getCounter();
$dbTable2 = new DBTable();
$dbTable2->insert(array());
$dbTable2->findAll();
echo '<br>';

echo $dbTable2->getCounter();