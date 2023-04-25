 @php
     $contactTitle = App\Models\ContactSectionTitle::find(1);
     $contacts = App\Models\ContactSection::where('visibility', true)->get();
 @endphp

<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2><span> {{ $contactTitle->title_first }} </span>    {{ $contactTitle->title_last }} </h2>
            <p> {{ $contactTitle->description }} </p>
        </div>
    </div>

    <div class="map">
        <iframe style="border:0; width: 100%; height: 350px;"
            src="{{ $contactTitle->g_map_link }}  "
            frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="container mt-5">

        <div class="info-wrap">
            <div class="row">


           @foreach ($contacts as $contact) 
                 <div class="col-lg-3 col-md-6 info">
                     <i class="bi bi-geo-alt"></i>
                     <h4> {{ $contact->title }} :</h4>
                     <p> {{ $contact->first_line }}  <br> {{ $contact->second_line }} </p>
                 </div>
           @endforeach

            </div>
        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
                <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                        required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                        required>
                </div>
            </div>
            <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
        </form>

    </div>
</section>
