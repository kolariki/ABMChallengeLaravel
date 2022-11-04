<div class="form-group">
    <label>Titulo</label>
    <input type="text" class="form-control" wire:model='name'>
    @error('name') <span>{{ $message }}</span> @enderror
</div>
<div class="form-group">
    <label>Created</label>
    <textarea class="form-control" wire:model='description'></textarea>
    @error('description') <span>{{ $message }}</span> @enderror
</div>
<div class="form-group">
    <label>Descripcion</label>
    <input type="number" class="form-control" wire:model='quantity'>
    @error('quantity') <span>{{ $message }}</span> @enderror
</div>
