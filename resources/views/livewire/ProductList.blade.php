
<div class="products">
    @forelse($products as $product)
        <div class="product">
            <img src="{{ asset('assets/images/' . $product->image) }}" alt="{{$product-> name}}">
            <h1>{{ $product->name }}</h1>
            <p>{{ $product->description }}</p>
            <h5>Ksh {{ $product->price }}</h5>
            <div class="details">
                <a href="{{ route('productDetails', $product-> id) }}">Details</a>
            </div>
        </div>
    @empty
        <div class="emptyProduct">
            <h5>No such items found</h5>
        </div>
    @endforelse
</div>
