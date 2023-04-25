 @php
     $gallerySectionTitle = App\Models\GallerySectionTitle::find(1);
     $gallerys = App\Models\GallerySection::get();
 @endphp
 <section id="gallery" class="gallery">
     <div class="container-fluid">

         <div class="section-title">
             <h2> {{ $gallerySectionTitle->title_first }} <span> {{ $gallerySectionTitle->title_last }}</span></h2>
             <p>{{ $gallerySectionTitle->description }}</p>
         </div>

         <div class="row g-0">

             @foreach ($gallerys as $gallery)
                 <div class="col-lg-3 col-md-4">
                     <div class="gallery-item">
                         <a href="{{ asset($gallery->image) }}" class="gallery-lightbox">
                             <img src="{{ asset($gallery->image) }}" alt="" class="img-fluid">
                         </a>
                     </div>
                 </div>
             @endforeach

         </div>

     </div>
 </section>
