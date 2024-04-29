<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCOUNTING</title>
    <style>
        .container h1{
            text-align: center;
            padding:  1rem;
            border: 2px black solid;
            border-radius:  20px 0 20px 0;
        }

        table{
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }
        table tr th,table tr td{
            padding: 5px;
            border: 1px black solid;
        }
         tfoot tr th, tfoot tr td {
                font-size: 20px;
            }

            tfoot tr th {
                text-align: right;
            }
    </style>
</head>
<body>
   <div class="container"><h1>The Account</h1>
        <table>
            <thead>
                    <tr>
                        <th>Date</th>
                        <th>Check</th>
                        <th>Description</th>
                        <th>Amount</th>

                    </tr>
            </thead>
            <tbody>
                <tr>
                    <td>12/02/2003</td>
                    <td>39943</td>
                    <td>Transaction 25</td>
                    <td>$5094</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3">Total Income:</th>
                    <td>3000</td>
                </tr>
                <tr>
                    <th colspan="3">total Expaense:</th>
                    <td>6000</td>
                </tr>
                <tr>
                    <th colspan="3">Net Total:</th>
                    <td>5000</td>
                </tr>
            </tfoot>
        </table>
   </div>

</body>
</html>
