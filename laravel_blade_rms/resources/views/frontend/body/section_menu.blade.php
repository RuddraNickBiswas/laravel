 @php
    $menuTitle  = App\Models\MenuSectionTitle::find(1);
     $menuTypes = App\Models\MenuType::where('visibility', true)->get();
     $menuItems = App\Models\MenuItems::with('menuType')
         ->whereHas('menuType', function ($query) {
             $query->where('visibility', true);
         })
         ->get();
 @endphp
 <section id="menu" class="menu">
     <div class="container">
         <div class="section-title">
             <h2>{{$menuTitle->title}}<span>  {{$menuTitle->title_colored}}</span></h2>
         </div>
         <div class="row">
             <div class="col-lg-12 d-flex justify-content-center">
                 <ul id="menu-flters">
                     <li data-filter="*" class="filter-active">Show All</li>

                     @foreach ($menuTypes as $menuType)
                         <li data-filter=".filter-{{ $menuType->id }}">{{ $menuType->name }}</li>
                     @endforeach
                 </ul>
             </div>
         </div>
         <div class="row menu-container">

             @foreach ($menuItems as $menuItem)
                 <div class="col-lg-6 menu-item filter-{{ $menuItem->menuType->id }}">
                     <div class="menu-content">
                         <a href="#">{{ $menuItem->name }}</a><span>${{ $menuItem->price }}</span>
                     </div>
                     <div class="menu-ingredients">
                         {{ $menuItem->description }}
                     </div>
                 </div>
             @endforeach
         </div>
     </div>
 </section>
