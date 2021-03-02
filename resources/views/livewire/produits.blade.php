 <div>
   
 @include('livewire.createpro')
<div><h1>livewire</h1>
   
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>nom</th>
                <th>prenom</th>
				<th>image</th>
               
            </tr>
        </thead>
		 
        <tbody>
            @foreach($produits as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->nom }}</td>
                <td>{{ $value->prenom }}</td>
			
				<td><img src="{{ asset('assets/image/'. $value->image) }} " class="img-fluid" style="max-width: 50px ;"></td>
				
					
            
             </td>
            </tr>
            @endforeach
        </tbody>
    </table>
	</div>
</div></div>