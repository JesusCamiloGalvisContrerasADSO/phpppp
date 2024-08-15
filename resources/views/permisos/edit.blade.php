{{ html()->modelForm($permiso)->route('permisos.update', $permiso->id)->open() }}

@include('permisos.partials.form')

<button type="submit">Editar</button>

{{ html()->closeModelForm() }}
