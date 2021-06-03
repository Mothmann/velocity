<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Velocity : Order Cancelled</title>
</head>
<body>
    <div class="title">
        {{ __('Order cancelled.') }}
    </div>
    <div class="description">
        {{ __('Your order has just been cancelled.') }}
    </div>
    <div class="return"><a href="{{url("/")}}"><button>return to the home page</button></a></div>

</body>
</html>
<style>
    body{
        background: rgb(34, 34, 34);
        color: white;
    }
    .return button{
        display: flex;
        justify-content: center;
        align-items: center;
        background: rgb(255, 183, 0);
        border: none;
        color: white;
        border-radius: 5px;
        padding: 0.5rem 1rem;
    }
    .return{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .return a{
        text-decoration: none;
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
