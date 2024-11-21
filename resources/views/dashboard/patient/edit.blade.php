@extends('dashboard.layouts.app')

@section('content')

    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <!-- Form to edit patients -->
                    <form method="POST" class="card" action="{{ route('dashboard.patient.update', $patients->id) }}">
                        @csrf
                        @method('PUT') <!-- استخدام PUT لتحديث البيانات -->
                        <div class="card-header">
                            <div class="card-title">Update patients</div>
                        </div>

                        <div class="card-body">
                            <!-- @include('dashboard.layouts.error') -->
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="name">patients Name</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="name"
                                            name="name"
                                            placeholder="Enter Name"
                                            value="{{ old('name', $patients->name) }}"  
                                        />
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="phone"
                                            name="phone"
                                            placeholder="Enter Phone Number"
                                            value="{{ old('phone', $patients->phone) }}"
                                        />
                                    </div>

                                    <div class="form-group">
                                        <label for="branch">Branch</label>
                                        <select
                                            class="form-select"
                                            id="branch"
                                            name="branch"
                                        >
                                            <option value="Maadi" @if($patients->branch == 'Maadi') selected @endif>Maadi</option>
                                            <option value="Nasr City" @if($patients->branch == 'Nasr City') selected @endif>Nasr City</option>
                                            <option value="Dokki" @if($patients->branch == 'Dokki') selected @endif>Dokki</option>
                                            <option value="Faisal" @if($patients->branch == 'Faisal') selected @endif>Faisal</option>
                                            <option value="Heliopolis" @if($patients->branch == 'Heliopolis') selected @endif>Heliopolis</option>
                                            <option value="Shubra" @if($patients->branch == 'Shubra') selected @endif>Shubra</option>
                                            <option value="Al-Mokattam" @if($patients->branch == 'Al-Mokattam') selected @endif>Al-Mokattam</option>
                                            <option value="Helwan" @if($patients->branch == 'Helwan') selected @endif>Helwan</option>
                                            <option value="Tanta" @if($patients->branch == 'Tanta') selected @endif>Tanta</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="specialty">Specialty</label>
                                        <select
                                            class="form-select"
                                            id="specialty"
                                            name="specialty"
                                        >
                                            <option value="Internal Medicine" @if($patients->specialty == 'Internal Medicine') selected @endif>Internal Medicine</option>
                                            <option value="Pediatrics" @if($patients->specialty == 'Pediatrics') selected @endif>Pediatrics</option>
                                            <option value="Obstetrics and Gynecology (OB/GYN)" @if($patients->specialty == 'Obstetrics and Gynecology (OB/GYN)') selected @endif>Obstetrics and Gynecology (OB/GYN)</option>
                                            <option value="Dermatology" @if($patients->specialty == 'Dermatology') selected @endif>Dermatology</option>
                                            <option value="Psychiatry" @if($patients->specialty == 'Psychiatry') selected @endif>Psychiatry</option>
                                            <option value="Dentistry" @if($patients->specialty == 'Dentistry') selected @endif>Dentistry</option>
                                            <option value="Cardiology" @if($patients->specialty == 'Cardiology') selected @endif>Cardiology</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="reservation_date">Reservation Date</label>
                                        <input
                                            type="date"
                                            class="form-control"
                                            id="reservation_date"
                                            name="reservation_date"
                                            value="{{ old('reservation_date', $patients->reservation_date) }}"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Update</button>
                            <a href="{{ route('dashboard.patient.index') }}" class="btn btn-danger">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
