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
                <label for="patient_name" class="form-label">patient name 
                </label>
                <input type="text" class="form-control" id="patient_name" name="patient_name" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>

            <div class="mb-3">
                <label for="branch" class="form-label">Branch</label>
                <!-- <select class="form-select" id="branch" name="branch" required>
                    <option value="">اختر الفرع</option>
                    <option value="فرع 1">فرع 1</option>
                    <option value="فرع 2">فرع 2</option>
                </select> -->
                <select name="branch" id="branch" class="form-select" aria-required="true" aria-invalid="false"><option value="" selected="selected" class="gf_placeholder">Branches</option><option value="Maadi">Maadi</option><option value="Nasr City">Nasr City</option><option value="6 October">6 October</option><option value="Dokki">Dokki</option><option value="Faisal">Faisal</option><option value="Heliopolis">Heliopolis</option><option value="Shubra">Shubra</option><option value="Al-Mokattam">Al-Mokattam</option><option value="Helwan">Helwan</option><option value="Tanta">Tanta</option><option value="Mansoura">Mansoura</option><option value="Asyut">Asyut</option><option value="Zagazig">Zagazig</option><option value="Imbabah">Imbabah</option><option value="Beni Suef">Beni Suef</option><option value="New Cairo">New Cairo</option><option value="Suez">Suez</option><option value="Alexandria Roshdy">Alexandria Roshdy</option><option value="Alexandria Raml">Alexandria Raml</option><option value="Shebeen El-Kom">Shebeen El-Kom</option><option value="Faiyum">Faiyum</option><option value="Helmeyat EL Zaytoun">Helmeyat EL Zaytoun</option><option value="Shubra Al Khaymah City in Egypt">Shubra Al Khaymah City in Egypt</option></select>
 
            </div>

            <div class="mb-3">
                <label for="specialty" class="form-label">Medical Specialtyl </label>
                <!-- <select class="form-select" id="specialty" name="specialty" required>
                    <option value="">اختر التخصص</option>
                    <option value="تخصص 1">تخصص 1</option>
                    <option value="تخصص 2">تخصص 2</option>
                </select> -->
                <select name="specialty" id="specialty" class="form-select" aria-required="true" aria-invalid="false"><option value="" selected="selected" class="gf_placeholder">Medical Specialty</option><option value="Internal Medicine">Internal Medicine</option><option value="Pediatrics">Pediatrics</option><option value="Orthopedics">Orthopedics</option><option value="Ear, Nose and Throat (ENT)">Ear, Nose and Throat (ENT)</option><option value="Obstetrics and Gynecology (OB/GYN)">Obstetrics and Gynecology (OB/GYN)</option><option value="Dermatology">Dermatology</option><option value="Psychiatry">Psychiatry</option><option value="Dentistry">Dentistry</option><option value="Cardiology">Cardiology</option><option value="Family medicine">Family medicine</option><option value="Physiotherapy">Physiotherapy</option><option value="Pulmonology">Pulmonology</option></select>
 

            </div>

            <div class="mb-3">
                <label for="reservation_date" class="form-label">Reservation date</label>
                <input type="date" class="form-control" id="reservation_date" name="reservation_date" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">submet</button>
        </form>
    </div>
    @endsection
