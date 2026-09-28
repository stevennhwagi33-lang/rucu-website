<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Student</title>
</head>

<body>

    <h1>Edit Student</h1>

    <form action="/students/{{ $student->id }}" method="POST">

        @csrf
        @method('PUT')

        <div>
            <label>Full Name:</label>

            <input
                type="text"
                name="full_name"
                value="{{ old('full_name', $student->full_name) }}"
            >

            @error('full_name')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <br>

        <div>
            <label>Registration Number:</label>

            <input
                type="text"
                name="registration_number"
                value="{{ old('registration_number', $student->registration_number) }}"
            >

            @error('registration_number')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <br>

        <div>
            <label>Email:</label>

            <input
                type="email"
                name="email"
                value="{{ old('email', $student->email) }}"
            >

            @error('email')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <br>

        <div>
            <label>Phone:</label>

            <input
                type="text"
                name="phone"
                value="{{ old('phone', $student->phone) }}"
            >

            @error('phone')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <br>

        <div>
    <label>Course:</label>

    <select name="course">
        <option value="">-- Select Course --</option>

        <option value="COMPUTER SCIENCE"
            {{ old('course', $student->course) == 'COMPUTER SCIENCE' ? 'selected' : '' }}>
            Computer Science
        </option>

        <option value="software engineering"
            {{ old('course', $student->course) == 'software engineering' ? 'selected' : '' }}>
            Software Engineering
        </option>

        <option value="INFORMATION TECHNOLOGY"
            {{ old('course', $student->course) == 'INFORMATION TECHNOLOGY' ? 'selected' : '' }}>
            Information Technology
        </option>
    </select>

    @error('course')
        <div style="color: red;">{{ $message }}</div>
    @enderror
</div>

        <br>

        <button type="submit">Update Student</button>

    </form>

    <br>

    <a href="/students">Back to Students</a>

</body>

</html>