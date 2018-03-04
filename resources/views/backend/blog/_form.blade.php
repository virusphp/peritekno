<div class="col-md-9 col-sm-9 col-xl-12">
	<div class="x_panel">
		<div class="x_content">
			<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
				<div class="col-md-12 col-sm-12 col-xs-12">
					{!! Form::text('title', null, ['id' => 'title', 'class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Title . . .']) !!}
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

{!! Form::hidden('slug', null, ['id' => 'slug','class' => 'form-control col-md-7 col-xs-12']) !!}

<div class="col-md-3 col-sm-3 col-xs-12">
	<div class="x_panel">

		<div class="x_title">
			<h4>Category</h4>
		</div>

		<div class="x_content">

			<div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
				<div class="col-md-12 col-sm-12 col-xs-12">
				  {!! Form::select('category_id', App\Category::pluck('name', 'id'), null, ['placeholder' => 'Pilih Category', 'class' => 'form-control col-md-7 col-xs-12']) !!}
			
				  @if ($errors->has('category_id'))
						 <span class="help-block">
						 {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
						 </span>
				  @endif
				</div>
			</div>

		</div>
	</div>
</div>

<div class="col-md-3 col-sm-3 col-xs-12 widget widget_tally_box">
	<div class="x_panel">
		<div class="x_content text-center">

			<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
				<div class="fileinput fileinput-new" data-provides="fileinput">
					<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
						<img src="{{ ($post->image_thumb) ? $post->image_thumb : 'http://placehold.it/200x150&text=No+Image' }}" alt="...">
					</div>
					<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
					<div>
						<span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>{!! Form::file('image') !!}</span>
						<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
					</div>
				</div>
			</div>
			{!! $errors->first('image', '<p class="help-block">:message</p>') !!}
		</div>
	</div>
</div>
<div class="col-md-3 col-sm-3 col-xs-12 widget widget_tally_box">
	<div class="x_panel">

		<div class="x_content text-center">

			<div class="form-group">
				{!! Form::submit('Publish', ['class' => 'btn btn-primary']) !!}
			</div>

		</div>
	</div>
</div>
