<x-app-layout>
  @section('content')
{{ html()->form()->route('users.store')->open() }}

@include('users.partials.form')

<button>Guardar</button>

{{ html()->form()->close() }}
@endsection
</x-app-layout>