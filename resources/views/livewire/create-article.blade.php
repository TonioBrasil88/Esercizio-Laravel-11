<div class="border border-warning rounded p-4">
    @if ($dataSended)
        <div class="alert alert-primary" role="alert">
            Dati inviati!
        </div>
    @else

        <form wire:submit="store">
            <div class="mb-3">
                <label for="title" class="form-label">Title <small class="fst-italic">({{ $title }})</small></label>
                <input type="text" wire:model.blur="title" class="form-control @error('title') is-invalid @enderror">
                @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="subtitle" class="form-label">Subtitle <small class="fst-italic">({{ $subtitle }})</small></label>
                <input type="text" class="form-control @error('subtitle') is-invalid @enderror" wire:model.blur="subtitle">
                @error('subtitle')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">body <small class="fst-italic">({{ $body }})</small></label>
                <textarea class="form-control @error('body') is-invalid @enderror" col="30" rows="10" wire:model.blur="body"></textarea>
                @error('body')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-warning">Crea</button>
        </form>

    @endif
</div>