 @php
     $eventSectionTitle = App\Models\EventSectionTitle::where('visibility', true)->find(1);
     $eventSection = App\Models\EventSection::get();
     
 @endphp
@if ($eventSectionTitle) 
     <section id="events" class="events">
         <div class="container">
    
             <div class="section-title">
                 <h2>{{ $eventSectionTitle->title_first }}<span> {{ $eventSectionTitle->title_first }}</span>
                     {{ $eventSectionTitle->title_middle }}</h2>
             </div>
    
             <div class="events-slider swiper">
                 <div class="swiper-wrapper">
    
                     @foreach ($eventSection as $event)
                         <div class="swiper-slide">
                             <div class="row event-item">
                                 <div class="col-lg-6">
                                     <img src="{{ asset($event->image) }}" class="img-fluid" alt="">
                                 </div>
                                 <div class="col-lg-6 pt-4 pt-lg-0 content">
                                     <h3>{{ $event->title }}</h3>
                                     <div class="price">
                                         <p><span>$ {{ $event->price }}</span></p>
                                     </div>
                                     <p class="fst-italic"> {{ $event->description_top }} </p>
                                     <ul>
                                         <li><i class="bi bi-check-circle"></i> {{ $event->point_1 }} </li>
                                         <li><i class="bi bi-check-circle"></i> {{ $event->point_2 }} </li>
                                         <li><i class="bi bi-check-circle"></i> {{ $event->point_3 }} </li>
                                     </ul>
                                     <p> {{ $event->description_bottom }} </p>
                                 </div>
                             </div>
                         </div><!-- End testimonial item -->
                     @endforeach
                 </div>
                 <div class="swiper-pagination"></div>
             </div>
    
         </div>
     </section>
@endif
