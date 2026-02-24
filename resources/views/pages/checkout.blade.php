<!Doctype html>
<html lang="en">
<meta charset="UTF-8">
<head>
    <title>Phanstore | checkout</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="checkoutPage">
    <form method="post" action="">
        @csrf
        <label for="number">Input Phone Number</label>
        <input type="tel"
               value="{{ old('number') }}"
               name="number"
               required placeholder=""><br>

       <div class="checkFooter">
           <button type="submit" class="checkBtn">Pay Now</button>
           <a href="{{ route('cart') }}" class="btn">Back</a>
       </div>
    </form>
</div>
</body>



</html>
