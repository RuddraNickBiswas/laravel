 <div class="sidebar-wrapper" data-simplebar="true">
     <div class="sidebar-header">
         <div>
             <img src="{{ asset('logo/logo.png') }}" class="logo-icon" alt="logo icon">
         </div>
         <div>
             <h4 class="logo-text">r n b</h4>
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
                     <i class="lni lni-indent-increase"></i>

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
                 <li> <a href="{{ route('fn.special.index') }}"><i class="bx bx-right-arrow-alt"></i>special all</a>
                 </li>

                 <li> <a href="{{ route('fn.special.create') }}"><i class="bx bx-right-arrow-alt"></i>special
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
                 <li> <a href="{{ route('fn.event.index') }}"><i class="bx bx-right-arrow-alt"></i>all events</a>
                 </li>

                 <li> <a href="{{ route('fn.event.create') }}"><i class="bx bx-right-arrow-alt"></i> event
                         create</a>
                 </li>
             </ul>
         </li>

         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon">
                     <i class="lni lni-bookmark"></i>
                 </div>
                 <div class="menu-title">book table section</div>
             </a>
             <ul>
                 <li> <a href="{{ route('fn.book_table_title.edit') }}"><i class="bx bx-right-arrow-alt"></i>main title
                         edit</a>
                 </li>

                 <li> <a href="{{ route('fn.book_table.index') }}"><i class="bx bx-right-arrow-alt"></i>book table
                         request</a>
                 </li>
             </ul>
         </li>

         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon">
                     <i class="lni lni-gallery"></i>
                 </div>
                 <div class="menu-title">gallery section</div>
             </a>
             <ul>
                 <li> <a href="{{ route('fn.gallery_title.edit') }}"><i class="bx bx-right-arrow-alt"></i>main title
                         edit</a>
                 </li>
                 <li> <a href="{{ route('fn.gallery.index') }}"><i class="bx bx-right-arrow-alt"></i>all gallery</a>
                 </li>

                 <li> <a href="{{ route('fn.gallery.create') }}"><i class="bx bx-right-arrow-alt"></i> gallery
                         create</a>
                 </li>
             </ul>
         </li>


         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon">
                     <i class="lni lni-crown"></i>
                 </div>
                 <div class="menu-title">chefs section</div>
             </a>
             <ul>
                 <li> <a href="{{ route('fn.chefs_title.edit') }}"><i class="bx bx-right-arrow-alt"></i>main title
                         edit</a>
                 </li>
                 <li> <a href="{{ route('fn.chefs.index') }}"><i class="bx bx-right-arrow-alt"></i>all chefs</a>
                 </li>

                 <li> <a href="{{ route('fn.chefs.create') }}"><i class="bx bx-right-arrow-alt"></i> chefs
                         create</a>
                 </li>
             </ul>
         </li>



         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon">
                     <i class="lni lni-star-half"></i>
                 </div>
                 <div class="menu-title">testimonial section</div>
             </a>
             <ul>
                 <li> <a href="{{ route('fn.testimonials.index') }}"><i class="bx bx-right-arrow-alt"></i>all
                         testimonials</a>
                 </li>

                 <li> <a href="{{ route('fn.testimonials.create') }}"><i class="bx bx-right-arrow-alt"></i>
                         testimonial
                         create</a>
                 </li>
             </ul>
         </li>

         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon">
                     <i class="lni lni-pencil-alt"></i>
                 </div>
                 <div class="menu-title">contact section</div>
             </a>
             <ul>
                 <li> <a href="{{ route('fn.contact_title.edit') }}"><i class="bx bx-right-arrow-alt"></i>main title
                         edit</a>
                 </li>
                 <li> <a href="{{ route('fn.contact.index') }}"><i class="bx bx-right-arrow-alt"></i>all contacts</a>
                 </li>

                 <li> <a href="{{ route('fn.contact.create') }}"><i class="bx bx-right-arrow-alt"></i> contact
                         create</a>
                 </li>
                 <li> <a href="{{ route('fn.contact_message.index') }}"><i class="bx bx-right-arrow-alt"></i>Contact Message</a>
                 </li>
             </ul>
         </li>



         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon">
                     <i class="lni lni-checkmark-circle"></i>
                 </div>
                 <div class="menu-title">Footer section</div>
             </a>
             <ul>
                 <li> <a href="{{ route('fn.footer.edit') }}"><i class="bx bx-right-arrow-alt"></i>footer edit</a>
                 </li>
             </ul>
         </li>

     </ul>


     <!--end navigation-->
 </div>
