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
			<p>Category</p>
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

<div class="col-md-3 col-sm-3 col-xs-12">
	<div class="x_panel">
	 	<div class="x_content">
			<div class="row">
				<div class="image view view-first" style="width:224px; height:120px;">
					 <img src="{{ ($post->image_thumb) ? $post->image_thumb : 'http://placehold.it/224x120&text=No+Image' }}" class="img" id="img" alt="...">
					{!! Form::file('image', ['id' => 'image', 'class' => 'image-thumb']) !!}
				</div>
				<div class="clearfix"></div>
				<div class="text-center">
					<button type="button" id="browser_file" class="btn btn-primary form-control">
						<i class="fa fa-camera"></i> 
					</button>
				</div>
			</div>
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

