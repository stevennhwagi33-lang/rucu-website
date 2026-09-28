<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Student</title>
</head>

<body>

    <h1>Add New Student</h1>
    

    <form action="/students" method="POST">

        @csrf

        <div>
            <label>Full Name:</label>
            <input type="text" name="full_name" value="{{ old('full_name') }}">
            @error('full_name')
    <div>{{ $message }}</div>
@enderror
        </div>

        <br>

        <div>
            <label>Registration Number:</label>
            <input type="text" name="registration_number" value="{{ old('registration_number') }}">
            @error('registration_number')
    <div>{{ $message }}</div>
@enderror
        </div>

        <br>

        <div>
            <label>Email:</label>
            <input type="email" name="email" value="{{ old('email') }}">
            @error('email')
    <div>{{ $message }}</div>
@enderror
        </div>

        <br>

        <div>
            <label>Phone:</label>
            <input type="text" name="phone" value="{{ old('phone') }}">
            @error('phone')
    <div>{{ $message }}</div>
@enderror
        </div>

        <br>

        <div>
    <label>Course:</label>

    <select name="course">
        <option value="">-- Select Course --</option>

        <option value="COMPUTER SCIENCE"
            {{ old('course') == 'COMPUTER SCIENCE' ? 'selected' : '' }}>
            Computer Science
        </option>

        <option value="software engineering"
            {{ old('course') == 'software engineering' ? 'selected' : '' }}>
            Software Engineering
        </option>

        <option value="INFORMATION TECHNOLOGY"
            {{ old('course') == 'INFORMATION TECHNOLOGY' ? 'selected' : '' }}>
            Information Technology
        </option>
    </select>

    @error('course')
        <div>{{ $message }}</div>
    @enderror
</div>

        <br>

        <button type="submit">Save Student</button>

    </form>

</body>
</html>