<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Http\Request;


use App\Models\Produit;

use Illuminate\Support\Facades\File;

////image//////
use Livewire\WithFileUploads;
use Illuminate\Support\Str;





class Produits extends Component
{
	////image//////
	use WithFileUploads;
	
	
	
	public $nom;
    public $prenom;
	public $image;
    public $updateMode = false;

    public function render()
    {
		$produits = Produit::all();
	   return view('livewire.produits', [
            'produits' => $produits
        ]);
       
    }
	
	
	 private function resetInputFields(){
         $this->nom = '';
         $this->prenom = '';
		 $tis->image = '';
  }
	
	
	// public function store(Request $request)
  // {
    //    $validatedDate = $this->validate([
      //      'nom' => 'required|max:255',
        //    'prenom' => 'required',
			// 'image' => 'nullable|mimes:jpg,jpeg,gif,png|max:20000',
        //]);
		
		//$Request['id'] = auth()->id();
        //$Request['nom'] = $this->nom;
        //$Request['prenom'] = $this->prenom;
        //$Request['image'] = $this->image;
		
		
	//$extension = $Request->file('image')->extension();
	//$name = uniqid('', true);
	//$new_name = $name.".".$extension;
	 
	 //$Request->file('image')->storeAs("image", $new_name);
	 
	 //$Produit->image = $new_name;

     //Produit::create($validatedDate);

     //session()->flash('message', 'patients Created Successfully.');

     //$this->resetInputFields(); 

    //}
	
  public function save()
    {
        $this->validate([
            'nom'         => 'required|max:255',
            'prenom'      => 'required',
            'image'         => 'nullable|mimes:jpg,jpeg,gif,png|max:20000',
        ]);

        $data['id']    = auth()->id();
        $data['nom']      = $this->nom;
        $data['prenom']       = $this->prenom;
       
    $extension = $data->file('image')->extension();
	 $name = uniqid('', true);
	 $new_name = $name.".".$extension;
	 
	 $data->file('image')->storeAs("image", $new_name);
	 
	 $produit->image = $new_name;
		
	
     $produit->save();
	 
	 session()->flash('success','le produit a été bien enregistrer');
	 
	
        

    }
	
	
}
