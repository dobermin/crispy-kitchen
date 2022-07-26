<x-main-layout>
    <x-slot name="title">
        Crispy Kitchen - Contact Page
    </x-slot>
    <x-slot name="container">

        <header class="site-header site-contact-header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12 mx-auto">
                        <h1 class="text-white">Say Hi</h1>

                        <strong class="text-white">We are happy to get in touch with you</strong>
                    </div>

                </div>
            </div>

            <div class="overlay"></div>
        </header>

        <section class="contact section-padding">
            <div class="container">
                <div class="row">

                    <div id="form" class="col-12">
                        <h2 class="mb-4">Leave a message</h2>
                    </div>

                    <div class="col-lg-6 col-12">
                        @if($errors)
                            @foreach($errors->all() as $error)
                                <p class="error">{{ $error }}</p>
                            @endforeach
                        @endif
                        {{--                        @if(session()->get('success'))--}}
                        {{--                                <p class="success">{{ session()->get('success') }}</p>--}}
                        {{--                        @endif--}}
                        <form class="custom-form contact-form row" action="{{ url()->current() }}" method="post"
                              role="form">
                            @csrf
                            <div class="col-lg-6 col-6">
                                <label for="contact_name" class="form-label">Full Name</label>

                                <input type="text" name="contact_name" id="contact_name" class="form-control"
                                       placeholder="Your Name" required value="{{ old('contact_name') }}">
                            </div>

                            <div class="col-lg-6 col-6">
                                <label for="contact_phone" class="form-label">Phone Number</label>

                                <input type="tel" name="contact_phone" id="contact_phone"
                                       pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control"
                                       placeholder="123-456-7890" value="{{ old('contact_phone') }}">
                            </div>

                            <div class="col-12">
                                <label for="contact_email" class="form-label">Email</label>

                                <input type="email" name="contact_email" id="contact_email" pattern="[^ @]*@[^ @]*"
                                       class="form-control" placeholder="Your Email" required=""
                                       value="{{ old('contact_email') }}">

                                <label for="contact_message" class="form-label">Message</label>

                                <textarea class="form-control" rows="5" id="contact_message" name="contact_message"
                                          placeholder="Your Message"></textarea>
                            </div>

                            <div class="col-lg-5 col-12 ms-auto">
                                <button name="send" type="submit" class="form-control">Send</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-4 col-12 mx-auto mt-lg-5 mt-4">

                        <h5>Weekdays</h5>

                        <div class="d-flex mb-lg-3">
                            <p>Monday to Friday</p>

                            <p class="ms-5">10:00 AM - 08:00 PM</p>
                        </div>

                        <h5>Weekends</h5>

                        <div class="d-flex">
                            <p>Saturday and Sunday</p>

                            <p class="ms-5">11:00 AM - 11:00 PM</p>
                        </div>
                    </div>

                    <div class="col-12">
                        <h4 class="mt-5 mb-4">121 Einstein Loop N, Bronx, NY 10475, United States</h4>

                        {{--                        <div class="google-map pt-3">--}}
                        {{--                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14920.891757756479!2d-73.83496372506556!3d40.8623107607295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c28cbc17f4a0c3%3A0x9ae0f1e804a817d!2s121%20Einstein%20Loop%20N%2C%20Bronx%2C%20NY%2010475%2C%20USA!5e0!3m2!1sen!2sth!4v1650470337727!5m2!1sen!2sth" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>--}}
                        {{--                        </div>--}}
                    </div>

                </div>
            </div>
        </section>

    </x-slot>
</x-main-layout>
