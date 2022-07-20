<x-main-layout>
    <x-slot name="title">
        About Crispy Kitchen HTML Template
    </x-slot>
    <x-slot name="container">
        <header class="site-header site-about-header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12 mx-auto">
                        <h1 class="text-white">Kitchen's Story</h1>

                        <strong class="text-white">this is how our kitchen evolved in new digital era</strong>
                    </div>

                </div>
            </div>

            <div class="overlay"></div>
        </header>
        <section class="about section-padding bg-white">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-2">
                        <h4 class="mb-3">Crispy Kitchen is the latest Bootstrap 5 HTML template provided by Tooplate
                            website.</h4>

                        <a href="{{ route('news') }}" class="custom-btn btn btn-dark mt-3">Check out News</a>

                        <a href="{{ route('contacts') }}" class="custom-btn btn btn-danger mt-3 ms-3">Say Hi</a>
                    </div>

                    <div class="col-lg-6 col-12">

                        <p>Since this website template is 100% free to use, you can edit and apply it for your
                            commercial restaurant websites. There are 6 HTML pages included in this template. Please
                            <strong>click "Reservation" button</strong> on the top right to see the pop-up reservation
                            form.</p>

                        <p>You are NOT allowed to redistribute the template ZIP file on any template donwnload website.
                            Please <a href="https://www.tooplate.com/contact" target="_blank">contact us</a> for more
                            information.</p>

                    </div>

                </div>
            </div>
        </section>
        <section class="about section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h2 class="mb-5">Team Members</h2>
                    </div>
                    @foreach($team as $person)
                        <div class="col-lg-4 col-12">
                            <div class="team-thumb">
                                <img src="images/team/{{ $person->img }}"
                                     class="img-fluid team-image" alt="{{ $person->title }}">

                                <div class="team-info">
                                    <h4 class="mt-3 mb-0">{{ $person->name }}</h4>

                                    <p>{{ $person->position }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="newsletter section-padding bg-white">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <img src="images/charles-deluvio-FdDkfYFHqe4-unsplash.jpg" class="img-fluid newsletter-image"
                             alt="">
                    </div>

                    <div id="subscribe" class="col-lg-6 col-12 d-flex align-items-center mt-5 mt-lg-0 mx-auto">
                        <div class="subscribe-form-wrap">
                            <h4 class="mb-0">Our Newsletter</h4>

                            <p>The food news every day</p>

                            <form class="custom-form subscribe-form mt-4" role="form" method="post"
                                  action="{{ url()->current() }}">
                                @csrf
                                @if($errors->any)
                                    @foreach($errors->all() as $message)
                                        <p class="error">{{ $message }}</p>
                                    @endforeach
                                @endif
                                <label for="email"></label><input type="email" name="email" id="email"
                                                                  pattern="[^ @]*@[^ @]*"
                                                                  class="form-control" placeholder="Your email address"
                                                                  required="" value="{{ old('email') }}">

                                <button type="submit" class="form-control mb-3" id="subscribe">Subscribe</button>

                                <small>By signing up, you agree to our Privacy Notice and the data policy</small>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </x-slot>
</x-main-layout>
