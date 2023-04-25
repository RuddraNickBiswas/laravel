 @php
     $footer = App\Models\FooterSection::where('visibility', true)->find(1);
 @endphp
 @if ($footer)
     <footer id="footer">
         <div class="container">
             <h3> {{ $footer->title }} </h3>
             <p> {{ $footer->description }} </p>
             <div class="social-links">

                 @if ($footer->twitter)
                     <a href="{{ $footer->twitter }}" class="twitter" ><i class="bx bxl-twitter"></i></a>
                 @endif
                 @if ($footer->facebook)
                     <a href="{{ $footer->facebook }}"  class="facebook"><i class="bx bxl-facebook"></i></a>
                 @endif
                 @if ($footer->instagram)
                     <a href="{{ $footer->instagram }}"  class="instagram"><i class="bx bxl-instagram"></i></a>
                 @endif
                 @if ($footer->skype)
                     <a href="{{ $footer->instagram }}" class="google-plus" ><i class="bx bxl-skype"></i></a>
                 @endif
                 @if ($footer->linkedin)
                     <a href="{{ $footer->linkedin }}"  class="linkedin"><i class="bx bxl-linkedin"></i></a>
                 @endif
      
             </div>
             <div class="copyright">
                 &copy; {{ $footer->cr_title }}
             </div>
             <div class="credits">

                 Developed by <a href="#"> {{ $footer->cr_by }} </a>
             </div>
         </div>
     </footer>
 @endif
