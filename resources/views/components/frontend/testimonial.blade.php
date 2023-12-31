<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Testimonial</p>
            <h1 class="display-5 mb-5">What Our Clients Say!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
            @foreach ($reviews as $review)
                <div class="testimonial-item">
                    <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x text-primary"></i>
                        </div>
                        {{ $review->review }}
                    </div>
                    <img class="rounded-circle mb-3" src="{{ asset($review->photo) }}" alt="Reviewer Picture">
                    <h4>{{ $review->name }}</h4>
                    <span>{{ $review->occupation }}</span>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Testimonial End -->
