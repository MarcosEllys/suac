@if(Session::has('MessageDelete'))
<div class="alert">
	<button type="button" class="close" data-dismiss="alert"> × </button>
	{{{Session::get('MessageDelete')}}}
</div>
@endif