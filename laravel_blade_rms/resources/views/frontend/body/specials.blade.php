@php
    $specialSectionTitle = App\Models\SpecialSectionTitle::find(1);
    $specials = App\Models\SpecialSection::get();
@endphp
<section id="specials" class="specials">
    <div class="container">

        <div class="section-title">
            <h2>{{$specialSectionTitle->title_first}}<span>  {{$specialSectionTitle->title_last}}</span></h2>
            <p>{{$specialSectionTitle->description}}</p>
        </div>


         <div class="row">
        <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
                @foreach($specials as $key => $special)
                    <li class="nav-item">
                        <a class="nav-link {{$key==0?'active show':''}}" data-bs-toggle="tab" href="#tab-{{$key+1}}">{{$special->tab_name}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
                @foreach($specials as $key => $special)
                    <div class="tab-pane {{$key==0?'active show':''}}" id="tab-{{$key+1}}">
                        <div class="row">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <h3>{{$special->title}}</h3>
                                <p class="fst-italic">{{$special->title_italic}}</p>
                                <p>{{$special->description}}</p>
                            </div>
                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <img src="{{ asset($special->image) }}" alt="{{$special->title}}" class="img-fluid">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    </div>
</section>
