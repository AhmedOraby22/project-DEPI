<!-- resources/views/editDoctor.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Doctor</title>
</head>
<body>
    <h1>Edit Doctor</h1>

    <!-- Display validation errors if any -->
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <!-- Edit doctor form -->
    <form action="{{ route('doctors.update', $doctor->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ old('name', $doctor->name) }}" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ old('email', $doctor->email) }}" required>
        <br>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone" value="{{ old('phone', $doctor->phone) }}" required>
        <br>

        <label for="specialization">Specialization:</label>
        <input type="text" name="specialization" id="specialization" value="{{ old('specialization', $doctor->specialization) }}" required>
        <br>

        <button type="submit">Update Doctor</button>
    </form>

    <a href="{{ route('doctors.index') }}">Back to Doctors List</a>
</body>
</html>
