<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Patient;

class Patients extends Component
{

	public $nom;
    public $prenom;
    public $updateMode = false;

	
	
	
    public function render()
    {
		$patients = Patient::all();
	   return view('livewire.patients', [
            'patients' => $patients
        ]);
		
    }
	
	   private function resetInputFields(){
         $this->nom = '';
         $this->prenom = '';
  }
	
	
	 public function store()
   {
        $validatedDate = $this->validate([
            'nom' => 'required',
            'prenom' => 'required',
        ]);

        Patient::create($validatedDate);

        session()->flash('message', 'patients Created Successfully.');

       $this->resetInputFields();

    }
	
	
	 public function delete($id)
    {
        if($id){
            Patient::where('id',$id)->delete();
            session()->flash('message', 'Patient Deleted Successfully.');
        }
    }
	
	
	
	  public function edit($id)
    {
        $this->updateMode = true;
        $Patient = Patient::where('id',$id)->first();
        $this->id = $id;
        $this->nom = $Patient->nom;
        $this->prenom = $Patient->prenom;
        
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();


    }

    public function update()
    {
        $validatedDate = $this->validate([
            'nom' => 'required',
            'prenom' => 'required',
        ]);

        if ($this->id) {
            $Patient = Patient::find($this->id);
            $Patient->update([
                'nom' => $this->nom,
                'preom' => $this->prenom,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'patients Updated Successfully.');
            $this->resetInputFields();

        }
    }
	

}

	
	
	
	
	
	

