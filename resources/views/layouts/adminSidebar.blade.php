

<body class="">
    <!-- Sidebar (Aside) -->
    <div>
        <div class="">
            <!-- Logo section -->
            {{-- <img src="" alt="" /> --}}
            <h4>Student Management</h4>
        </div>

        <div class="close" id="close-btn">
            <span class="material-icons-sharp fs-6">close</span>
        </div>

        <div class="sidebar">
            <!-- Sidebar links -->
            <a href="{{ route('admin.dashboard') }}" class="active">
                <span class="material-icons-sharp fs-6">grid_view</span>
                <h3 class="fs-6">Dashboard</h3>
            </a>

            <a href="{{ route('admin.AdminRegisUsers.index') }}">
                <span class="material-icons-sharp fs-6">person_outline</span>
                <h3 class="fs-6">Users</h3>
            </a>

            <a href="{{ route('admin.AdminContact.index') }}">
                <span class="material-icons-sharp fs-6">mail_outline</span>
                <h3 class="fs-6">Contacts</h3>
            </a>

            <a href="{{ route('admin.AdminTeacher.index') }}">
                <span class="material-icons-sharp fs-6">diversity_3</span>
                <h3 class="fs-6">Teachers</h3>
            </a>

            <a href="{{ route('admin.AdminFAQ.index') }}">
                <span class="material-icons-sharp fs-6">quiz</span>
                <h3 class="fs-6">FAQ's</h3>
            </a>

            <a href="{{ route('admin.AdminCourseCategory.index') }}">
                <span class="material-icons-sharp fs-6">category</span>
                <h3 class="fs-6">Course Category</h3>
            </a>

            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <span class="material-icons-sharp fs-6">add</span>
                <h3 class="fs-6">Add Courses</h3>
            </a>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            {{-- Add course form --}}
                            <form action="{{ route('admin.dashboard.store') }}" method="POST" class="p-4" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="Course_image" class="form-label">Upload Course Image</label>
                                    <input type="file" id="Course_image" name="Course_image" class="form-control" accept="image/*" required>
                                </div>

                                <div class="mb-3">
                                    <label for="Course_name" class="form-label">Course Name</label>
                                    <input type="text" id="Course_name" name="Course_name" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="Course_status" class="form-label">Course Status</label>
                                    <select name="Course_status" id="Course_status" class="form-select">
                                        <option value="Unavailable">Unavailable</option>
                                        <option value="Upcoming">Upcoming</option>
                                        <option value="Available">Available</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <a href="{{ route('profile.edit') }}">
                <span class="material-icons-sharp fs-6">settings</span>
                <h3 class="fs-6">Profile Setting</h3>
            </a>

            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                @csrf
                <button class="btn btn-danger btn-sm" type="submit">
                    <i class="material-icons-sharp">logout</i> Logout
                </button>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
    {{-- yahan maine script tag hata diya tou dropdown wala masla resolve hogaya --}}
</body>
</html>