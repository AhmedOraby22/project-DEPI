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

        <br>
        <div class="card-body">
            <table class="table table-striped table-hover table-primary table-bordered">
                <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($datas as $data)
                    <tr>
                        <th scope="row">{{ $data->id }}</th>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->status ? 'active' : 'unactive' }}</td>
                        <td>
                            <a href="{{ route('dashboard.patient.edit', $data->id) }}"
                               class="btn btn-warning btn-sm">Update</a>

                            <a href="{{ route('dashboard.patient.show', $data->id) }}"
                               class="btn btn-warning btn-sm">Show</a>
                            <br>
                            <br>

                            <form action="{{ route('dashboard.patient.destroy', $data->id) }}" method="post"
                                  style="display:inline;">
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