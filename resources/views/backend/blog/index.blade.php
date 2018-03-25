@extends('layouts.backend.master')
@section('content')
     <!-- page content -->
    <div class="right_col" role="main">
        <div class="">

            <div class="page-title">

				<div class="title_left">
					<ul class="breadcrumb">
						<li><a href="{{ route('home') }}">Home</a></li>
						<li class="active">Post</li>
					</ul>
				</div>

				<div class="title_right">
					<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search for...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">Go!</button>
							</span>
						</div>
					</div>
				</div>

            </div>

            <div class="clearfix"></div>

            <div class="col-md-12 col-sm-12 col-xs-12">
				<p><a href="{{ route('blog.create') }}"><button class="btn btn-primary btn-sm">Tambah</button></a></p>

                <div class="x_panel">
					@include('layouts.backend.partials.message')

					@if (! $posts->count())
						<div class="alert alert-danger">
							<strong>No Record</strong>
						</div>
					@else
						<div class="x_content">
							@include('backend.blog.table')
						</div>
					@endif

				</div>
			</div>

        </div>
    </div>
@endsection
