<?php

namespace Database\Seeders;
use App\Models\Patient;
use Illuminate\Database\Seeder;

class patientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
		
		
		
		 Patient::create([
            'nom' => 'sari',
            'prenom' => 'kaouter',
           
        ]);
        Patient::create([
            'nom' => 'Minds CMS',
            'prenom' => 'mindscms',
           
        ]);
        Patient::create([
            'nom' => 'Another User',
            'prenom' => 'another',
          
        ]);
	   
	   
	    Patient::create([
            'nom' => 'aicha',
            'prenom' => 'hilane',
           
        ]);
        Patient::create([
            'nom' => 'abdekader sari',
            'prenom' => 'mindscms',
           
        ]);
		
		
		
		
		
		
		
    }
}
