<x-app-layout>
  @section('content')
{{ html()->form()->route('tags.store')->open() }}

@include('tags.partials.form')

<button type="submit">Guardar</button>

{{ html()->form()->close() }}

@endsection
</x-app-layout>