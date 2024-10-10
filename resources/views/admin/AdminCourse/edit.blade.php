
{{-- hamesha yaad rakhna update karne ke liye yeh error ki condition chalana --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.AdminCourse.update', $course->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT') <!-- Use PUT method for updating -->

    <!-- Course Image -->
    <div class="form-group">
        <label for="Course_image">Course Image</label>
        <input type="file" name="Course_image" id="Course_image" class="form-control" accept="image/*">
        <small>Current Image: <img src="{{ asset('path_to_images/' . $course->Course_image) }}" alt="Course Image" width="100"></small>
    </div>

    <!-- Course Name -->
    <div class="form-group">
        <label for="Course_name">Course Name</label>
        <input type="text" name="Course_name" id="Course_name" class="form-control" value="{{ $course->Course_name }}" required>
    </div>


    <!-- Course Status -->
    <div class="form-group">
        <label for="Course_status">Course Status</label>
        <select name="Course_status" id="Course_status" class="form-control">
            <option value="Unavailable" {{ $course->Course_status == 'Unavailable' ? 'selected' : '' }}>Unavailable</option>
            <option value="Upcoming" {{ $course->Course_status == 'Upcoming' ? 'selected' : '' }}>Upcoming</option>
            <option value="Available" {{ $course->Course_status == 'Available' ? 'selected' : '' }}>Available</option>
        </select>
    </div>

    <!-- Created At (optional if it's editable) -->
    <div class="form-group">
        <label for="created_at">Created At</label>
        <input type="datetime-local" name="created_at" id="created_at" class="form-control" value="{{ $course->created_at->format('Y-m-d\TH:i') }}">
    </div>

    <button type="submit" class="btn btn-primary">Update Course</button>
</form>
