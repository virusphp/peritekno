@extends('layouts.backend.master')
@section('content')
     <!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <ul class="breadcrumb">
          <li><a href="{{ route('home') }}">Dashboard</a></li>
          <li class="active">Categories</li>
        </ul>
        <div class="pull-left">
          <p><a href="{{ route('categories.create') }}" class="btn btn-primary btn-tambah"><i class="fa fa-plus"></i> Tambah</a></p>
        </div>   
      </div>
      
	  <div class="title_right">
		
      </div>
    </div>

    <div class="clearfix"></div>
   {{--  @include('layouts.partials.message') --}}
    <div class="clearfix"></div>
    
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
		  <div class="x_title">
			<h2>Categories </h2>
			<ul class="nav navbar-right panel_toolbox">
			  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
			  </li>
			</ul>
			
			<div class="clearfix"></div>
		  </div>
		  <div class="x_content">

    		@include('backend.categories.table')
		<!-- paginate -->
			<div class="row">
				<div class="col-sm-5 pull-left">
					{{ $categories->links() }}
				</div>
				<div class="clearfix"></div>

				<div class="col-sm-7 pull-right">

				</div>
			</div>
		  </div>
		
		</div>
	</div>

  </div>	
</div>
@endsection
