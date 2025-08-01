<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Add these to your head section -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.min.css">

<!-- CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/details.css') }}">
<!-- JS -->
<script src="{{ asset('assets/js/details.js') }}"></script>

<!------ Include the above in your HEAD tag ---------->

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"><div class="pd-wrap">
		
   
 
    
    <<div class="pd-wrap">
    <div class="container">
        <div class="heading-section">
            @if(session('success'))
                <div class="alert alert-success mt-3">{{ session('success') }}</div>
            @endif
            <h2>Product Details</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <!-- Main Image Slider -->
                <div id="slider" class="owl-carousel product-slider">
                    @foreach($service->images as $image)
                    <div class="item">
                        <img src="{{ $image->image }}" alt="{{ $service->title }}" class="img-fluid">
                    </div>
                    @endforeach
                </div>
                
                <!-- Thumbnail Slider -->
                <div id="thumb" class="owl-carousel product-thumb">
                    @foreach($service->images as $image)
                    <div class="item">
                        <img src="{{ $image->image }}" alt="{{ $service->title }}" class="img-thumbnail">
                    </div>
                    @endforeach
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="product-dtl">
                    <div class="product-info">
                        <div class="product-name">{{ $service->title }}</div>
                        <div class="reviews-counter">
                            <div class="rate">
                                @php
                                    $rating = $service->reviews ?? 0;
                                    $fullStars = floor($rating);
                                    $hasHalfStar = ($rating - $fullStars) >= 0.5;
                                @endphp
                                
                                @for($i = 1; $i <= 5; $i++)
                                    @if($i <= $fullStars)
                                        <i class="fas fa-star text-warning"></i>
                                    @elseif($i - 0.5 <= $rating)
                                        <i class="fas fa-star-half-alt text-warning"></i>
                                    @else
                                        <i class="far fa-star text-warning"></i>
                                    @endif
                                @endfor
                            </div>
                            <span>{{ number_format($rating, 1) }} ({{ $service->review_count ?? 0 }} reviews)</span>
                        </div>
                        <div class="product-price-discount">
                            <span>${{ number_format($service->price, 2) }}</span>
                            @if($service->discount_percentage)
                                <span class="line-through">${{ number_format($service->price * 100 / (100 - $service->discount_percentage), 2) }}</span>
                                <span class="discount-badge">{{ $service->discount_percentage }}% OFF</span>
                            @endif
                        </div>
                    </div>
                    
                    <p>{{ $service->short_description }}</p>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <strong>Estimated Delivery:</strong> {{ $service->estimated_delivery_time ?? '3-5 business days' }}
                        </div>
                    </div>
                    
                    @if($service->is_featured)
                        <div class="featured-badge">
                            <i class="fas fa-star"></i> Featured Product
                        </div>
                    @endif
                    
                    <div class="product-status">
                        Status: 
                        <span class="badge 
                            @if($service->status === 'available') badge-success
                            @elseif($service->status === 'out_of_stock') badge-danger
                            @else badge-secondary @endif">
                            {{ ucfirst(str_replace('_', ' ', $service->status)) }}
                        </span>
                    </div>
                    
                    <div class="product-count">
                        
                    <button type="button" class="round-black-btn" data-toggle="modal" data-target=".bd-example-modal-lg">Contact to Order</button>
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <form method="POST" action="{{ route('products.details', $service->id) }}">
                            @csrf
                        
                            <div class="form-group">
                                <label for="fullName">FULL NAME</label>
                                <input type="text" class="form-control" name="fullName" value="{{ old('fullName') }}" required>
                                @error('fullName') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        
                            <div class="form-group">
                                <label for="email">EMAIL</label>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        
                            <div class="form-group">
                                <label for="phoneNumber">PHONE NUMBER</label>
                                <input type="text" class="form-control" name="phoneNumber" value="{{ old('phoneNumber') }}" required>
                                @error('phoneNumber') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        
                            <div class="form-group">
                                <label for="meetingTime">AVAILABLE DATE & TIME</label>
                                <input type="text" class="form-control datetimepicker" name="meetingTime" value="{{ old('meetingTime') }}" required>
                                @error('meetingTime') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        
                            <button type="submit" class="btn round-black-btn" style="float:right;">SUBMIT</button>
                        </form>
                      </div>
                    </div>
            </div>
                </div>
                </div>
            </div>
        </div>
        
        <div class="product-info-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews ({{ $service->review_count ?? 0 }})</a>
                </li>
            </ul>
            
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                    {!! nl2br(e($service->long_description)) !!}
                </div>
                
                <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                    <div class="review-heading">REVIEWS</div>
                    
                    @if($service->review_count > 0)
                        <!-- Display reviews here if you have them -->
                        <div class="review-list">
                            <!-- You would loop through reviews here -->
                        </div>
                    @else
                        <p class="mb-20">There are no reviews yet.</p>
                    @endif
                    
            
            <form method="POST" action="{{ route('products.details', $service->id) }}">
                @csrf
            
                <div class="form-group">
                    <label for="fullName">FULL NAME</label>
                    <input type="text" class="form-control" name="fullName" value="{{ old('fullName') }}" required>
                    @error('fullName') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            
                <div class="form-group">
                    <label for="email">EMAIL</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            
                <div class="form-group">
                    <label for="phoneNumber">PHONE NUMBER</label>
                    <input type="text" class="form-control" name="phoneNumber" value="{{ old('phoneNumber') }}" required>
                    @error('phoneNumber') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            
                <div class="form-group">
                    <label for="meetingTime">AVAILABLE DATE & TIME</label>
                    <input type="text" class="form-control datetimepicker" name="meetingTime" value="{{ old('meetingTime') }}" required>
                    @error('meetingTime') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            
                <button type="submit" class="btn round-black-btn" style="float:right;">SUBMIT</button>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="	sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>