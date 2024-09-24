{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .card-header {
        cursor: pointer;
    }

    .plus-icon {
        cursor: pointer;
        font-size: 1.5rem;
    }

    .collapse-content {
        transition: max-height 0.3s ease-out;
    }

    /* for quotes */
    .carousel-item {
        height: 200px;
        /* Adjust height as needed */
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .quote-text {
        font-size: 1.25rem;
        /* Adjust font size as needed */
        font-style: italic;
        text-align: center;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
    }
</style>

<body>
    <x-app-layout>
        {{-- Navbar for user start--}}
        @include('layouts.topbar');
        {{-- Navbar for user end --}}
        <!-- Main Content -->
        <div class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="">
                            <h1 class="card-title pl-3 py-5">Enhance skills, empower <br />student journey.</h1>
                            <button class="btn btn-danger">Get Started</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="">
                            <img src="{{ url('images/header.svg') }}" height="400px" width="400px" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            {{-- category start --}}
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <h3>Categories</h3>
                            <p>Explore various categories that cater to your learning needs. Dive into the tech world,
                                master new skills, and shape your future with us!</p>
                            <button class="btn btn-light">View Courses</button>
                        </div>

                        @foreach($courseCategories as $category)
                        <div class="col-2 d-flex justify-content-end">
                            <!-- Card -->
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ asset('images/' . $category->CourseIcon) }}" alt="{{ $category->CourseName }}"
                                        class="img-fluid mb-2" height="50px" width="50px">
                                    </div>  
                                    <h5 class="text-center">{{ $category->CourseName }}</h5>
                                    <p class="card-text mb-0 text-center">{{ $category->CourseDescription }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
            {{-- category end --}}
            {{-- FAQ start --}}
            <div class="container py-5">
                <div class="container py-5">
                    <h1 class="mb-4">Frequently Asked Questions</h1>
                    <div class="accordion" id="faqAccordion">
                        @foreach($faqs as $faq)
                        <div class="card my-3">
                            <div class="card-header d-flex justify-content-between align-items-center"
                                id="heading{{ $faq->id }}">
                                <h5 class="mb-0">{{ $faq->FAQ_Question }}</h5>
                                <span class="plus-icon" data-bs-toggle="collapse"
                                    data-bs-target="#collapse{{ $faq->id }}" aria-expanded="true"
                                    aria-controls="collapse{{ $faq->id }}">+</span>
                            </div>
                            <div id="collapse{{ $faq->id }}" class="collapse" aria-labelledby="heading{{ $faq->id }}"
                                data-bs-parent="#faqAccordion">
                                <div class="card-body">
                                    {{ $faq->FAQ_Answer }}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            {{-- yahan faq end ho raha hai --}}

            
        </div>
        </div>
        {{-- FAQ end --}}
        {{-- Quotes section start --}}
        <div class="container py-5">
            <h2 class="mb-4">Famous Quotes for students</h2>
            <div id="quoteCarousel" class="carousel slide">
                <div class="carousel-inner">
                    <!-- Quote 1 -->
                    <div class="carousel-item active">
                        <div class="quote-text">
                            "The only way to do great work is to love what you do." - Steve Jobs
                        </div>
                    </div>
                    <!-- Quote 2 -->
                    <div class="carousel-item">
                        <div class="quote-text">
                            "Success is not the key to happiness. Happiness is the key to success." - Albert Schweitzer
                        </div>
                    </div>
                    <!-- Quote 3 -->
                    <div class="carousel-item">
                        <div class="quote-text">
                            "In the end, we will remember not the words of our enemies, but the silence of our friends."
                            - Martin Luther King Jr.
                        </div>
                    </div>
                    <!-- Quote 4 -->
                    <div class="carousel-item">
                        <div class="quote-text">
                            "The best way to predict your future is to create it." - Peter Drucker
                        </div>
                    </div>
                </div>
                <!-- Carousel Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#quoteCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#quoteCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        {{-- Quotes section end --}}
        @include('layouts.footer')

    </x-app-layout>
    {{-- yahan maine script tag hata diya tou dropdown wala masla resolve hogaya --}}
</body>

</html>