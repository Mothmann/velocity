<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Velocity : Order Cancelled</title>
</head>
<body>
    <div class="title">
        {{ __('Order cancelled.') }}
    </div>
    <div class="description">
        {{ __('Your order has just been cancelled.') }}
    </div>

</body>
</html>
<style>
    body{
        background: rgb(34, 34, 34);
        color: white;
    }
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
    .title{
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        font-size: 3rem;
        letter-spacing: 3px;
        font-weight: 700;
        color: rgb(255, 183, 0);
        margin: 2% 5%;
    }
    .description{
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        font-size: 2rem;
        margin-left: 5%;
        margin-right: 5%;
        margin-bottom: 5%;
    }
</style>
