@php
    use App\Models\AboutSection;
    
    $aboutSection = AboutSection::where('visibility', true)->find(1);
    
@endphp
@if($aboutSection)
<section id="about" class="about">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 align-items-stretch video-box"
                        style='background-image: url("{{ asset($aboutSection->image) }}");'> <a
                            href="{{asset($aboutSection->video_url)}}" class="venobox play-btn mb-4"
                            data-vbtype="video" data-autoplay="true"></a> </div>
                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">
                        <div class="content">
                            <h3>{{$aboutSection->title}}<strong>{{$aboutSection->title_bold}}</strong></h3>
                            <p>{{$aboutSection->description_top}}</p>
                            <p class="fst-italic">{{$aboutSection->description_italic}}</p>
                            <ul>
                                <li><i class="bx bx-check-double"></i>{{$aboutSection->main_point_1}}</li>
                                <li><i class="bx bx-check-double"></i>{{$aboutSection->main_point_2}}</li>
                                <li><i class="bx bx-check-double"></i>{{$aboutSection->main_point_3}}</li>
                            </ul>
                            <p>{{$aboutSection->description_bottom}}</p>
                        </div>
                    </div>
                </div>
            </div>
</section>
@endif