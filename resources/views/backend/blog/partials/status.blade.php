<div class="pull-right">
	<?php $links = [] ?>
	@foreach ($statusList as $key => $value)
		@if ($value)
			<?php $selected = Request::get('status') == $key ? 'selected-status' : '' ?>
			<?php $links[] = "<a href=\"?status={$key}\" class=\"btn btn-sm btn-{$key} {$selected}\"><i id=\"{$key}\" class=\"fa\"> </i> {$value}</a>" ?>
		@endif
	@endforeach
	{!! implode(' ', $links) !!}
</div>
@push ('scripts')
<script>
	$('#all').addClass("fa-list-alt");
	$('#published').addClass("fa-globe");
	$('#scheduled').addClass("fa-calendar");
	$('#draft').addClass("fa-pencil-square");
	$('#trash').addClass("fa-trash");
</script>
@endpush
