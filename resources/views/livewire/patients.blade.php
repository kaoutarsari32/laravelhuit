 <div>
   @if($updateMode)
        @include('livewire.update')
    @else
        @include('livewire.create')
    @endif
 
<div><h1>livewire</h1>
   
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>nom</th>
                <th>prenom</th>
               
            </tr>
        </thead>
		 
        <tbody>
            @foreach($patients as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->nom }}</td>
                <td>{{ $value->prenom }}</td>
             <td><button wire:click="delete({{ $value->id }})" class="btn btn-danger btn-sm">Delete</button>
			<button wire:click="edit({{ $value->id }})" class="btn btn-primary btn-sm">Edit</button>
             </td>
            </tr>
            @endforeach
        </tbody>
    </table>
	</div>
</div></div>