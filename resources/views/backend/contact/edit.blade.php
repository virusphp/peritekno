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
			<h3><i class="fa fa-list"></i> Edit Post</h3>
			<ul class="nav navbar-right panel_toolbox">
			  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
			  </li> </ul>
			<div class="clearfix"></div>
		  </div>
		  <div class="x_content">
			<br />

{!! Form::model($post, ['route' => ['blog.update', $post->id], 'files' => true, 'method' => 'put', 'class' => 'form-horizontal']) !!}
	@include('backend.blog._form')
{!! Form::close() !!}

@endsection
