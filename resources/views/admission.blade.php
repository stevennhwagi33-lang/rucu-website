<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Admission - RUCU</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body class="bg-gray-100">

<nav class="bg-white shadow-lg p-5">

    <div class="flex justify-between">

        <a href="{{ url('/') }}"
   class="text-2xl font-bold text-sky-600">
    RUCU
</a>

        <div class="space-x-5">
            <a href="{{ url('/') }}">Home</a>

<a href="{{ url('/programs') }}">Programs</a>

<a href="{{ url('/admission') }}" class="text-sky-500">
    Admission
</a>

<a href="{{ url('/contact') }}">Contact</a>

        </div>

    </div>

</nav>


<section class="max-w-5xl mx-auto py-12 px-6">

    <h1 class="text-4xl font-bold text-center text-sky-600">
        Apply Online
    </h1>

    <p class="text-center mt-3">
        Start your application by completing the form below.
    </p>


    <form class="bg-white shadow-lg rounded-lg p-8 mt-10">

        <div class="grid md:grid-cols-2 gap-6">

            <div>

                <label class="font-semibold">
                    Full Name
                </label>

                <input type="text"
                       class="w-full border p-3 rounded mt-2"
                       placeholder="Enter your full name">

            </div>


            <div>

                <label class="font-semibold">
                    Email
                </label>

                <input type="email"
                       class="w-full border p-3 rounded mt-2"
                       placeholder="Enter your email">

            </div>


            <div>

                <label class="font-semibold">
                    Phone
                </label>

                <input type="tel"
                       class="w-full border p-3 rounded mt-2"
                       placeholder="Enter phone number">

            </div>


            <div>

                <label class="font-semibold">
                    Program
                </label>

                <select class="w-full border p-3 rounded mt-2">

                    <option>Select Program</option>

                    <option>Software Engineering</option>

                    <option>Computer Science</option>

                    <option>Information Technology</option>

                </select>

            </div>

        </div>


        <div class="mt-6">

            <label class="font-semibold">
                Previous Education
            </label>

            <textarea
                class="w-full border p-3 rounded mt-2"
                rows="4"
                placeholder="Enter your education background">
            </textarea>

        </div>


        <button
            type="submit"
            class="bg-sky-500 text-white px-8 py-3 rounded-lg mt-6 hover:bg-sky-700">

            Submit Application

        </button>

    </form>

</section>

</body>
</html>