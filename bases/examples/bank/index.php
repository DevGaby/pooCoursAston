<?php

require '../../BankAccount.php';

$bankAccount = new BankAccount(54897);
try {
    $bankAccount->increase(-90);
} catch (Exception $e) {
    echo $e->getMessage();
}
echo 'toto';