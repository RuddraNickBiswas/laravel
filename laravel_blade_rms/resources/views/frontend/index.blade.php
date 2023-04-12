@extends('frontend.frontend_master')

@section('frontend')
    <!-- ======= Top Bar ======= -->
    @include('frontend.body.topbar')
    <!-- ======= Header ======= -->
    @include('frontend.body.header')
    <!-- End Header -->
    <!-- ======= Hero Section ======= -->
    @include('frontend.body.hero')
    <!-- End Hero -->
    <main id="main">
        <!-- ======= About Section ======= -->
        @include('frontend.body.about')

        <!-- End About Section -->
        <!-- ======= Whu Us Section ======= -->
        @include('frontend.body.why_us')
        <!-- End Whu Us Section -->
        <!-- ======= Menu Section ======= -->
        @include('frontend.body.section_menu')
        <!-- End Menu Section -->

        <!-- ======= Specials Section ======= -->
        @include('frontend.body.specials')
        <!-- End Specials Section -->

        <!-- ======= Events Section ======= -->
        @include('frontend.body.events')
        <!-- End Events Section -->

        <!-- ======= Book A Table Section ======= -->
        @include('frontend.body.book_table')
        <!-- End Book A Table Section -->

        <!-- ======= Gallery Section ======= -->

        @include('frontend.body.gallery')
        <!-- End Gallery Section -->

        <!-- ======= Chefs Section ======= -->

        @include('frontend.body.chefs')
        <!-- End Chefs Section -->

        <!-- ======= Testimonials Section ======= -->

        @include('frontend.body.testimonials')
        <!-- End Testimonials Section -->

        <!-- ======= Contact Section ======= -->
        @include('frontend.body.contact')
        <!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->

    @include('frontend.body.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
@endsection
