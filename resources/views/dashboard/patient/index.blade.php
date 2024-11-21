@extends('dashboard.layouts.app')

@section('content')
    <style>
        .table-dark {
            --bs-table-bg: #1a2035;
        }
    </style>
    <div class="container">
        <br>
        <div class="card-header">
            <div class="card-title">List of Patients</div>
        </div>
        <br>
        <div class="card-body">
            <table class="table table-striped table-hover table-primary table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Name</th>
                      
                        <th>Phone</th>
                        <th>Branch</th>
                        <th>Specialty</th>
                        <th>Reservation Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($patients as $patient)
                        <tr>
                            <td>{{ $patient->name }}</td>
                           
                            <td>{{ $patient->phone }}</td>
                            <td>{{ $patient->branch }}</td>
                            <td>{{ $patient->specialty }}</td>
                            <td>{{ $patient->reservation_date }}</td>
                            <td>
                                <a href="{{ route('dashboard.patient.edit', $patient->id) }}" class="btn btn-warning btn-sm">Update</a>
                                <a href="{{ route('dashboard.patient.show', $patient->id) }}" class="btn btn-warning btn-sm">Show</a>
                                <br><br>
                                <form action="{{ route('dashboard.patient.destroy', $patient->id) }}" method="post" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
