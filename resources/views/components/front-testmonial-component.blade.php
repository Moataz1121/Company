<div class="container-xxl py-6">
    <div class="container">
        <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Testimonial</div>
            <h2 class="mb-5">What Our Clients Say!</h2>
        </div>
        @if (count($tests) > 0)
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            @foreach ($tests as $test)
            <div class="testimonial-item rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>{{ $test->descreption }}</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset("storage/test/$test->image") }}">
                    <div class="ps-3">
                        <h6 class="mb-1">{{ $test->name }}</h6>
                        <small>{{ $test->position }}</small>
                    </div>
                </div>
            </div>
            @endforeach




        </div>
        @endif

    </div>
</div>
