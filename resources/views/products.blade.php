<!-- CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/products.css') }}">
<!-- Font Awesome 6 Free CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<ul class="catCardList">
    <H1 style="text-align:center; font-size:2.8em; font-weight:700; letter-spacing:1px; ">ALL PRODUCTS</H1>
    @foreach($products as $product)
    <li class="catCardList">
        <div class="catCard"><a href=""{{ route('products.details', ['id' => $product->id]) }}""><img src="{{ $product->images->first()->image }}" alt="{{ $product->title }}" class="product-image" onerror="this.src='https://via.placeholder.com/221x200?text=Image+Not+Available'"></a>
            <div class="lowerCatCard">
                <h3>{{ $product->title }}</h3>
                <h4>Category: {{ $product->category }}</h4>
                <div class="startingPrice">
                    Prices Starting At <span>
                        ${{ $product->price ?? 'N/A' }}
                    </span>
                </div>
                <h4>Best Used For:</h4>
                <ul>
                    <li>{{ $product->short_description ?? 'No description available.' }}</li>
                </ul>
                <div class="star-rating">
                    <h4>Reviews:</h4>
                    @php
                        $rating = $product->reviews ?? 0;
                    @endphp
                    @for($i = 1; $i <= 5; $i++)
                        @if($i <= $rating)
                            <i class="fas fa-star"></i> <!-- Full star -->
                        @elseif($i - 0.5 <= $rating)
                            <i class="fas fa-star-half-alt"></i> <!-- Half star -->
                        @else
                            <i class="far fa-star"></i> <!-- Empty star -->
                        @endif
                    @endfor
                    <span class="rating-value">({{ number_format($rating, 1) }})</span>
                </div>
                <div id="catCardButton" class="button"><a href="{{ route('products.details', ['id' => $product->id]) }}">View Details</a></div>
            </div> 
        </div>
    </li>
    @endforeach
</ul>