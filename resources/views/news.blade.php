<!DOCTYPE html>

<html lang="en">

<head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>News & Announcements - RUCU</title>

<!-- Font Awesome -->
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<!-- Tailwind CSS -->
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body class="bg-gray-100">

<!-- ================= HEADER ================= -->
<header>

    <!-- Top Bar -->
    <div class="bg-sky-500 text-white text-center p-3">
        <i class="fa-solid fa-phone"></i>
        +255 797 906 903
        &nbsp; | &nbsp;
        <i class="fa-solid fa-envelope"></i>
        info@company.com
    </div>

    <!-- Navigation -->
    <nav class="bg-white shadow-lg p-5">

        <div class="max-w-6xl mx-auto flex justify-between items-center">

            <!-- Logo -->
            <a href="{{ url('/') }}"
                class="text-2xl font-bold text-sky-600">
                RUCU
            </a>

            <!-- Navigation Links -->
            <div class="flex gap-5 font-bold">

                <a href="{{ url('/') }}"
                    class="hover:text-sky-500">
                    Home
                </a>

                <a href="{{ url('/about') }}"
                    class="hover:text-sky-500">
                    About
                </a>

                <a href="{{ url('/services') }}"
                    class="hover:text-sky-500">
                    Services
                </a>

                <a href="{{ url('/programs') }}"
                    class="hover:text-sky-500">
                    Programs
                </a>

                <a href="{{ url('/admission') }}"
                    class="hover:text-sky-500">
                    Admission
                </a>

                <a href="{{ url('/news') }}"
                    class="text-sky-500">
                    News
                </a>

                <a href="{{ url('/contact') }}"
                    class="hover:text-sky-500">
                    Contact
                </a>

            </div>

        </div>

    </nav>

</header>


<!-- ================= NEWS SECTION ================= -->

<section class="max-w-7xl mx-auto py-12 px-6">

    <h1 class="text-4xl font-bold text-center text-sky-600">
        Latest News & Announcements
    </h1>

    <p class="text-center text-gray-600 mt-3">
        Stay updated with the latest news, announcements and activities at RUCU.
    </p>


    <!-- News Cards -->
    <div class="grid md:grid-cols-3 gap-6 mt-10">


        <!-- ================= NEWS 1 ================= -->

        <article class="bg-white rounded-lg shadow-lg overflow-hidden">

            <img src="{{ asset('images/students.jpg') }}"
                alt="RUCU Students"
                class="w-full h-48 object-cover">

            <div class="p-6">

                <h2 class="text-xl font-bold">
                    Admission Open
                </h2>

                <p class="mt-3 text-gray-600">
                    Applications are now open for new students.
                </p>

                <a href="#"
                    class="text-sky-500 font-bold inline-block mt-4">
                    Read More
                </a>

            </div>

        </article>


        <!-- ================= NEWS 2 ================= -->

        <article class="bg-white rounded-lg shadow-lg overflow-hidden">

            <img src="{{ asset('images/campus.jpg') }}"
                alt="RUCU Campus"
                class="w-full h-48 object-cover">

            <div class="p-6">

                <h2 class="text-xl font-bold">
                    Academic Activities
                </h2>

                <p class="mt-3 text-gray-600">
                    Learn about our latest academic activities.
                </p>

                <a href="#"
                    class="text-sky-500 font-bold inline-block mt-4">
                    Read More
                </a>

            </div>

        </article>


        <!-- ================= NEWS 3 ================= -->

        <article class="bg-white rounded-lg shadow-lg overflow-hidden">

            <img src="{{ asset('images/team.jpg') }}"
                alt="RUCU Team"
                class="w-full h-48 object-cover">

            <div class="p-6">

                <h2 class="text-xl font-bold">
                    University Events
                </h2>

                <p class="mt-3 text-gray-600">
                    Discover upcoming events and activities.
                </p>

                <a href="#"
                    class="text-sky-500 font-bold inline-block mt-4">
                    Read More
                </a>

            </div>

        </article>

    </div>

</section>


<!-- ================= FOOTER ================= -->

<footer class="bg-gray-900 text-white text-center py-6">

    <p>
        © 2026 RUCU. All Rights Reserved.
    </p>

</footer>

</body>

</html>