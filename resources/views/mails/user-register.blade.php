<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>HRMS Vacation Application Process</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #ccc;
        }

        h1 {
            text-align: center;
            color: #72c02c;
            margin-top: 40px;
        }

        p {
            font-size: 16px;
            color: #333;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        a {
            color: #72c02c;
            text-decoration: none;
        }

        .details {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
            border-top: 1px solid #72c02c;
            padding-top: 20px;
        }

        .details p {
            font-size: 14px;
            color: #72c02c;
            margin: 0;
        }
    </style>
</head>
<body>
<div class="container">

    <div>
        <h1> Hurmatli {{$user->name}}</h1>
         tasdiqlash kodingiz:  {{$code}}
    </div>
    <div class="details">

        <p>Hurmat bilan HERTA jamoasi</p>

    </div>
</div>
</body>
</html>
