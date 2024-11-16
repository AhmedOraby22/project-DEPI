@extends('dashboard.layouts.app')
@section('content')
    <style>
        .table-dark {
            --bs-table-bg: #1a2035;
        }
    </style>
    <div class="container">
        <br>
        <div class="card-header row">
            <div class="card-title col-6">List of Country</div>
            <div class="card-title col-6 text-end">
                <a href="{{ route('dashboard.country.create') }}"
                   class="btn btn-warning btn-sm position-absoluter-right">Create</a></div>

        </div>
        <br>
        <div class="card-body">
            <table class="table table-striped table-hover table-primary table-bordered">
                <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($datas as $data)
                    <tr>
                        <th scope="row">{{ $data->id }}</th>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->status ? 'active' : 'unactive' }}</td>
                        <td>
                            <a href="{{ route('dashboard.country.edit', $data->id) }}"
                               class="btn btn-warning btn-sm">Update</a>


                            <br>
                            <br>

                            <form action="{{ route('dashboard.country.destroy', $data->id) }}" method="post"
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