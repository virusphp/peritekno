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
					<div class="col-md-12 col-sm-12 col-xs-12">
						@include ('backend.blog.partials.status')
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
							@if ($onlyTrashed)
								@include('backend.blog.table-trash')
							@else
								@include('backend.blog.table')
							@endif
						</div>
					@endif

				</div>
			</div>

        </div>
    </div>
@endsection
