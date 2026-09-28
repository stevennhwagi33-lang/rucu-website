<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Our Programs</title>

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
            <li>
    <a href="{{ url('/') }}" class="hover:text-sky-500">
        Home
    </a>
</li>

<li>
    <a href="{{ url('/about') }}" class="hover:text-sky-500">
        About
    </a>
</li>

<li>
    <a href="{{ url('/services') }}" class="hover:text-sky-500">
        Services
    </a>
</li>

<li>
    <a href="{{ url('/programs') }}" class="text-sky-500">
        Programs
    </a>
</li>

<li>
    <a href="{{ url('/contact') }}" class="hover:text-sky-500">
        Contact
    </a>
</li>
        </ul>

    </nav>

</header>


<section class="py-16 px-6 bg-gray-100">

    <h1 class="text-center text-4xl font-bold text-sky-600">
        Our Programs
    </h1>


    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mt-12">

        <div class="bg-white rounded-lg shadow-lg overflow-hidden">

            <img src="{{ asset('images/software.jpg') }}"
                 class="w-full h-56 object-cover">

            <div class="p-5">

                <h2 class="text-xl font-bold text-sky-600">
                    Software Engineering
                </h2>

                <p class="mt-3">
                    Learn software development, programming,
                    system analysis and software design.
                </p>

                <button class="bg-sky-500 text-white px-5 py-2 mt-4 rounded">
                    View Program
                </button>

            </div>

        </div>


        <div class="bg-white rounded-lg shadow-lg overflow-hidden">

            <img src="{{ asset('images/computer.jpg') }}"
                 class="w-full h-56 object-cover">

            <div class="p-5">

                <h2 class="text-xl font-bold text-sky-600">
                    Computer Science
                </h2>

                <p class="mt-3">
                    Study programming, databases, networking,
                    AI and computer systems.
                </p>

                <button class="bg-sky-500 text-white px-5 py-2 mt-4 rounded">
                    View Program
                </button>

            </div>

        </div>


        <div class="bg-white rounded-lg shadow-lg p-5">

            <h2 class="text-xl font-bold text-sky-600">
                Information Technology
            </h2>

            <p class="mt-3">
                Learn IT systems, networking, databases
                and technical support.
            </p>

            <button class="bg-sky-500 text-white px-5 py-2 mt-4 rounded">
                View Program
            </button>

        </div>

    </div>

</section>


<footer class="bg-gray-900 text-white text-center p-8">

    © 2026 My Website. All Rights Reserved.

</footer>

</body>
</html>