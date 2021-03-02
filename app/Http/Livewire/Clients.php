<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Client;
use Livewire\WithPagination;

class Clients extends Component
{ 

   use withPagination;
    protected $paginationTheme = 'bootstrap';

   public $name;
   public $search="";
   
 
   
    public function render()
    {

		$clients = null;
		if($this->search!="")
			 
		return view('livewire.clients', ['clients' => Client::where('nom','like','%'.$this->search.'')->paginate(5)]);
		else return view('livewire.clients', ['clients' => Client::paginate(5)]);
		
		
 		 
		////////////////AFFICHAGE SANS PAGINATION//////////////////////
		// return view('livewire.clientskkk', [
          //  'clients' 
       // ]);
		
    }
	

	
	

	
	
	
	
	
}



