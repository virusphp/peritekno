@extends('layouts.backend.master')
@section('content')
		<div class="right_col" role="main">
          <div class="">
            <div class="page-title"> </div>
            	<div class="title_left">
					<ul class="breadcrumb">
						<li><a href="{{ route('home') }}">Home</a></li>
						<li><a href="{{ route('categories.index') }}">Post</a></li>
						<li class="active">Create</li>
					</ul>
            	</div>

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
					<h3><i class="fa fa-list"></i> Tambah Post</h3>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li> </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

{!! Form::open(['route'=>'posts.store', 'files' => true, 'class'=> 'form-horizontal form-label-left']) !!}
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
	{!! Form::file('image', ['class' => 'btn btn-default col-md-6 col-xs-12']) !!}
	{!! $errors->first('image', '<p class="help-block">:message</p>') !!}

	@if (isset($posts) && $posts->image !== '')
			<div class="row">
					<div class="col-md-6">
						<br><br>
						<div class="thumbnail">
						<img src="{{ url($posts->ImagePath) }}" class="img-rounded">
					</div>
					</div>
				</div>
		@endif
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


<div class="ln_solid"></div>
<div class="form-group">
<div class="col-md-2 col-sm-2 col-xs-12 col-md-offset-3">
	{!! Form::reset('Reset', ['class' => 'btn btn-warning']) !!}
	{!! Form::submit(isset($data) ? 'Simpan' : 'Simpan', ['class' => 'btn btn-primary']) !!}
</div>
</div>
{!! Form::close() !!}

@endsection
