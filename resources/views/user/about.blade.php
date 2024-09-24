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
                            <img src="{{ url('images/about achievements.svg') }}" height="400px" width="400px" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="">
                            <h3>Acheivements</h3><br>
                            <p class="w-100">
                                Congratulations on unlocking the "Mastering the Basics" achievement! By completing fundamental courses in mathematics, science, and language arts, you've built a strong foundation for advanced learning. This achievement signifies your commitment to understanding core concepts and lays the groundwork for more challenging subjects ahead. Keep up the excellent work, and continue to explore new horizons in your educational journey!
                            </p>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card border-primary mb-3" style="max-width: 18rem;">
                                        <div class="card-header text-white d-flex justify-content-center">
                                            <img src="{{ url('images/digital-identity.png') }}" height="50px" width="50px" alt="">
                                        </div>
                                        <div class="card-body text-primary">
                                            <h5 class="card-title text-center">1</h5>
                                            <p class="card-text text-center">You have completed your first course.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card border-success mb-3" style="max-width: 18rem;">
                                        <div class="card-header text-white  d-flex justify-content-center">
                                            <img src="{{ url('images/education.png') }}" height="50px" width="50px" alt="">
                                        </div>
                                        <div class="card-body text-success">
                                            <h5 class="card-title text-center">2</h5>
                                            <p class="card-text text-center">You have completed your second course.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card border-danger mb-3" style="max-width: 18rem;">
                                        <div class="card-header text-white d-flex justify-content-center">
                                            <img src="{{ url('images/trophy.png') }}" height="50px" width="50px" alt="">
                                        </div>
                                        <div class="card-body text-danger">
                                            <h5 class="card-title text-center">3</h5>
                                            <p class="card-text text-center">You have completed your third course.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        

        {{-- Our Team start  --}}    
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="fw-bold text-secondary text-decoration-underline">Meet Our Team</h2>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="card mb-3">
                                @foreach($teamMembers as $teamMember)
                                <img src="{{ asset('images/' . $teamMember->MemberImage) }}" class="card-img-top" alt="Team Image">
                                <div class="card-body">
                                    <h2 class="card-title text-center">{{ $teamMember->MemberName }}</h2>
                                    <p class="card-text fs-4 text-center">{{ $teamMember->MemberExperties }}</p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        {{-- Our Team end  --}}
        <hr>


            
        </div>
        </div>
        {{-- FAQ end --}}
        @include('layouts.footer')

    </x-app-layout>
    {{-- yahan maine script tag hata diya tou dropdown wala masla resolve hogaya --}}
</body>

</html>