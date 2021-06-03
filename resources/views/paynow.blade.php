<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @php
        $total=0;
    @endphp
     <form action="{{route('paypal_call')}}" method="post">
        @php
        $total = $tickets->price /10;
    @endphp
     @csrf
     <div class="row">
         <input type="hidden" name="amount" value="{{ $total }}">
         <button type="submit">pay now</button>
     </div>
</form>
</body>
</html>
