<div class="border border-warning p-4">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Subtitle</th>
                <th scope="col">Created At</th>
                <th scope="col">@@</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
            <tr>
                <th scope="row">{{ $article->id }}</th>
                <td>{{ $article->title }}</td>
                <td>{{ $article->subtitle }}</td>
                <td>{{ $article->created_at->diffForHumans() }}</td>
                <td>
                    <button class="btn btn-danger" wire:click="delete({{ $article }})">Cancella</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>