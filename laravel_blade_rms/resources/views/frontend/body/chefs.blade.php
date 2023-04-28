 @php
     $chefsSectionTitle = App\Models\ChefsSectionTitle::where('visibility', true)->find(1);
     $chefs = App\Models\Chefs::where('visibility', true)->get();
 @endphp

@if ($chefsSectionTitle) 
     <section id="chefs" class="chefs">
         <div class="container">
    
             <div class="section-title">
                 <h2> {{ $chefsSectionTitle->title_first }} <span> {{ $chefsSectionTitle->title_last }}</span></h2>
                 <p> {{ $chefsSectionTitle->description }}</p>
             </div>
    
             <div class="row">
    
                 @foreach ($chefs as $chef)
                     <div class="col-lg-4 col-md-6">
                         <div class="member">
                             <div class="pic"><img src="{{ asset($chef->image) }}" class="img-fluid" alt=""></div>
                             <div class="member-info">
                                 <h4>{{ $chef->name }}</h4>
                                 <span>{{ $chef->post }}</span>
                                 <div class="social">
                                     @if ($chef->twitter)
                                         <a href="{{ $chef->twitter }}"><i class="bi bi-twitter"></i></a>
                                     @endif
                                     @if ($chef->facebook)
                                         <a href="{{ $chef->facebook }}"><i class="bi bi-facebook"></i></a>
                                     @endif
                                     @if ($chef->instagram)
                                         <a href="{{ $chef->instagram }}"><i class="bi bi-instagram"></i></a>
                                     @endif
                                     @if ($chef->linkedin)
                                         <a href="{{ $chef->linkedin }}"><i class="bi bi-linkedin"></i></a>
                                     @endif
                                 </div>
                             </div>
                         </div>
                     </div>
                 @endforeach
    
    
    
    
             </div>
    
         </div>
     </section>
@endif
