<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About Us</title>


    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>

<header class="sticky top-0 z-50">

    <div class="bg-sky-500 text-white p-3 text-center">
        +255 797 906 903 |
        info@company.com |
        123 Main Street, City
    </div>

    <nav class="bg-white shadow-lg p-5 flex justify-between">

        <h1 class="text-2xl font-bold text-sky-600">
            MY LOGO
        </h1>

        <ul class="flex gap-6 font-bold">

    <li><a href="{{ url('/') }}" class="hover:text-sky-500">Home</a></li>

<li><a href="{{ url('/about') }}" class="text-sky-500">About</a></li>

<li><a href="{{ url('/services') }}" class="hover:text-sky-500">Services</a></li>

<li><a href="{{ url('/programs') }}" class="hover:text-sky-500">Programs</a></li>

<li><a href="{{ url('/contact') }}" class="hover:text-sky-500">Contact</a></li>

        </ul>

    </nav>

</header>


<section class="py-16 px-6">

    <h1 class="text-center text-4xl font-bold text-sky-600">
        About Us
    </h1>

    <div class="grid md:grid-cols-2 gap-10 mt-12">

        <div>
            <img src="{{ asset('images/compus.jpg') }}"
                 class="w-full h-96 object-cover rounded-lg shadow-lg">
        </div>

        <div>

            <h2 class="text-2xl font-bold text-sky-600">
                Who We Are
            </h2>

            <p class="mt-4">
                We are an organization dedicated to providing
                quality education and professional technological
                services.
            </p>

            <h2 class="text-2xl font-bold text-sky-600 mt-8">
                Our Mission
            </h2>

            <p class="mt-4">
                Our mission is to provide quality education,
                innovation and professional services.
            </p>

            <h2 class="text-2xl font-bold text-sky-600 mt-8">
                Our Vision
            </h2>

            <p class="mt-4">
                To become a leading organization in education,
                technology and innovation.
            </p>

        </div>

    </div>

</section>


<footer class="bg-gray-900 text-white text-center p-8">

    © 2026 My Website. All Rights Reserved.

</footer>

</body>
</html>