<x-app-layout>
  @section('content')
{{ html()->modelForm($user)->route('users.update', $user->id)->open() }}

@include('users.partials.form')

<button type="submit">Editar</button>

{{ html()->closeModelForm() }}
@endsection
</x-app-layout>
