<?php

namespace Database\Seeders;
use App\Models\Client;

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
		
		 Client::create([
            'nom' => 'sari',
            'prenom' => 'kaouter',
           
        ]);
        Client::create([
            'nom' => 'Minds CMS',
            'prenom' => 'mindscms',
           
        ]);
        Client::create([
            'nom' => 'Another User',
            'prenom' => 'another',
          
        ]);
	   
	   
	    Client::create([
            'nom' => 'aicha',
            'prenom' => 'hilane',
           
        ]);
        Client::create([
            'nom' => 'abdekader sari',
            'prenom' => 'mindscms',
           
        ]);
		
		
		
		
		
		 Client::create([
            'nom' => 'sari',
            'prenom' => 'kaouter',
           
        ]);
        Client::create([
            'nom' => 'Minds CMS',
            'prenom' => 'mindscms',
           
        ]);
        Client::create([
            'nom' => 'aaa rrr',
            'prenom' => 'ddd',
          
        ]);
	   
	   
	    Client::create([
            'nom' => 'rrr',
            'prenom' => 'fff',
           
        ]);
        Client::create([
            'nom' => 'zzze ggg',
            'prenom' => 'aaa',
           
        ]);
		
    }
}
