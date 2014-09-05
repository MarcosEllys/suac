@section('content')

{{ Form::open(array('action' => 'PeoplesreferencesController@store')) }}

	{{ Form::label('nome','Nome da pessoa referenciada')}}
	{{ Form::text('name') }}

	{{ Form::submit('Save') }}

{{ Form::close() }}

@stop