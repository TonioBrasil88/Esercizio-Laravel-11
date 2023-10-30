<div>
    <div class="border border-success p-4 my-2">
        <div class="d-flex justify-content-around">
            <button class="btn btn-success" wire:click="increment">+</button>
            <button class="btn btn-warning" wire:click="decrement">-</button>
            <button class="btn btn-success" wire:click="incrementByNumber(5)">+5</button>
            <button class="btn btn-warning" wire:click="decrementByNumber(5)">-5</button>
            <label for="">Aggiungi un numero al counter</label>
            <input type="text" wire:model.live="numberToAdd">
            <p class="lead">{{ $numberToAdd }}</p>
            <button class="btn btn-primary" wire:click="addNumberToCounter">Aggiungi</button>
            <h3>{{ $count }}</h3>
        </div>
    </div>
</div>
