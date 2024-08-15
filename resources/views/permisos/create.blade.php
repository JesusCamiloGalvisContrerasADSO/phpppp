{{ html()->form()->route('permisos.store')->open() }}

@include('permisos.partials.form')

<button type="submit">Guardar</button>

{{ html()->form()->close() }}
