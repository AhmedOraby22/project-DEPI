@extends('web.layouts.app')

@section('content')
<style>
        /* تصميم سريع */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .about-section {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 50px;
        }
        .about-image {
            width: 50%;
            max-width: 400px;
        }
        .about-content {
            max-width: 600px;
            margin-left: 20px;
        }
        .about-content h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        .about-content p {
            line-height: 1.6;
            margin-bottom: 20px;
        }
        .about-content ul {
            list-style: none;
            padding: 0;
        }
        .about-content ul li {
            margin-bottom: 10px;
        }
        .about-content ul li:before {
            content: "✔️";
            margin-right: 10px;
        }
        .about-contact {
            margin-top: 20px;
        }
        .about-contact a {
            display: inline-block;
            background: #007bff;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
        .about-contact a:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
<div style="position: relative; text-align: center; color: white;">
    <!-- خلفية الصورة -->
    <div style="
        background-image: url('{{ asset('web_asset/public/assets/img/gallery/back.jpg') }}');
       
        background-size: cover;
        background-position: center;
        height: 300px;
        display: flex;
        justify-content: center;
        align-items: center;
    ">
        
        <div >
            <h1 style="font-size: 36px; margin: 0;">About Us</h1>
            <p style="margin: 10px 0; font-size: 18px;">
            <a href="{{ route('home') }}" style="color: blue; text-decoration: none;">
    <i class="fa fa-home"></i> Home 
    <i class="p-2 "> > </i>
</a> 
                <a  href="{{ route('about-us') }}"style="color: blue; text-decoration: none;">
               
                    <i class="  ">About Us</i>
                </a>
            </p>
        </div>
    </div>
</div>

<div style="display: flex; justify-content: center; align-items: center; height: 30vh; text-align: center;">
    <div style="padding: 20px;">
        <h2>Welcome to Our Medical Center</h2>
        <p>
            Our mission is to provide high-quality care to all patients, ensuring a professional and welcoming environment.
        </p>
    </div>
</div>

<div class="about-section">
    <img  src="{{asset('web_asset/public/assets/img/gallery/doctor.jpg')}}" alt="Doctor" class="about-image">
    <div class="about-content">
        <p>WHAT ABOUT US</p>
        <h2>The Heart And Science Of Medic Test</h2>
        <p>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour or randomised words.
        </p>
        <ul>
            <li>Intervention Success</li>
            <li>Quality of Care Services</li>
            <li>Client Satisfaction</li>
            <li>Happy with Staff</li>
            <li>Infection Prevention</li>
            <li>Patient Experience</li>
        </ul>
        <div class="about-contact">
            <p>+1 (212) 255-5511</p>
            <a href="#">Do you have any question?</a>
        </div>
    </div>
</div>
@endsection
