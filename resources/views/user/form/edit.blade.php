<form action="{{ route('form.update', $form->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- Hidden method to simulate a PUT request -->
    @method('POST')

    <div class="form-group">
        <label for="first_name">First Name</label>
        <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name', $form->first_name) }}" required>
    </div>

    <div class="form-group">
        <label for="last_name">Last Name</label>
        <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name', $form->last_name) }}" required>
    </div>

    <div class="form-group">
        <label for="father_name">Father's Name</label>
        <input type="text" class="form-control" id="father_name" name="father_name" value="{{ old('father_name', $form->father_name) }}" required>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $form->email) }}" required>
    </div>

    <div class="form-group">
        <label for="class">Class</label>
        <input type="text" class="form-control" id="class" name="class" value="{{ old('class', $form->class) }}" required>
    </div>

    <div class="form-group">
        <label for="school_name">School Name</label>
        <input type="text" class="form-control" id="school_name" name="school_name" value="{{ old('school_name', $form->school_name) }}" required>
    </div>

    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $form->phone) }}" required>
    </div>

    <div class="form-group">
        <label for="city">City</label>
        <input type="text" class="form-control" id="city" name="city" value="{{ old('city', $form->city) }}" required>
    </div>

    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $form->address) }}" required>
    </div>

    <div class="form-group">
        <label for="age">Age</label>
        <input type="number" class="form-control" id="age" name="age" value="{{ old('age', $form->age) }}" required>
    </div>

    <div class="form-group">
        <label for="Dob">Date of Birth</label>
        <input type="date" class="form-control" id="Dob" name="Dob" value="{{ old('Dob', $form->Dob) }}" required>
    </div>

    <div class="form-group">
        <label for="gender">Gender</label>
        <select class="form-control" id="gender" name="gender" required>
            <option value="Male" {{ $form->gender == 'Male' ? 'selected' : '' }}>Male</option>
            <option value="Female" {{ $form->gender == 'Female' ? 'selected' : '' }}>Female</option>
        </select>
    </div>

    <div class="form-group">
        <label for="agree">Agree to Terms</label>
        <input type="checkbox" id="agree" name="agree" value="1" {{ old('agree', $form->agree) ? 'checked' : '' }}> I agree
    </div>

    <!-- Image upload -->
    <div class="form-group">
        <label for="std_image">Profile Image</label>
        <input type="file" class="form-control-file" id="std_image" name="std_image">
        @if ($form->std_image)
            <img src="{{ asset('storage/images/' . $form->std_image) }}" alt="Profile Image" width="100">
        @endif
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
