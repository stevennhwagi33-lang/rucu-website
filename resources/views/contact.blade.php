<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Us</title>


    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body>

<header>

    <nav class="bg-white shadow-lg p-5 flex justify-between">

        <a href="{{ url('/') }}"
   class="text-2xl font-bold text-sky-600">
    RUCU
</a>

        <ul class="flex gap-6 font-bold">

            <a href="{{ url('/') }}">Home</a>

<a href="{{ url('/about') }}">About</a>

<a href="{{ url('/services') }}">Services</a>

<a href="{{ url('/programs') }}">Programs</a>

<a href="{{ url('/contact') }}" class="text-sky-500">
    Contact
</a>

        </ul>

    </nav>

</header>


<section class="py-16 px-6 bg-gray-100">

    <h1 class="text-center text-4xl font-bold text-sky-600">
        Contact Us
    </h1>


    <div class="grid md:grid-cols-2 gap-10 max-w-6xl mx-auto mt-12">


        <!-- Contact Information -->
        <div class="bg-white p-8 rounded-lg shadow-lg">

            <h2 class="text-2xl font-bold text-sky-600">
                Get In Touch
            </h2>

            <div class="mt-8 space-y-6">

                <p>
                    <i class="fa-solid fa-phone text-sky-500"></i>
                    +255 797 906 903
                </p>

                <p>
                    <i class="fa-solid fa-envelope text-sky-500"></i>
                    info@company.com
                </p>

                <p>
                    <i class="fa-solid fa-location-dot text-sky-500"></i>
                    123 Main Street, City
                </p>

            </div>

        </div>


        <!-- Contact Form -->
        <div class="bg-white p-8 rounded-lg shadow-lg">

            <h2 class="text-2xl font-bold text-sky-600">
                Send Us a Message
            </h2>

            <form class="mt-6">

                <input
                    type="text"
                    placeholder="Your Name"
                    class="w-full border p-3 rounded mb-4">

                <input
                    type="email"
                    placeholder="Your Email"
                    class="w-full border p-3 rounded mb-4">

                <input
                    type="text"
                    placeholder="Subject"
                    class="w-full border p-3 rounded mb-4">

                <textarea
                    placeholder="Your Message"
                    class="w-full border p-3 rounded mb-4 h-32"></textarea>

                <button
                    type="submit"
                    class="bg-sky-500 hover:bg-sky-700
                           text-white px-6 py-3 rounded-lg">

                    Send Message

                </button>

            </form>

        </div>

    </div>

</section>


<footer class="bg-gray-900 text-white text-center p-8">

    © 2026 My Website. All Rights Reserved.

</footer>

</body>
</html>