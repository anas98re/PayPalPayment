<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Process Transaction</title>
<style>
    body {
        font-family: Arial, sans-serif;
        text-align: center;
    }
    .container {
        margin-top: 50px;
    }
    button {
        padding: 10px 20px;
        font-size: 16px;
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;
    }
    button:hover {
        background-color: #0056b3;
    }
</style>
</head>
<body>
<div class="container">
    <h1>Process Transaction</h1>
    <p>Click the button below to proceed with the transaction:</p>
    <form action="{{ route('processTransaction') }}" method="POST">
        @csrf
        <button type="submit">Process Transaction</button>
    </form>
</div>
</body>
</html>
