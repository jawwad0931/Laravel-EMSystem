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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@300;400;500;700;800;900&family=Pacifico&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet" />
</head>

<body class="">
    <x-app-layout>
        <div class="container">
            <aside>
                @include('layouts.adminSidebar');
            </aside>
        
            <main>
                <h1 class="fs-4">Dashboard</h1>
        
                <div class="insight">
                    <div class="sales">
                        <span class="material-icons-sharp fs-4">person_add</span>
                        <div class="middle">
                            <div class="left">
                                <h3 class="fs-6 my-2 text-secondary">Registered Users</h3>
                                <h1 class="fs-6 text-secondary">{{ $users }}</h1> 
                            </div>
                        </div>
                    </div>
        
                    <div class="expenses">
                        <span class="material-icons-sharp fs-4">app_registration</span>
                        <div class="middle">
                            <div class="left">
                                <h3 class="fs-6 my-2 text-secondary">New Forms</h3>
                                <h1 class="fs-6 text-secondary">{{$forms}}</h1>
                            </div>
                        </div>
                    </div>
        
                    <div class="income">
                        <span class="material-icons-sharp fs-4">contact_page</span>
                        <div class="middle">
                            <div class="left">
                                <h3 class="fs-6 my-2 text-secondary">Contacts</h3>
                                <h1 class="fs-6 text-secondary">{{$contacts}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="recent-order">
                    <h2 class="fs-4">Recent Courses</h2>
                    <table>
                        <thead>
                            <tr class="fs-6">
                                <th class="fs-6">Course Id</th>
                                <th class="fs-6">Course Image</th>
                                <th class="fs-6">Course Name</th>
                                <th class="fs-6">Course Status</th>
                                <th class="fs-6">Create Time</th>
                                <th class="fs-6"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($courses as $course)
                            <tr>
                                <td class="fs-6">{{ $course->id }}</td>
                                <td class="d-flex justify-content-center">
                                    {{-- yahan maine public file mai bhi kar sakhta tha -- }}
                                    {{-- lekin maine storage/app/upload ki file ka path define kiy controller mai --}}
                                    <img src="{{ asset('public/upload/' . $course->Course_image) }}" alt="Course Image" class="rounded-circle" style="height: 50px; width: 50px; object-fit: cover;">
                                </td>
                                <td class="fs-6">{{ $course->Course_name }}</td>
                                <td class="fs-6">{{ $course->Course_status }}</td>
                                <td class="fs-6">{{ $course->created_at }}</td>
                                <td class="fs-6 warning">
                                    <a href="{{ route('admin.AdminCourse.edit', $course->id) }}" class="material-icons-sharp fs-3">edit_note</a>
                                </td>
                                <td>
                                    <form action="{{ route('admin.dashboard.delete', $course->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE') 
                                        <button type="submit" class="material-icons-sharp fs-4 text-danger" id="btn-trash" onclick="return confirm('Are you sure you want to delete this course?');">delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach     
                        </tbody>
                    </table>
                </div>
            </main>
        
            <div class="right">
                <div class="top">
                    <button id="menu-btn">
                        <span class="material-icons-sharp fs-6">menu</span>
                    </button>
                    <div class="theme-toggler">
                        <span class="material-icons-sharp fs-6 active">light_mode</span>
                        <span class="material-icons-sharp fs-6">dark_mode</span>
                    </div>
        
                    <div class="profile">
                        <div class="info d-flex">
                            <span class="material-icons-sharp fs-4 mt-0 text-danger">admin_panel_settings</span>
                            <p class="fs-6">Hey, <b> {{ Auth::user()->name }}</b></p>
                            {{-- <small class="text-muted fs-6">Admin</small> --}}
                        </div>
                        <div class="profile-photo">
                            <img src="./images/profile.png" alt="" />
                        </div>
                    </div>
                </div>
        
                <div class="recent-updates">
                    <h2 class="fs-6">Users Messages</h2>
                    <div class="updates">
                        <div class="update">
                            <div class="profile-photo">
                                <img src="./images/profile.png" alt="" />
                            </div>
                            <div class="message">
                                <p>Messages Part pending</p>
                            </div>
                        </div>
                    </div>
                </div>
                        
        
            </div>
        </div>


        <script src="{{ asset('js/script.js') }}"></script>

    </x-app-layout>
    {{-- yahan maine script tag hata diya tou dropdown wala masla resolve hogaya --}}
</body>

</html>