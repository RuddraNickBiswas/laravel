@php
    $bookTableTitle = App\Models\BookTableSectionTitle::where('visibility', true)->find(1);
@endphp
@if ($bookTableTitle)
    <section id="book-a-table" class="book-a-table">
        <div class="container">

            <div class="section-title">
                <h2>{{ $bookTableTitle->title_first }} <span>{{ $bookTableTitle->title_last }}</span></h2>
                <p> {{ $bookTableTitle->description }} </p>
            </div>

            <form action="{{ route('fn.book_table.store') }}" method="post" role="form" class="php-email-form"  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-4 col-md-6 form-group">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            id="name" placeholder="Your Name" data-rule="minlen:4"
                            data-msg="Please enter at least 4 chars">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            id="email" placeholder="Your Email" data-rule="email"
                            data-msg="Please enter a valid email">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
                            id="phone" placeholder="Your Phone" data-rule="minlen:4"
                            data-msg="Please enter at least 4 chars">
                        @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3">
                        <input type="text" name="date" class="form-control @error('date') is-invalid @enderror"
                            id="date" placeholder="Date" data-rule="minlen:4"
                            data-msg="Please enter at least 4 chars">
                        @error('date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3">
                        <input type="text" class="form-control @error('time') is-invalid @enderror" name="time"
                            id="time" placeholder="Time" data-rule="minlen:4"
                            data-msg="Please enter at least 4 chars">
                        @error('time')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3">
                        <input type="number" class="form-control @error('people') is-invalid @enderror" name="people"
                            id="people" placeholder="# of people" data-rule="minlen:1"
                            data-msg="Please enter at least 1 chars">
                        @error('people')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="5"
                        placeholder="Message"></textarea>
                    @error('message')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your booking request was sent. We will call back or send an Email to
                        confirm your reservation. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

        </div>
    </section>
@endif
