<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentsTableSeeder extends Seeder
{
    public function run()
    { $clinics = [
    "General Practice Clinic",
    "Pediatric Clinic",
    "Dental Clinic",
    "Dermatology Clinic",
    "Orthopedic Clinic",
    "Cardiology Clinic",
    "Gynecology Clinic",
    "ENT Clinic",
    "Psychiatric Clinic",
    "Physical Therapy Clinic"
];
foreach ($clinics as $clinicName) {
        Department::create([
                    'name' => $clinicName,
                    'status' => '1',
                    'avatar' => fake()->imageUrl(200, 200, 'people', true, 'Avatar'), // Generate a fake avatar URL
                ]);
           

        
    }
}
}