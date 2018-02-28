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

           
              <div class="row">
									<div class="col-md-6 col-xs-12">
										<div class="x_panel">
											<div class="x_content">

				{!! Form::open(['route'=>'blog.store', 'method' => 'POST', 'class'=> 'form-horizontal form-label-left', 'files' => true]) !!}
				@include('backend.blog._form')
@endsection
