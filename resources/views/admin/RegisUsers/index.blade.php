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
                        <h2 class="fs-4">Registered Users</h2>
                        <table class="table">
                            <thead>
                                <tr class="fs-6">
                                    <th class="fs-6">Name</th>
                                    <th class="fs-6">Email</th>
                                    <th class="fs-6">Password</th>
                                    <th class="fs-6">Role</th>
                                    <th class="fs-6">Created At</th>
                                    <th class="fs-6">Updated At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td class="fs-6">{{ $user->name }}</td>
                                    <td class="fs-6">{{ $user->email }}</td>
                                    <td class="fs-6">{{ $user->password }}</td>
                                    <td class="fs-6">{{ $user->role }}</td>
                                    <td class="fs-6">{{ $user->created_at }}</td>
                                    <td class="fs-6">{{ $user->updated_at }}</td>
                                    <td class="fs-6">Update</td>
                                    <td class="fs-6">
                                        <form action="{{ route('admin.RegisUsers.delete', $user->id) }}" method="POST">
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