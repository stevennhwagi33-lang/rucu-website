<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Student Portal - RUCU</title>


    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Tailwind CSS -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>


<body class="bg-gray-100">


<!-- ================= HEADER ================= -->

<header>

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

            <a href="{{ url('/') }}"
               class="text-2xl font-bold text-sky-600">

                RUCU

            </a>


            <div class="flex gap-5 font-bold">

                <a href="{{ url('/') }}"
   class="hover:text-sky-500">
    Home
</a>

<a href="{{ url('/about') }}"
   class="hover:text-sky-500">
    About
</a>

<a href="{{ url('/programs') }}"
   class="hover:text-sky-500">
    Programs
</a>

<a href="{{ url('/contact') }}"
   class="hover:text-sky-500">
    Contact
</a>

                    

    

            </div>

        </div>

    </nav>

</header>



<!-- ================= STUDENT PORTAL ================= -->

<section class="min-h-[600px] flex items-center justify-center px-6 py-12">


    <div class="bg-white w-full max-w-md
                rounded-xl shadow-lg p-8">


        <!-- Icon -->

        <div class="text-center">

            <i class="fa-solid fa-user-graduate
                      text-6xl text-sky-500"></i>


            <h1 class="text-3xl font-bold
                       text-sky-600 mt-5">

                Student Portal

            </h1>


            <p class="text-gray-500 mt-2">

                Login to access your student account.

            </p>

        </div>



        <!-- Login Form -->

        <form class="mt-8">


            <!-- Student ID -->

            <div class="mb-5">

                <label class="font-semibold">

                    Student ID

                </label>


                <div class="relative">

                    <i class="fa-solid fa-id-card
                              absolute left-3 top-4
                              text-gray-400"></i>


                    <input
                        type="text"
                        placeholder="Enter Student ID"
                        class="w-full border
                               rounded-lg p-3 pl-10 mt-2
                               focus:outline-none
                               focus:ring-2
                               focus:ring-sky-500">

                </div>

            </div>



            <!-- Password -->

            <div class="mb-5">

                <label class="font-semibold">

                    Password

                </label>


                <div class="relative">

                    <i class="fa-solid fa-lock
                              absolute left-3 top-4
                              text-gray-400"></i>


                    <input
                        type="password"
                        placeholder="Enter Password"
                        class="w-full border
                               rounded-lg p-3 pl-10 mt-2
                               focus:outline-none
                               focus:ring-2
                               focus:ring-sky-500">

                </div>

            </div>



            <!-- Remember Me -->

            <div class="flex justify-between items-center mb-6">

                <label class="flex items-center gap-2">

                    <input type="checkbox">

                    <span class="text-sm">
                        Remember me
                    </span>

                </label>


                <a href="#"
                   class="text-sky-500 text-sm
                          hover:underline">

                    Forgot Password?

                </a>

            </div>



            <!-- Login Button -->

            <button
                type="submit"
                class="w-full bg-sky-500
                       text-white py-3
                       rounded-lg font-bold
                       hover:bg-sky-700">

                <i class="fa-solid fa-right-to-bracket"></i>

                Login

            </button>


        </form>



        <!-- Additional Links -->

        <div class="text-center mt-6">

            <p class="text-gray-500">

                Don't have an account?

            </p>


            <a href="{{ url('/admission') }}"
   class="text-sky-500 font-bold hover:underline">

    Apply for Admission

</a>

        </div>


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