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
                    <div class="recent-order">
                        <h2 class="fs-4">Add Team Member</h2>
                        <!-- Button trigger modal -->
                        <button type="button" class="fw-bold fs-1 material-icons-sharp" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="background-color: white">
                        add
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Teacher</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form action="{{ route('admin.AdminTeacher.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('post')
                                    <div class="mb-3">
                                        <label for="MemberImage" class="form-label">Teacher Photo</label>
                                        <input type="file" id="MemberImage" name="MemberImage" class="form-control" accept="image/*" required>
                                    </div>
    
                                    <div class="mb-3">
                                        <label for="MemberName" class="form-label">Teacher Name</label>
                                        <input type="text" id="MemberName" name="MemberName" class="form-control" required>
                                    </div>
                                
                                    <div class="mb-3">
                                        <label for="MemberExperties" class="form-label">Teacher Experties</label>
                                        <input type="text" id="MemberExperties" name="MemberExperties" class="form-control" required>
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
                                    <th>id</th>
                                    <th>Member Image</th>
                                    <th>Member Name</th>
                                    <th>Member Experties</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($teamsMembers as $teamsMember)
                                <tr>
                                    <td>{{ $teamsMember->id }}</td>
                                    <td class="fs-6 d-flex justify-content-center">
                                        <img src="{{ asset('storage/upload/' . $teamsMember->MemberImage) }}" alt="Course Image" class="rounded-circle" style="height: 25px; width: 25px; object-fit: cover;">
                                    </td>
                                    <td class="fs-6">{{ $teamsMember->MemberName }}</td>
                                    <td class="fs-6">{{ $teamsMember->MemberExperties }}</td>
                                    <td class="fs-6">{{ $teamsMember->created_at }}</td>
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