



    
<div><h1>livewire</h1>

<!-------search---->
   <input wire:model="search" type="text" placeholder="Search posts by title...">
   <!------------------------>
   
   
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>nom</th>
                <th>prenom</th>
               
            </tr>
        </thead>
		 
        <tbody>
            @foreach($clients as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->nom }}</td>
                <td>{{ $value->prenom }}</td>
             
            </tr>
            @endforeach
			
			{{ $clients->links() }}
			
			{{ $name }}

			
        </tbody>
    </table>
</div>