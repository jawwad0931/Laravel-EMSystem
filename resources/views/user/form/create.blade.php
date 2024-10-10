<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<body>
    <x-app-layout>
        {{-- Navbar for user start--}}
        @include('layouts.topbar');
        {{-- Navbar for user end --}}


        {{-- student form start --}}
        <div class="container mt-5">
            {{-- Display success and error messages --}}
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif

            @if($errors->any())
            <div class="alert alert-warning">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <h2 class="text-start">Contact Us</h2>
                    {{-- <a href="{{ route('user.form.show', ['id' => $form->id]) }}" class="badge rounded-pill text-bg-primary">Check your form</a> --}}
                    <form action="{{ route('user.form.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label class="mt-3" for="std_image">Student Image (optional):</label>
                                <input type="file" class="form-control" name="std_image" id="std_image">
                            </div>
                            <div class="form-group col-md-8">
                                <label class="mt-3" for="first_name">First Name:</label>
                                <input type="text" class="form-control" name="first_name" id="first_name"
                                    placeholder="Your First Name" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label class="mt-3" for="last_name">Last Name:</label>
                                <input type="text" class="form-control" name="last_name" id="last_name"
                                    placeholder="Your Last Name" required>
                            </div>
                            <div class="form-group col-md-8">
                                <label class="mt-3" for="father_name">Father's Name:</label>
                                <input type="text" class="form-control" name="father_name" id="father_name"
                                    placeholder="Your Father's Name" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label class="mt-3" for="email">Email:</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                            <div class="form-group col-md-8">
                                <label class="mt-3" for="class">Class:</label>
                                <input type="number" class="form-control" name="class" id="class"
                                    placeholder="Your Class" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label class="mt-3" for="school_name">School Name:</label>
                                <input type="text" class="form-control" name="school_name" id="school_name"
                                    placeholder="Your School Name" required>
                            </div>
                            <div class="form-group col-md-8">
                                <label class="mt-3" for="phone">Phone:</label>
                                <input type="text" class="form-control" name="phone" id="phone"
                                    placeholder="Your Phone Number" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label class="mt-3" for="city">City:</label>
                                <input type="text" class="form-control" name="city" id="city" placeholder="Your City"
                                    required>
                            </div>
                            <div class="form-group col-md-8">
                                <label class="mt-3" for="age">Age:</label>
                                <input type="number" class="form-control" name="age" id="age" placeholder="Your Age"
                                    required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label class="mt-3" for="Dob">Date of Birth:</label>
                                <input type="date" class="form-control" name="Dob" id="Dob" required>
                            </div>
                            <div class="form-group col-md-8">
                                <label class="mt-3" for="gender">Gender:</label>
                                <select name="gender" id="gender" class="form-control" required>
                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-8">
                            <label class="mt-3" for="address">Address:</label>
                            <textarea name="address" id="address" class="form-control" placeholder="Your Address"
                                required></textarea>
                        </div>
                        <div class="form-group form-check mt-3 mb-3">
                            <input type="checkbox" class="form-check-input" name="agree" id="agree" value="1" required>
                            <label class="" class="form-check-label" for="agree">I agree to the terms and conditions</label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm btn-block">Submit</button>
                    </form>
                </div>
                <div class="col-lg-4 col-md-4">
                    <img src="{{url('images/form2.png')}}" height="300px" width="350px" alt="">
                    <div class="alert alert-danger" role="alert">
                        <strong>Instructions</strong><br>
                        1. Please fill in all required fields marked with an asterisk (*).<br>
                        2. Ensure that your email address is valid for communication.<br>
                        3. Upload a student image only if necessary; it’s optional.<br>
                        4. Double-check your contact information to avoid any issues.<br>
                        5. If you have any questions, please reach out to your instructor for assistance.<br>
                        6. Make sure to read the terms and conditions before agreeing to them.
                    </div>
                </div>
            </div>
        </div>
        {{-- student form end --}}
        <hr>



        </div>
        </div>
        {{-- FAQ end --}}
        @include('layouts.footer')

    </x-app-layout>
    {{-- yahan maine script tag hata diya tou dropdown wala masla resolve hogaya --}}
</body>

</html>