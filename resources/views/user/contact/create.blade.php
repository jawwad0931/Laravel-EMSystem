{{--
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>

<body>
    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if(session('success'))
    <p>{{ session('success') }}</p>
    @endif

    <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <input type="text" name="First_name" placeholder="Your first name" required>
        <input type="text" name="Last_name" placeholder="Your last name" required>
        <input type="email" name="Email" placeholder="Your Email" required>
        <textarea name="Message" placeholder="Your Message" required></textarea>
        <button type="submit">Send Message</button>
    </form>
</body>

</html> --}}



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
</style>

<body>
    <x-app-layout>
        {{-- Navbar for user start--}}
        @include('layouts.topbar');
        {{-- Navbar for user end --}}

        {{-- notification --}}
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-info">
                        Please provide as much detail as possible in your message to help us assist you better.
                    </div>
                    <div class="alert alert-info">
                        Your feedback is important! Expect a reply within 24-48 hours.
                    </div>
                </div>
            </div>
        </div>
        {{-- notification end --}}
        {{-- --}}
        <section>
            <div class="container">
                <div class="row my-5">
                    <div class="col-md-6 my-5">
                        <div class="card shadow-sm">
                            <div class="m-3">
                                <h4 class="text-secondary">Contact Us</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('user.contact.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="first_name">First Name</label>
                                        <input type="text" name="First_name" class="form-control" id="first_name"
                                            placeholder="Your first name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" name="Last_name" class="form-control" id="last_name"
                                            placeholder="Your last name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="Email" class="form-control" id="email"
                                            placeholder="Your Email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea name="Message" class="form-control" id="message"
                                            placeholder="Your Message" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block mt-3">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 my-5">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.645233479555!2d67.01376287487928!3d24.841803146004885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33de406349b1b%3A0xf0eb0447826832e9!2sNew%20Haji%20Camp%2C%20Moulvi%20Tamizuddin%20Khan%20Rd%2C%20near%20Nomania%20Masjid%D8%8C%20Sultanabad%20Karachi%2C%20Karachi%20City%2C%20Sindh%2074200%2C%20Pakistan!5e0!3m2!1sen!2s!4v1704481584223!5m2!1sen!2s"
                                width="100%" height="390" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- --}}
        <hr>
        {{-- FAQ end --}}
        @include('layouts.footer')

    </x-app-layout>
</body>

</html>