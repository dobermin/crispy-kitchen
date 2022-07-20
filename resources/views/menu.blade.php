<x-main-layout>
    <x-slot name="title">
        Crispy Kitchen Menu
    </x-slot>
    <x-slot name="container">

        <header class="site-header site-menu-header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12 mx-auto">
                        <h1 class="text-white">Our Menus</h1>

                        <strong class="text-white">Perfect for all Breakfast, Lunch and Dinner</strong>
                    </div>

                </div>
            </div>

            <div class="overlay"></div>
        </header>

        <section class="menu section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h2 class="mb-lg-5 mb-4">Breakfast Menu</h2>
                    </div>

                    @include('layouts.dish', ['dishes'=>$breakfasts])
                </div>
            </div>
        </section>

        <section class="menu section-padding bg-white">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h2 class="mb-lg-5 mb-4">Lunch Menu</h2>
                    </div>
                    @include('layouts.dish', ['dishes'=>$lunches])
                </div>
            </div>
        </section>

        <section class="menu section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h2 class="mb-lg-5 mb-4">Dinner Menu</h2>
                    </div>

                    @include('layouts.dish', ['dishes'=>$dinners])
                </div>
            </div>
        </section>

    </x-slot>
</x-main-layout>
