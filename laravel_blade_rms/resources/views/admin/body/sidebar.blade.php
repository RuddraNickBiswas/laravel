 <div class="sidebar-wrapper" data-simplebar="true">
     <div class="sidebar-header">
         <div>
             <img src="{{ asset('backend/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
         </div>
         <div>
             <h4 class="logo-text">Rukada</h4>
         </div>
         <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
         </div>
     </div>
     <!--navigation-->
     <ul class="metismenu" id="menu">
         <li>
             <a href="{{ route('admin.profile') }}">
                 <div class="parent-icon">
                     <i class="lni lni-user"></i>

                 </div>
                 <div class="menu-title">User Profile</div>
             </a>
         </li>
         <li>
             <a href="{{ route('fn.topbar.edit') }}">
                 <div class="parent-icon">
                     <i class="lni lni-notepad"></i>
                 </div>
                 <div class="menu-title">TopBar Contact</div>
             </a>
         </li>
         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon">
                     <i class="fadeIn animated bx bx-landscape"></i>
                 </div>
                 <div class="menu-title">Hero Slider</div>
             </a>
             <ul>
                 <li> <a href="{{ route('fn.hero.show') }}"><i class="bx bx-right-arrow-alt"></i>All Sliders</a>
                 </li>
                 <li> <a href="{{ route('fn.hero.create') }}"><i class="bx bx-right-arrow-alt"></i>Add Sliders</a>
                 </li>
             </ul>
         </li>

         <li>
             <a href="{{ route('fn.about.edit') }}">
                 <div class="parent-icon">
                     <i class="lni lni-radio-button"></i>

                 </div>
                 <div class="menu-title">About Section</div>
             </a>
         </li>


     </ul>
     <!--end navigation-->
 </div>
