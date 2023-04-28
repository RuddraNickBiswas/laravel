@php
    use App\Models\WhyUsSectionTitle;


    use App\Models\WhyUsSection;
    
    $whyUsSectionTitle = WhyUsSectionTitle::where('visibility', true)->find(1);


    $whyUsSection = WhyUsSection::where('visibility', true)->get();


@endphp
@if ($whyUsSectionTitle) 
    <section id="why-us" class="why-us">
        <div class="container">
            <div class="section-title">
                <h2>{{$whyUsSectionTitle->title}}<span>   {{$whyUsSectionTitle->title_colored}}</span></h2>
                <p>{{$whyUsSectionTitle->description}}</p>
            </div>
    
    
             <div class="row">
                @foreach($whyUsSection as $index => $item)
                    <div class="col-lg-4 mt-4">
                        <div class="box">
                            <span>{{ str_pad($index+1, 2, '0', STR_PAD_LEFT) }}</span>
                            <h4>{{ $item->title }}</h4>
                            <p>{{ $item->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
    
        </div>
    </section>
@endif
