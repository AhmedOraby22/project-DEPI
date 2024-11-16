@extends('dashboard.layouts.app')
@section('content')

    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" class="card" action="{{ route('dashboard.blog.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <div class="card-title">Create Blog</div>
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
                                        <label for="title">Title</label>
                                        <input
                                                type="text"
                                                class="form-control"
                                                id="title"
                                                name="title"
                                                placeholder="Enter Title"
                                                value="{{ old('title') }}"
                                        />
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Description</label>
                                        <textarea
                                                type="text"
                                                class="form-control"
                                                id="description"
                                                name="description"
                                        ></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFileSm" class="form-label">Upload Image</label>
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" name="avatar">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <a href="{{  route('dashboard.blog.index') }}" class="btn btn-danger">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection