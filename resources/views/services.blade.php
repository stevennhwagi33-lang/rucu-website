<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Services - RUCU</title>


    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>


<body class="bg-gray-100">


<!-- ================= NAVIGATION ================= -->

<nav class="bg-white shadow-lg p-5">

    <div class="max-w-7xl mx-auto flex justify-between items-center">

        <!-- Logo -->

        <a href="{{ url('/') }}"
   class="text-2xl font-bold text-sky-600">
    RUCU
</a>


        <!-- Menu -->

        <div class="space-x-5 font-semibold">
            <a href="{{ url('/') }}"
   class="hover:text-sky-500">
    Home
</a>

<a href="{{ url('/about') }}"
   class="hover:text-sky-500">
    About
</a>

<a href="{{ url('/services') }}"
   class="text-sky-500">
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
   class="hover:text-sky-500">
    News
</a>

<a href="{{ url('/gallery') }}"
   class="hover:text-sky-500">
    Gallery
</a>

<a href="{{ url('/contact') }}"
   class="hover:text-sky-500">
    Contact
</a>


        </div>

    </div>

</nav>



<!-- ================= SERVICES HEADER ================= -->

<section class="bg-sky-600 text-white py-16 text-center">

    <h1 class="text-4xl font-bold">

        Our Services

    </h1>

    <p class="mt-4">

        We provide quality technological and professional services.

    </p>

</section>



<!-- ================= SERVICES ================= -->

<section class="max-w-7xl mx-auto py-12 px-6">

    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">


        <!-- ================= WEB DEVELOPMENT ================= -->

        <div class="bg-white rounded-lg shadow-lg overflow-hidden">

            <img src="{{ asset('images/web-development.jpg') }}"
                 alt="Web Development"
                 class="w-full h-48 object-cover">


            <div class="p-6 text-center">

                <i class="fa-solid fa-code text-5xl text-sky-500"></i>

                <h2 class="text-xl font-bold mt-4">

                    Web Development

                </h2>

                <p class="mt-3 text-gray-600">

                    We design and develop modern,
                    responsive and user-friendly websites.

                </p>

                <a href="#"
                   class="inline-block bg-sky-500 text-white
                          px-5 py-2 mt-5 rounded-lg
                          hover:bg-sky-700">

                    Learn More

                </a>

            </div>

        </div>



        <!-- ================= NETWORKING ================= -->

        <div class="bg-white rounded-lg shadow-lg overflow-hidden">

            <img src="{{ asset('images/networking.jpg') }}"
                 alt="Computer Networking"
                 class="w-full h-48 object-cover">


            <div class="p-6 text-center">

                <i class="fa-solid fa-network-wired
                          text-5xl text-sky-500"></i>

                <h2 class="text-xl font-bold mt-4">

                    Networking

                </h2>

                <p class="mt-3 text-gray-600">

                    We provide computer networking,
                    network configuration and maintenance.

                </p>

                <a href="#"
                   class="inline-block bg-sky-500 text-white
                          px-5 py-2 mt-5 rounded-lg
                          hover:bg-sky-700">

                    Learn More

                </a>

            </div>

        </div>



        <!-- ================= DATABASE ================= -->

        <div class="bg-white rounded-lg shadow-lg overflow-hidden">

            <img src="{{ asset('images/database.jpg') }}"
                 alt="Database Management"
                 class="w-full h-48 object-cover">


            <div class="p-6 text-center">

                <i class="fa-solid fa-database
                          text-5xl text-sky-500"></i>

                <h2 class="text-xl font-bold mt-4">

                    Database Management

                </h2>

                <p class="mt-3 text-gray-600">

                    We design, manage and maintain
                    secure and reliable databases.

                </p>

                <a href="#"
                   class="inline-block bg-sky-500 text-white
                          px-5 py-2 mt-5 rounded-lg
                          hover:bg-sky-700">

                    Learn More

                </a>

            </div>

        </div>



        <!-- ================= IT SUPPORT ================= -->

        <div class="bg-white rounded-lg shadow-lg overflow-hidden">

            <img src="{{ asset('images/it-support.jpg') }}"
                 alt="IT Support"
                 class="w-full h-48 object-cover">


            <div class="p-6 text-center">

                <i class="fa-solid fa-screwdriver-wrench
                          text-5xl text-sky-500"></i>

                <h2 class="text-xl font-bold mt-4">

                    IT Support

                </h2>

                <p class="mt-3 text-gray-600">

                    We provide computer maintenance,
                    troubleshooting and technical support.

                </p>

                <a href="#"
                   class="inline-block bg-sky-500 text-white
                          px-5 py-2 mt-5 rounded-lg
                          hover:bg-sky-700">

                    Learn More

                </a>

            </div>

        </div>


    </div>

</section>



<!-- ================= FOOTER ================= -->

<footer class="bg-gray-900 text-white mt-10">

    <div class="max-w-7xl mx-auto px-6 py-8 text-center">

        <h2 class="text-2xl font-bold">
            RUCU
        </h2>

        <p class="mt-3 text-gray-400">
            Quality Education and Professional Services
        </p>

        <p class="mt-6 text-gray-400">
            © 2026 RUCU. All Rights Reserved.
        </p>

    </div>

</footer>


</body>

</html>