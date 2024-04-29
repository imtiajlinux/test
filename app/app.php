<?php
function getTransacctionfiles($dirpath)
{
    $files = [];
    foreach (scandir($dirpath) as $file) {
        if (is_dir($file)) {
            continue;
        }
        $files[] = $dirpath . $file;
    }
    return $files;

}

function getTransactions($fileName,  ? callable $transationHandler = null)
{
    if (!file_exists($fileName)) {
        trigger_error('file' . $fileName . 'does nnot exits ', E_USER_ERROR);
    }
    $file = fopen($fileName, 'r');
    fgetcsv($file);
    $transactions = [];

    while (($transaction = fgetcsv($file)) !== false) {
        if ($transationHandler !== null) {
            $transaction = $transationHandler($transaction);

        }
        $transactions[] = $transaction;
    }
    return $transactions;

}
function extractTransaction($transactionRow)
{
    [$date, $checkNumber, $description, $amount] = $transactionRow;
    return [
        'date' => $date,
        'checkNumber ' => $checkNumber,
        'description' => $description,
        'amount' => $amount,

    ];

}
