<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align:center">Future Fitness (Pvt) Ltd</h1><br>
    
    <h1>Payment Details</h1>

    Member ID: <h3>{{$payment->user_id}}</h3>

    Member Name: <h3>{{$payment->name}}</h3>

    Member Email: <h3>{{$payment->email}}</h3>

    Package ID: <h3>{{$payment->package_id}}</h3>

    Package Title: <h3>{{$payment->title}}</h3>

    Package Amount: <h3>{{$payment->price}}</h3>

    Payment Status: <h3>{{$payment->payment_status}}</h3>

    

</body>
</html>