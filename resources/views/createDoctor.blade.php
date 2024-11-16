<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Doctor</title>
</head>
<body>
    <h1>Add New Doctor</h1>

    <!-- Check for success message -->
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('doctors.store') }}" method="POST">
        @csrf
        <label for="name">Doctor's Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="specialization">Specialization:</label>
        <input type="text" id="specialization" name="specialization" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" required><br>

        <button type="submit">Add Doctor</button>
    </form>

    <a href="{{ route('doctors.index') }}">Back to Doctors List</a>
</body>
</html>
