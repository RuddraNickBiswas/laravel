@php
    $testimonials = App\Models\Testimonial::get();
    
@endphp
<section id="testimonials" class="testimonials">
    <div class="container position-relative">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                @foreach ($testimonials as $testimonial)
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset($testimonial->image) }}" class="testimonial-img" alt="">
                            <h3> {{ $testimonial->name }} </h3>
                            <h4>{{ $testimonial->post }}</h4>
                            <div class="stars">
                                @for ($i = 1; $i <= $testimonial->rating; $i++)
                                    <i class="bi bi-star-fill"></i>
                                @endfor
                                @for ($i = $testimonial->rating + 1; $i <= 5; $i++)
                                    <i class="bi bi-star"></i>
                                @endfor
                            </div>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                {{ $testimonial->description }}
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->
                @endforeach



            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section>
