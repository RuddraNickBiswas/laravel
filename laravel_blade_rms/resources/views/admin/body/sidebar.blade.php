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

         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon">
                     <i class="fadeIn animated bx bx-comment-check"></i>
                 </div>
                 <div class="menu-title">Why Us Section</div>
             </a>
             <ul>
                 <li> <a href="{{ route('fn.why_us_title.edit') }}"><i class="bx bx-right-arrow-alt"></i>Title Edit</a>
                 </li>
                 <li> <a href="{{ route('fn.why_us') }}"><i class="bx bx-right-arrow-alt"></i>Why Us table</a>
                 </li>
             </ul>
         </li>

         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon">
                     <i class="fadein animated bx bx-food-menu"></i>
                 </div>
                 <div class="menu-title">menu section</div>
             </a>
             <ul>
                 <li> <a href="{{ route('fn.menu_title.edit') }}"><i class="bx bx-right-arrow-alt"></i>main title
                         edit</a>
                 </li>
                 <li> <a href="{{ route('fn.menu_type') }}"><i class="bx bx-right-arrow-alt"></i>menu type</a>
                 </li>

                 <li> <a href="{{ route('fn.menu_type.create') }}"><i class="bx bx-right-arrow-alt"></i>menu type
                         create</a>
                 </li>

                 <li> <a href="{{ route('fn.menu_item') }}"><i class="bx bx-right-arrow-alt"></i>menu items</a>
                 </li>
                 <li> <a href="{{ route('fn.menu_item.create') }}"><i class="bx bx-right-arrow-alt"></i>create menu
                         items</a>
                 </li>
             </ul>
         </li>



         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon">
                     <i class="lni lni-pointer-right"></i>
                 </div>
                 <div class="menu-title">special section</div>
             </a>
             <ul>
                 <li> <a href="{{ route('fn.special_title.edit') }}"><i class="bx bx-right-arrow-alt"></i>main title
                         edit</a>
                 </li>
                 <li> <a href="{{ route('fn.menu_type') }}"><i class="bx bx-right-arrow-alt"></i>menu type</a>
                 </li>

                 <li> <a href="{{ route('fn.menu_type.create') }}"><i class="bx bx-right-arrow-alt"></i>menu type
                         create</a>
                 </li>

                 <li> <a href="{{ route('fn.menu_item') }}"><i class="bx bx-right-arrow-alt"></i>menu items</a>
                 </li>
                 <li> <a href="{{ route('fn.menu_item.create') }}"><i class="bx bx-right-arrow-alt"></i>create menu
                         items</a>
                 </li>
             </ul>
         </li>



         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon">
                    <i class="fadeIn animated bx bx-calendar-star"></i>
                 </div>
                 <div class="menu-title">event section</div>
             </a>
             <ul>
                 <li> <a href="{{ route('fn.event_title.edit') }}"><i class="bx bx-right-arrow-alt"></i>main title
                         edit</a>
                 </li>
                 <li> <a href="{{ route('fn.menu_type') }}"><i class="bx bx-right-arrow-alt"></i>menu type</a>
                 </li>

                 <li> <a href="{{ route('fn.menu_type.create') }}"><i class="bx bx-right-arrow-alt"></i>menu type
                         create</a>
                 </li>

                 <li> <a href="{{ route('fn.menu_item') }}"><i class="bx bx-right-arrow-alt"></i>menu items</a>
                 </li>
                 <li> <a href="{{ route('fn.menu_item.create') }}"><i class="bx bx-right-arrow-alt"></i>create menu
                         items</a>
                 </li>
             </ul>
         </li>
     </ul>
     <!--end navigation-->
 </div>
