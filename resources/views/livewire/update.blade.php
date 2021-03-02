

<form>
    <div class="form-group">
        <input type="hidden" wire:model="id">
        <label for="exampleFormControlInput1">Name</label>
        <input type="text" class="form-control" wire:model="nom" id="exampleFormControlInput1" placeholder="Enter Name">
        @error('nom') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Email address</label>
        <input type="prenom" class="form-control" wire:model="prenom" id="exampleFormControlInput2" placeholder="Enter Email">
        @error('prenom') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <button wire:click.prevent="update()" class="btn btn-dark">Update</button>
    <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
</form>