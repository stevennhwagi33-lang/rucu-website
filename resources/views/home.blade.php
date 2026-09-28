<html lang="en">

<head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Ruaha Catholic University - Home</title>

<!-- Font Awesome -->
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<!-- Tailwind CSS -->
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body class="bg-white">

<!-- ================= HEADER ================= -->

<header class="sticky top-0 z-50">

<!-- Top Bar -->
<div class="grid sm:grid-cols-1 md:grid-cols-3 gap-2
            bg-sky-500 text-white font-bold p-3 text-center">

    <p>
        <i class="fa-solid fa-phone"></i>
        +255 797 906 903
    </p>

    <p>
        <i class="fa-solid fa-envelope"></i>
        info@company.com
    </p>

    <p>
        <i class="fa-solid fa-location-dot"></i>
        Iringa, Tanzania
    </p>

</div>

<!-- Navigation -->
<div class="grid grid-cols-1 md:grid-cols-2
            bg-white shadow-lg p-4 items-center">

    <!-- Logo -->
    <div class="text-2xl font-bold text-sky-600 text-center md:text-left">
        RUCU
    </div>

    <!-- Menu -->
    <ul class="flex justify-center md:justify-end
               gap-5 font-bold flex-wrap mt-4 md:mt-0">

        <li>
            <a href="{{ url('/') }}"
               class="text-sky-500 hover:underline">
                Home
            </a>
        </li>

        <li>
            <a href="{{ url('/about') }}"
               class="hover:text-sky-500 hover:underline">
                About
            </a>
        </li>

        <li>
            <a href="{{ url('/services') }}"
               class="hover:text-sky-500 hover:underline">
                Services
            </a>
        </li>

        <li>
            <a href="{{ url('/programs') }}"
               class="hover:text-sky-500 hover:underline">
                Programs
            </a>
        </li>

        <li>
            <a href="{{ url('/admission') }}"
               class="hover:text-sky-500 hover:underline">
                Admission
            </a>
        </li>

        <li>
            <a href="{{ url('/student-portal') }}"
               class="hover:text-sky-500 hover:underline">
                Student Portal
            </a>
        </li>

        <li>
            <a href="{{ url('/news') }}"
               class="hover:text-sky-500 hover:underline">
                News
            </a>
        </li>

        <li>
            <a href="{{ url('/gallery') }}"
               class="hover:text-sky-500 hover:underline">
                Gallery
            </a>
        </li>

        <li>
            <a href="{{ url('/contact') }}"
               class="hover:text-sky-500 hover:underline">
                Contact
            </a>
        </li>

    </ul>

</div>

</header>

<!-- ================= HERO ================= -->

<section class="min-h-[500px] bg-[url('{{ asset('images/homepage.jpg') }}')] bg-cover bg-center flex items-center justify-center">

<div class="text-center bg-white/80 p-8 rounded-lg mx-4">

    <h1 class="font-bold text-sky-700 text-4xl mb-4">
        Welcome To Ruaha Catholic University
    </h1>

    <p class="max-w-xl mx-auto">
        Empowering students through quality education,
        practical skills and modern technology.
    </p>

    <a href="{{ url('/about') }}"
       class="inline-block bg-sky-500 px-6 py-3 text-white
              mt-6 rounded-lg hover:bg-sky-800">
        Learn More
    </a>

</div>

</section>

<!-- ================= WELCOME ================= -->

<section class="grid md:grid-cols-2 gap-8 m-6 p-6 bg-gray-100 rounded-lg shadow-lg">

<!-- Director Image -->
<div class="relative">

    <img src="{{ asset('images/director.jpg') }}"
         alt="Managing Director"
         class="h-96 w-full object-cover rounded-lg">

    <div class="absolute bottom-5 left-5
                bg-sky-500 px-6 py-3
                text-white shadow rounded-lg">

        <p class="font-bold uppercase">
            Nhwagi Steward
        </p>

        <p>
            Managing Director
        </p>

    </div>

</div>

<!-- Welcome Message -->
<div class="text-center p-6">

    <h2 class="font-bold text-3xl text-sky-700">
        Welcome Message
    </h2>

    <p class="mt-5">
        Welcome to Ruaha Catholic University (RUCU), a center of
        academic excellence dedicated to providing quality education,
        professional development and practical skills to prepare
        students for a successful future.
    </p>

    <p class="mt-4">
        At RUCU, we encourage innovation, critical thinking and the
        use of modern technology in education. Our goal is to create
        a supportive learning environment where students can develop
        their talents, knowledge and skills to contribute positively
        to society.
    </p>

    <a href="{{ url('/about') }}"
       class="inline-block bg-sky-500 text-white
              px-6 py-2 mt-6 rounded-lg
              hover:bg-sky-700">
        Read More
    </a>

</div>

</section>

<!-- ================= FEATURED PROGRAMS ================= -->

<section class="py-12 px-6">

<h2 class="text-center text-3xl font-bold text-sky-600 mb-10">
    Featured Programs
</h2>

<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

    <!-- Software Engineering -->
    <div class="rounded-lg shadow-lg overflow-hidden bg-white">

        <img src="{{ asset('images/software.jpg') }}"
             alt="Software Engineering"
             class="h-64 w-full object-cover">

        <div class="p-5">

            <h3 class="text-center font-bold text-xl text-sky-500">
                Software Engineering
            </h3>

            <p class="mt-3">
                Learn software development, programming,
                system design and modern technologies.
            </p>

            <div class="text-center">

                <a href="{{ url('/programs') }}"
                   class="inline-block bg-sky-500 text-white
                          px-6 py-2 mt-4 rounded-lg
                          hover:bg-sky-700">
                    Learn More
                </a>

            </div>

        </div>

    </div>


    <!-- Computer Science -->
    <div class="rounded-lg shadow-lg overflow-hidden bg-white">

        <img src="{{ asset('images/computer.jpg') }}"
             alt="Computer Science"
             class="h-64 w-full object-cover">

        <div class="p-5">

            <h3 class="text-center font-bold text-xl text-sky-500">
                Computer Science
            </h3>

            <p class="mt-3">
                Study programming, databases, networking,
                artificial intelligence and computer systems.
            </p>

            <div class="text-center">

                <a href="{{ url('/programs') }}"
                   class="inline-block bg-sky-500 text-white
                          px-6 py-2 mt-4 rounded-lg
                          hover:bg-sky-700">
                    Learn More
                </a>

            </div>

        </div>

    </div>


    <!-- Information Technology -->
    <div class="rounded-lg shadow-lg overflow-hidden bg-white">

        <img src="{{ asset('images/computer.jpg') }}"
             alt="Information Technology"
             class="h-64 w-full object-cover">

        <div class="p-5">

            <h3 class="text-center font-bold text-xl text-sky-500">
                Information Technology
            </h3>

            <p class="mt-3">
                Learn networking, databases, web technologies,
                cybersecurity and IT infrastructure.
            </p>

            <div class="text-center">

                <a href="{{ url('/programs') }}"
                   class="inline-block bg-sky-500 text-white
                          px-6 py-2 mt-4 rounded-lg
                          hover:bg-sky-700">
                    Learn More
                </a>

            </div>

        </div>

    </div>

</div>

</section>

<!-- ================= WHY CHOOSE US ================= -->

<section class="py-12 px-6 bg-gray-100">

<h2 class="text-center text-3xl font-bold text-sky-600 mb-10">
    Why Choose Us
</h2>

<div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">

    <!-- Quality Education -->
    <div class="bg-white p-6 text-center rounded-lg shadow">

        <i class="fa-solid fa-graduation-cap
                  text-4xl text-sky-500"></i>

        <h3 class="font-bold text-xl mt-4">
            Quality Education
        </h3>

        <p class="mt-2">
            We provide quality education and practical skills.
        </p>

    </div>


    <!-- Experienced Staff -->
    <div class="bg-white p-6 text-center rounded-lg shadow">

        <i class="fa-solid fa-users
                  text-4xl text-sky-500"></i>

        <h3 class="font-bold text-xl mt-4">
            Experienced Staff
        </h3>

        <p class="mt-2">
            Our staff are experienced and professional.
        </p>

    </div>


    <!-- Modern Technology -->
    <div class="bg-white p-6 text-center rounded-lg shadow">

        <i class="fa-solid fa-laptop-code
                  text-4xl text-sky-500"></i>

        <h3 class="font-bold text-xl mt-4">
            Modern Technology
        </h3>

        <p class="mt-2">
            We use modern technology in our services.
        </p>

    </div>


    <!-- Professional -->
    <div class="bg-white p-6 text-center rounded-lg shadow">

        <i class="fa-solid fa-certificate
                  text-4xl text-sky-500"></i>

        <h3 class="font-bold text-xl mt-4">
            Professional
        </h3>

        <p class="mt-2">
            We provide professional solutions.
        </p>

    </div>

</div>

</section>

<!-- ================= FAQ ================= -->

<section class="py-12 px-6">

<h2 class="text-center text-3xl font-bold text-sky-600 mb-10">
    Frequently Asked Questions
</h2>

<div class="max-w-4xl mx-auto space-y-4">

    <details class="bg-gray-100 p-5 rounded-lg shadow">

        <summary class="font-bold cursor-pointer">
            How can I apply?
        </summary>

        <p class="mt-3">
            You can apply online by visiting our admission page.
        </p>

    </details>


    <details class="bg-gray-100 p-5 rounded-lg shadow">

        <summary class="font-bold cursor-pointer">
            What programs do you offer?
        </summary>

        <p class="mt-3">
            We offer programs in Software Engineering,
            Computer Science and Information Technology.
        </p>

    </details>


    <details class="bg-gray-100 p-5 rounded-lg shadow">

        <summary class="font-bold cursor-pointer">
            How can I contact the university?
        </summary>

        <p class="mt-3">
            You can contact us through phone, email
            or our contact page.
        </p>

    </details>

</div>

</section>

<!-- ================= GOOGLE MAP ================= -->

<section class="py-12 px-6 bg-gray-100">

<h2 class="text-center text-3xl font-bold text-sky-600 mb-4">
    Find Us
</h2>

<p class="text-center text-gray-600 mb-8">
    Visit Ruaha Catholic University at our location.
</p>

<div class="max-w-xl mx-auto bg-white p-8
            rounded-lg shadow-lg text-center">

    <i class="fa-solid fa-location-dot
              text-5xl text-sky-500"></i>

    <h3 class="text-2xl font-bold mt-4">
        Ruaha Catholic University
    </h3>

    <p class="mt-3 text-gray-600">
        Iringa, Tanzania
    </p>

    <a href="https://www.google.com/maps/search/?api=1&query=Ruaha+Catholic+University+Iringa"
       target="_blank"
       class="inline-block bg-sky-500 text-white
              px-6 py-3 mt-6 rounded-lg
              hover:bg-sky-700">

        <i class="fa-solid fa-map-location-dot"></i>

        View Location on Google Maps

    </a>

</div>

</section>

<!-- ================= CALL TO ACTION ================= -->

<section class="bg-sky-600 text-white py-16 px-6 text-center">

<h2 class="text-3xl font-bold">
    Start Your Journey With Us
</h2>

<p class="mt-4 max-w-2xl mx-auto">
    Join us today and discover quality education,
    modern technology and professional development.
</p>

<div class="mt-6 flex justify-center gap-4 flex-wrap">

    <a href="{{ url('/admission') }}"
       class="bg-white text-sky-600 px-6 py-3
              rounded-lg font-bold hover:bg-gray-100">
        Apply Now
    </a>

    <a href="{{ url('/contact') }}"
       class="border-2 border-white px-6 py-3
              rounded-lg font-bold
              hover:bg-white hover:text-sky-600">
        Contact Us
    </a>

</div>

</section>

<!-- ================= FOOTER ================= -->

<footer class="bg-gray-900 text-white py-8 text-center">

<h2 class="text-2xl font-bold text-sky-400">
    Ruaha Catholic University
</h2>

<p class="mt-3">
    Quality Education and Professional Development
</p>

<!-- Social Media -->
<div class="flex justify-center gap-6 text-2xl mt-5">

    <a href="#" class="hover:text-sky-400">
        <i class="fa-brands fa-facebook"></i>
    </a>

    <a href="#" class="hover:text-sky-400">
        <i class="fa-brands fa-instagram"></i>
    </a>

    <a href="#" class="hover:text-sky-400">
        <i class="fa-brands fa-youtube"></i>
    </a>

</div>

<p class="mt-6">
    © 2026 Ruaha Catholic University. All Rights Reserved.
</p>

</footer>

</body> </html>