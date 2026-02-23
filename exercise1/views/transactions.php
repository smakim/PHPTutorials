<!DOCTYPE html>
<html>

<head>
    <title>Transactions</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }

        table tr th,
        table tr td {
            padding: 5px;
            border: 1px #eee solid;
        }

        tfoot tr th,
        tfoot tr td {
            font-size: 20px;
        }

        tfoot tr th {
            text-align: right;
        }
        </style>
    </head>

<body>
    <h1>Transactions</h1>
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Check #</th>
                <th>Description</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transactions as $transaction): ?>
                <tr>
                    <td><?= formatDate($transaction['date']) ?></td>
                    <td><?= htmlspecialchars($transaction['check_number']) ?></td>
                    <td><?= htmlspecialchars($transaction['description']) ?></td>
                    <td>
                        <span style="color: <?= $transaction['amount'] > 0 ? 'green' : 'red' ?>">
                            <?= formatAmount($transaction['amount']) ?>
                        </span>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3">Total Income:</th>
                <td><?= number_format($GLOBALS['totalIncome'], 2) ?></td>
            </tr>
            <tr>
                <th colspan="3">Total Expense:</th>
                <td><?= number_format($GLOBALS['totalExpense'], 2) ?></td>
            </tr>
            <tr>
                <th colspan="3">Net Total:</th>
                <td><?= number_format($GLOBALS['netTotal'], 2) ?></td>
            </tr>
        </tfoot>
    </table>
</body>

</html>