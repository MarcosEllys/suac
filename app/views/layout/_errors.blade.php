@foreach($errors->all() as $message)

	<div class="alert">
		<button type="button" class="close" data-dismiss="alert">×</button>
		{{ $message }}
	</div>

@endforeach