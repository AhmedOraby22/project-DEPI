@extends('web.layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">APPOINTMENT</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('reservation.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="patient_name" class="form-label">Patient Name</label>
            <input type="text" class="form-control" id="patient_name" name="patient_name" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>

        <div class="mb-3">
            <label for="branch" class="form-label">Branch</label>
            <select name="branch" id="branch" class="form-select" required>
                <option value="">Select Branch</option>
                <option value="Maadi">Maadi</option>
                <option value="Nasr City">Nasr City</option>
                <option value="Dokki">Dokki</option>
                <option value="Faisal">Faisal</option>
                <option value="Heliopolis">Heliopolis</option>
                <option value="Shubra">Shubra</option>
                <option value="Al-Mokattam">Al-Mokattam</option>
                <option value="Helwan">Helwan</option
                ><option value="Tanta">Tanta</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="specialty" class="form-label">Medical Specialty</label>
            <select name="specialty" id="specialty" class="form-select" required>
                <option value="">Select Specialty</option>
                <option value="Internal Medicine">Internal Medicine</option>
                <option value="Pediatrics">Pediatrics</option>
                <option value="Obstetrics and Gynecology (OB/GYN)">Obstetrics and Gynecology (OB/GYN)</option>
                <option value="Dermatology">Dermatology</option><option value="Psychiatry">Psychiatry</option>
                <option value="Dentistry">Dentistry</option>
                <option value="Cardiology">
            </select>
        </div>

        <div class="mb-3">
            <label for="reservation_date" class="form-label">Reservation Date</label>
            <input type="date" class="form-control" id="reservation_date" name="reservation_date" required>
        </div>

        <button type="submit" class="btn btn-primary w-100 my-5">Submit</button>
    </form>
</div>
@endsection
