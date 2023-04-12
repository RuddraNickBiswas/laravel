@php
    $topBar = App\Models\TopBar::find(1);
@endphp
@if($topBar->visibility)
    <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
            <i class="bi bi-phone d-flex align-items-center"><span>{{$topBar->phone}}</span></i> <i
                class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>{{$topBar->open_hours}}</span></i>
        </div>
    </section>
@endif
