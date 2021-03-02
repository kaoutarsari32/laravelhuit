



  <form>
    <div class="form-group">
        <label for="exampleFormControlInput1">nom</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name" wire:model="nom">
        @error('nom') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">prenom</label>
        <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="prenom" placeholder="Enter prenom">
        @error('prenom') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <button wire:click.prevent="store()" class="btn btn-success">Save</button>
</form>