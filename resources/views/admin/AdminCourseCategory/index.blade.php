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
        <div class="container-fluid" style="width: 90%">
            <div class="row d-flex justify-content-center">
                <!-- Sidebar (Aside) -->
                <aside class="col-md-2">
                    @include('layouts.adminSidebar');
                </aside>
        
                <!-- Main content -->
                <main class="col-md-9">
                    <div class="">
                        <h2 class="fs-4">Registered Users</h2>
                        <!-- Button trigger modal -->
                        <button type="button" class="fw-bold fs-1 material-icons-sharp" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="background-color: white">
                            add
                        </button>
    
                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New Course Category</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        @if ($errors->any()){
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>    
                                        }
                                        @endif
                                        <form action="{{ route('admin.AdminCourseCategory.store') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('post')
                                            <div class="mb-3">
                                                <label for="CourseIcon" class="form-label">Course Image</label>
                                                <input type="file" id="CourseIcon" name="CourseIcon" class="form-control" required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="CourseName" class="form-label">Course Name</label>
                                                <input type="text" id="CourseName" name="CourseName" class="form-control" required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="CourseDescription" class="form-label">Course Description</label>
                                                <input type="text" id="CourseDescription" name="CourseDescription" class="form-control" required>
                                            </div>
                                        
                                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Understood</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        <table class="table">
                            <thead>
                                <tr class="fs-6">
                                    <th class="fs-6">Course Logo</th>
                                    <th class="fs-6">Course Name</th>
                                    <th class="fs-6">Course Description</th>
                                    <th class="fs-6">Created At</th>
                                    <th class="fs-6">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($course_categories as $course_category)
                                    <tr>
                                        {{-- <img src="{{ dd(asset('storage/upload' . $course_category->CourseIcon)) }}" alt="Course Icon"> --}}
                                        <td>
                                            <img src="{{ asset('course_category/' . $course_category->CourseIcon) }}" alt="Course Icon" class="rounded-circle" style="height: 25px; width: 25px; object-fit: cover;">
                                        </td>
                                        <td>{{ $course_category->CourseName }}</td>
                                        <td>{{ $course_category->CourseDescription }}</td>
                                        <td>{{ $course_category->created_at }}</td>
                                        <td>
                                            <form action="{{ route('admin.AdminCourseCategory.delete', $course_category->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="material-icons-sharp fs-4 text-danger" id="btn-trash"
                                                    onclick="return confirm('Are you sure you want to delete this user?');">
                                                    delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </main>
            </div>
        </div>

     

        <script src="{{ asset('js/script.js') }}"></script>

    </x-app-layout>
    {{-- yahan maine script tag hata diya tou dropdown wala masla resolve hogaya --}}
</body>

</html>