<?php

declare(strict_types=1);

$totalIncome = 0;
$totalExpense = 0;
$netTotal = 0;

// Get all transactions from the transaction_files directory and return them as an array of associative arrays
// Also calculate and display the total income, total expense, and net total at the bottom of
function getTransactions(string $directory): array
{
    // echo "Reading transactions from directory: $directory<br>";
    $transactions = [];
    if (is_dir($directory)) {
        $files = scandir($directory);
        foreach ($files as $file) {
            if (is_file($directory . $file) && pathinfo($file, PATHINFO_EXTENSION) === 'csv') {
                // echo "Processing file: $file<br>";
                $handle = fopen($directory . $file, 'r');
                if ($handle) {
                    while (($data = fgetcsv($handle)) !== false) {
                        // Each row should have 4 columns: date, check number, description, amount
                        // skip 1st row if it contains headers
                        if (strtolower($data[0]) === 'date') {
                            // echo "Skipping header row in file: $file<br>";
                            continue;
                        }
                        if (count($data) === 4) {
                            $transaction = [
                                'date' => $data[0],
                                'check_number' => $data[1],
                                'description' => $data[2],
                                'amount' => floatval(preg_replace('/[^0-9.-]/', '', $data[3]))
                            ];
                            // echo "$data[0], $data[1], $data[2], $data[3]<br>";
                            // echo "Transaction: " . implode(', ', $transaction) . "<br>";
                            $transactions[] = $transaction;
                            if ($transaction['amount'] > 0) {
                                global $totalIncome;
                                $totalIncome += $transaction['amount'];
                                // echo "Added to total income: {$transaction['amount']}<br>";
                            } else {
                                global $totalExpense;
                                $totalExpense += ($transaction['amount']);
                                // echo "Added to total expense: {$transaction['amount']}<br>";
                            }
                        }
                    }
                    fclose($handle);
                }
            }
        }
    }
    global $netTotal, $totalIncome, $totalExpense;
    $netTotal = $totalIncome + $totalExpense;
    // echo "Total Income: $totalIncome<br>";
    // echo "Total Expense: $totalExpense<br>";
    // echo "Net Total: $netTotal<br>";
    $GLOBALS['totalIncome'] = $totalIncome;
    $GLOBALS['totalExpense'] = $totalExpense;
    $GLOBALS['netTotal'] = $netTotal;
    return $transactions;
}

function formatAmount(float $amount): string
{
    return ($amount < 0 ? '-' : '') . '$' . number_format(abs($amount), 2);
}

function formatDate(string $date): string
{
    $timestamp = strtotime($date);
    return date('M j, Y', $timestamp);
}
