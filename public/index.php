<?php
$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('FILES_PATH', $root . 'transaction_files' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR);
require APP_PATH . 'app.php';

$files = getTransacctionfiles(FILES_PATH);

$transactions = [];
foreach ($files as $file) {
    $transactions = array_merge($transactions, getTransactions($file, 'extractTransaction'));

}
print_r($transactions[0]);
require VIEWS_PATH . 'view.php';
