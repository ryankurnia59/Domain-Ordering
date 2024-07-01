<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            color: #333;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Invoice for Domain Purchase</h2>
    <table>
        <tr>
            <th>Domain</th>
            <td><?= $domain ?></td>
        </tr>
        <tr>
            <th>Full Name</th>
            <td><?= $fullname ?></td>
        </tr>
        <tr>
            <th>Email Address</th>
            <td><?= $email ?></td>
        </tr>
        <tr>
            <th>Amount</th>
            <td><?= $amount ?></td>
        </tr>
        <tr>
            <th>Payment Method</th>
            <td><?= $payment_method ?></td>
        </tr>
    </table>
</div>

</body>
</html>