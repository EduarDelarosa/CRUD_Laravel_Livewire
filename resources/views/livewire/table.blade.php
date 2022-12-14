<h2>Listado de post</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Contenido</th>
            <th class="col-span-2">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->body }}</td>
                <td>
                    <button wire:click="edit({{ $post->id }})" class="btn btn-warning">Editar</button>
                </td>
                <td>
                    <button wire:click="destroy({{ $post->id }})" class="btn btn-danger">Eliminar</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $posts->links() }}
