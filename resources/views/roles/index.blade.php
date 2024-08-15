{{-- <a href="{{ route('tags.create') }}">Nuevo</a>

<table border="1">
    <thead>
        <th>Id</th>
        <th>Nombre</th>
    </thead>
    <tbody>
        @forelse ($tags as $tag)
            <tr>
                <td>{{ $tag->id }}</td>
                <td>{{ $tag->name }}</td>
                <td>
                    <a href="{{ route('tags.edit', $tag->id) }}">Editar</a>
                    <a href="{{ route('tags.posts', $tag->id) }}">Posts</a>

                    {{ html()->modelForm($tag)->route('tags.destroy', $tag->id)->open() }}
                    <button>Eliminar</button>
                    {{ html()->closeModelForm() }}
                </td>
            </tr>
        @empty
        @endforelse
    </tbody>
</table> --}}


<x-app-layout>
    @section('content')
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime alias repellat fugiat beatae nulla quasi excepturi, non, ab rem iure incidunt? Voluptatem magni a saepe pariatur quas repudiandae nulla aliquam?
    @endsection
</x-app-layout>