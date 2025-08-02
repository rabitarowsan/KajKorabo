<?php use Illuminate\Support\Str; ?>

@include('dekhi')

<!-- CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/services.css') }}">
<!-- JS -->
<script src="{{ asset('assets/js/services.js') }}"></script>

<!-- Font Awesome 6 Free CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">




<section class="creative-cards style-one">
		<div class="container">
			<h1 style="text-align:center; font-size:2.8em; font-weight:700; letter-spacing:1px; ">
    			Available Service Categories
			</h1>
			<div class="row">
				@foreach($categories as $category)
				<div class="card-column">
					<div class="card-details">
						<div class="card-icons">
							<img class="light-icon"
                                 src="{{ asset('uploads/Untitled design (1)/' . $category->category . '.png') }}"
                                 alt="{{ $category->category }}" />
						</div>
						<h3>
							<a href="{{ route('products', ['category' => Str::slug($category->category)]) }}">
								{{ $category->category }}
							</a>
						</h3>
						<p>Explore our {{ $category->category }} services.</p>
						<a class="read-more-btn"
						   href="{{ route('products', ['category' => Str::slug($category->category)]) }}">
							<i class="fa-solid fa-angles-right"></i>
						</a>
					</div>
				</div>
				@endforeach
			</div>
		</div>
</section>