@extends('dashboard.layouts.app')
@section('content')
<style>
    .table-dark {
        --bs-table-bg: #1a2035;
    }
</style>
<table class="table table-striped table-hover table-primary table-bordered">
    <thead class="table-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Gender</th>
            <th scope="col">Message</th>
            <th scope="col">Created At</th>
            <th scope="col">Is Read</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($contacts as $contact)
        <tr>
            <th scope="row">{{ $contact->id }}</th>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->phone }}</td>
            <td>{{ $contact->gender == 1 ? 'Male' : 'Female' }}</td>
            <td>{{ $contact->message }}</td>
            <td>{{ $contact->created_at->format('Y-m-d H:i:s') }}</td>
            <td>
                <input type="checkbox" {{ $contact->isread ? 'checked' : '' }} >
            </td>
            <td >
                <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning btn-sm">Update</a>
              <br>
              <br>
             
                <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection