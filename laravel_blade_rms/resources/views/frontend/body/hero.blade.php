@php
    use App\Models\HeroSection;
    
    $heroSection = HeroSection::where('visibility', true)->get();
    
	$user = Auth::user();
@endphp
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <ol class="carousel-indicators" id="hero-carousel-indicators">
                {{-- @foreach ($heroSection as $key => $section)
                    <li data-bs-target="#heroCarousel" data-bs-slide-to="{{ $key }}"
                        class="{{ $key == 0 ? 'active' : '' }}"></li>
                @endforeach --}}
            </ol>
            <div class="carousel-inner" role="listbox">
                @foreach ($heroSection as $key => $section)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}"
                        style="background-image: url('{{ asset($section->bg_image) }}');">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                @if ($section->id == 1)
                                    <h2 class="animate__animated animate__fadeInDown"><span>{{$user->app_name}}</span> Restaurant</h2>
                                @else
                                    <h2 class="animate__animated animate__fadeInDown">{{ $section->title }}</h2>
                                @endif
                                <p class="animate__animated animate__fadeInUp">{{ $section->description }}</p>
                                <div>
                                    <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our
                                        Menu</a>
                                    <a href="#book-a-table"
                                        class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
    </div>
</section>
