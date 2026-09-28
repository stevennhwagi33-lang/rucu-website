<!DOCTYPE html>

<html lang="en">

<head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>All Students</title>

</head>

<body>
    @if(session('success'))
    <div style="color: green; margin-bottom: 15px;">
        {{ session('success') }}
    </div>
@endif

<h1>All Students</h1>
<form action="/students" method="GET">

    <input
        type="text"
        name="search"
        placeholder="Search student..."
        value="{{ $search ?? '' }}"
    >

    <select name="course">
        <option value="">-- All Courses --</option>

        <option value="COMPUTER SCIENCE"
            {{ ($course ?? '') == 'COMPUTER SCIENCE' ? 'selected' : '' }}>
            Computer Science
        </option>

        <option value="software engineering"
            {{ ($course ?? '') == 'software engineering' ? 'selected' : '' }}>
            Software Engineering
        </option>

        <option value="INFORMATION TECHNOLOGY"
            {{ ($course ?? '') == 'INFORMATION TECHNOLOGY' ? 'selected' : '' }}>
            Information Technology
        </option>
    </select>

    <button type="submit">
        Search
    </button>

    @if($search || $course)
        <a href="/students">Clear</a>
    @endif

</form>

<br>

@if(auth()->user()->role === 'admin')
    <p>
        <a href="/students/create">Add New Student</a>
    </p>
@endif

<br>

<!-- Students Table -->
<table border="1" cellpadding="10" cellspacing="0">

    <thead>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Registration Number</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Course</th>
            @if(auth()->user()->role === 'admin')
    <th>Action</th>
@endif
        </tr>
    </thead>

    <tbody>

        @foreach ($students as $student)

            <tr>

                <td>
                    {{ $student->id }}
                </td>

                <td>
                    {{ $student->full_name }}
                </td>

                <td>
                    {{ $student->registration_number }}
                </td>

                <td>
                    {{ $student->email }}
                </td>

                <td>
                    {{ $student->phone }}
                </td>

                <td>
                    {{ $student->course }}
                </td>

                <td>

    @if(auth()->user()->role === 'admin')

    <!-- Edit Button -->
    <a href="/students/{{ $student->id }}/edit">
        Edit
    </a>

    <!-- Delete Form -->
    <form
        action="/students/{{ $student->id }}"
        method="POST"
        style="display:inline;"
        onsubmit="return confirm('Are you sure you want to delete this student?');"
    >
        @csrf
        @method('DELETE')

        <button type="submit">
            Delete
        </button>
    </form>

@endif


</td>

            </tr>

        @endforeach

    </tbody>

</table>

<div style="margin-top: 20px;">
    {{ $students->links() }}
</div>

</body>

</html>