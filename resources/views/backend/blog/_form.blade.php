<div class="col-md-9 col-sm-9 col-xl-12">
	<div class="x_panel">
		<div class="x_content">
			<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
				<div class="col-md-12 col-sm-12 col-xs-12">
					{!! Form::text('title', null, ['class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Title . . .']) !!}
					{!! $errors->first('title', '<p class="help-block">:message</p>') !!}
				</div>
			</div>

			<div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
				<div class="col-md-12 col-sm-12 col-xs-12">
					{!! Form::textarea('body', null, ['id' => 'editor', 'class'=>'form-control'])!!}
					{!! $errors->first('body', '<p class="help-block">:message</p>') !!}
				</div>
			</div>
		</div>
	</div>
</div>

<div class="col-md-3 col-sm-3 col-xs-12">
	<div class="x_panel">

		<div class="x_title">
			<h4>Gambar</h4>
		</div>

		<div class="x_content">

			<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
				{!! Form::label('image', 'Gambar', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
				<div class="col-md-6 col-sm-6 col-xs-12">
					{!! Form::file('image') !!}
					{!! $errors->first('image', '<p class="help-block">:message</p>') !!}
				</div>
			</div>

		</div>
	</div>
</div>

<div class="col-md-3 col-sm-3 col-xs-12">
	<div class="x_panel">

		<div class="x_title">
			<h4>Lari up</h4>
		</div>

		<div class="x_content">

			{!! Form::hidden('author_id', 1) !!}
			<div class="form-group">
				<div class="col-md-2 col-sm-2 col-xs-12 col-md-offset-3">
					{!! Form::submit(isset($data) ? 'Simpan' : 'Simpan', ['class' => 'btn btn-primary']) !!}
				</div>
			</div>

		</div>
	</div>
</div>
@push('scripts')
<script>
// tambahkan code tiny mce di sini
    tinymce.init({
        selector: "textarea#editor"
    });
</script>
@endpush
