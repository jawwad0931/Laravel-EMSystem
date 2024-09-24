<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/course.css">
</head>
<style>
    
</style>

<body>
    <x-app-layout>
        {{-- Navbar for user start--}}
        @include('layouts.topbar');
        {{-- Navbar for user end --}}
        
        {{-- here courses card show--}}
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="text-secondary my-3">New Courses Available Here</h4>
                </div>
                @foreach($courses as $course_fetch)
                <div class="col-md-3 mb-4">
                    <div class="card course-card shadow-sm border-0">
                        <div class="card-body">
                            <img src="{{ asset('images/'.$course_fetch->Course_image) }}" class="card-img-top" alt="">
                            <h5 class="card-title">{{ $course_fetch->Course_name }}</h5>
                            @if($course_fetch->Course_status == 'Available')
                            <span class="text-light bg-success px-4 py-1" style="border-radius: 30px;">{{ $course_fetch->Course_status }}</span>
                            @elseif($course_fetch->Course_status == 'Unavailable')
                                <span class="text-light bg-danger px-4 py-1" style="border-radius: 30px;">{{ $course_fetch->Course_status }}</span>
                            @elseif($course_fetch->Course_status == 'Upcoming')
                                <span class="text-light bg-warning px-4 py-1" style="border-radius: 30px;">{{ $course_fetch->Course_status }}</span>    
                            @else
                                <span class="text-light bg-warning px-4 py-1" style="border-radius: 30px;">{{ $course_fetch->Course_status }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <hr>
        {{-- here courses card end--}}


        {{-- Video course service start--}}
        <div class="container">
            <div class="row my-5">
                <div class="col-12">
                    <h4 class="text-secondary">Video Courses</h4>
                    <span>Working in process..............</span>
                    <div class="row">
                        <div class="col-md-6 border">One Vid</div>
                        <div class="col-md-6 border">Two Vid</div>
                    </div>
                </div>
            </div>
        </div>
          {{-- Video course service end--}}

        <!-- CSS for Hover Effect -->
        <style>
            .course-card {
                transition: transform 0.3s, box-shadow 0.3s;
                border-radius: 8px;
            }
        
            .course-card:hover {
                transform: translateY(-10px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
            }
        </style>
        {{-- here courses card show--}}


        {{-- Footer start--}}
        @include('layouts.footer')
        {{-- Footer end--}}

    </x-app-layout>
    {{-- yahan maine script tag hata diya tou dropdown wala masla resolve hogaya --}}
</body>

</html>