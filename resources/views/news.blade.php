<x-main-layout>
    <x-slot name="title">
        Crispy Kitchen - News Section
    </x-slot>
    <x-slot name="container">

        <header class="site-header site-news-header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12 mx-auto">
                        <h1 class="text-white">News &amp; Events</h1>

                        <strong class="text-white">our latest updates, news, events and special promotions</strong>
                    </div>

                </div>
            </div>

            <div class="overlay"></div>
        </header>

        <section class="news section-padding bg-white">
            <div class="container">
                <div class="row">

                    <h2 class="mb-lg-5 mb-4">Latest Updates</h2>

                    @include('layouts.featured', ['features'=>$features])
                </div>
            </div>
        </section>

        <section class="news section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h2 class="mb-lg-5 mb-4">News &amp; Events</h2>
                    </div>

                    @include('layouts.events', ['events'=>$events])

                </div>
            </div>
        </section>

    </x-slot>
</x-main-layout>
