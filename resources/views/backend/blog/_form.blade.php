
<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
	{!! Form::label('title','Title',['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
	<div class="col-md-6 col-sm-6 col-xs-12">
		{!! Form::text('title', null, ['class' => 'form-control col-md-7 col-xs-12']) !!}
		{!! $errors->first('title', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
	{!! Form::label('image', 'Gambar', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
	<div class="col-md-6 col-sm-6 col-xs-12">
		{!! Form::file('image') !!}
		{!! $errors->first('image', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
	{!! Form::label('body', 'Body', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
	<div class="col-md-6 col-sm-6 col-xs-12">
		{!! Form::textarea('body', null, ['class'=>'form-control'])!!}
		{!! $errors->first('body', '<p class="help-block">:message</p>') !!}
	</div>
</div>

{!! Form::hidden('author_id', 1) !!}

<div class="form-group">
	<div class="col-md-2 col-sm-2 col-xs-12 col-md-offset-3">
		{!! Form::reset('Reset', ['class' => 'btn btn-warning']) !!}
		{!! Form::submit(isset($data) ? 'Simpan' : 'Simpan', ['class' => 'btn btn-primary']) !!}
	</div>
</div>
@push('scripts')
<script>
// tambahkan code tiny mce di sini
    tinymce.init({
        selector: "textarea#body"
    });
</script>
@endpush
