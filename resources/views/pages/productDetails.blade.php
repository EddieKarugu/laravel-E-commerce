<!Doctype html>
<html lang="en">
<meta charset="UTF-8">
<head>
    <title>PhanStore | ProductDetails</title>
    @vite('resources/css/app.css')
</head>
<body>
     <div class="logo">
        <a href="{{  route('home') }}" class="backBtn">Back</a>
        <h5>PHANSTORE</h5>
        <h1>ProductDetails</h1>
      </div>
<div class="image">
    <img src="{{ asset('assets/images/'. $product->image) }}" alt="image">
</div>
<div class="productDetails">
    <h1>{{ $product->name }}</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Perspiciatis, nostrum porro error voluptas repudiandae dignissimos.
        Amet laboriosam aliquam aspernatur,
        explicabo molestiae, harum sit similique error,
        placeat quisquam nihil soluta eum?
    <br>{{ $product->description }}</p>
    <h5>Ksh {{ $product->price }}</h5>
</div>
<div class="btns">
    <a href="{{ route('cart.store', $product->id) }}" class="cartBtn">Add to Cart</a>
</div>
<div class="foot"></div>
</body>
</html>

