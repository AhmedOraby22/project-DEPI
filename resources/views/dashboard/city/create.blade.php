@extends('dashboard.layouts.app')
@section('content')

    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" class="card" action="{{ route('dashboard.city.store') }}">
                        @csrf
                        <div class="card-header">
                            <div class="card-title">Create City</div>
                        </div>

                        <div class="card-body">
                            @include('dashboard.layouts.error')
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input
                                                type="text"
                                                class="form-control"
                                                id="name"
                                                name="name"
                                                placeholder="Enter Name"
                                                value="{{ old('name') }}"
                                        />
                                    </div>

                                <div class="form-group">
                                    <label for="country"
                                    >Country</label
                                    >
                                    <select
                                            class="form-select"
                                            id="country_id"
                                            name="country_id"
                                    >
                                        <option value="" >choose country</option>
                                        @foreach($countries as $country)
                                            <option value="{{$country->id}}" >
                                                {{$country->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <a href="{{  route('dashboard.city.index') }}" class="btn btn-danger">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection