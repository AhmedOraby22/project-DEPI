<!-- resources/views/doctors.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">  <!-- Font Awesome for icons -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            position: relative;  /* Ensures positioning for the button */
            min-height: 100vh;  /* Ensures the container takes full height */
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        table th, table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        table th {
            background-color: #007bff;
            color: #fff;
        }
        .actions {
            display: flex;
            gap: 10px;
        }
        .btn {
            padding: 6px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-edit {
            background-color: #ffc107;
            color: #fff;
        }
        .btn-delete {
            background-color: #dc3545;
            color: #fff;
        }
        .btn-add {
            background-color: #28a745;
            color: #fff;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
        }

        /* Position the "Add New Doctor" button at the bottom right with a slight offset */
        .add-doctor-container {
            position: absolute;
            bottom: 450px;  /* Adjusted to a smaller value */
            right: 130px;   /* Distance from the right side of the page */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Doctors List</h1>

        @if($doctors->isEmpty())
            <p>No doctors found.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Specialization</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($doctors as $doctor)
                        <tr>
                            <td>{{ $doctor->name }}</td>
                            <td>{{ $doctor->specialization }}</td>
                            <td>{{ $doctor->email }}</td>
                            <td>{{ $doctor->phone }}</td>
                            <td class="actions">
                                <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-edit"><i class="fas fa-edit"></i> Edit</a>
                                <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-delete"><i class="fas fa-trash-alt"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

    <!-- Add New Doctor button at the bottom right, slightly higher from the end -->
    <div class="add-doctor-container">
        <a href="{{ route('doctors.create') }}" class="btn-add">Add New Doctor</a>
    </div>
</body>
</html>
