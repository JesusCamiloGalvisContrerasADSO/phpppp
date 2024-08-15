<a href="{{ route('permisos.create') }}">Nuevo</a>

<table border="1">
    <thead>
        <th>Id</th>
        <th>Nombre</th>
    </thead>
    <tbody>
        @forelse ($permisos as $permiso)
            <tr>
                <td>{{ $permiso->id }}</td>
                <td>{{ $permiso->name }}</td>
                <td>
                    <a href="{{ route('permisos.edit', $permiso->id) }}">Editar</a>
                    <a href="{{ route('permisos.posts', $permiso->id) }}">Posts</a>

                    {{ html()->modelForm($permiso)->route('permisos.destroy', $permiso->id)->open() }}
                    <button>Eliminar</button>
                    {{ html()->closeModelForm() }}
                </td>
            </tr>
        @empty
        @endforelse
    </tbody>
</table>
