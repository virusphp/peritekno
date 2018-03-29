	<table class="table table-responsive table-bordered table-striped jambo_table bulk_action">
	  <thead>
		<tr>
			<th>#</th>
			<th>Title</th>
			<th>Author</th>
			<th>Category</th>
			<th>Date</th>
			<th>Action</th>
		</tr>
	  </thead>
		<?php $no=1; ?>
		@foreach($posts as $post)
	  <tbody>
		<tr>
			<td scope="row">{{ $no++ }}</td>
			<td>{{ substr($post->title,0, 50) }}{{ strlen($post->title) > 50 ? "..." : "" }}</td>
			<td>{{ $post->author->name }}</td>
			<td>{{ $post->category->name }}</td>
			<td>
				<abbr title="{{ $post->dateFormatted(true) }}">{{ $post->dateFormatted() }}</abbr>
			</td>
			<td>
				{!! Form::open(['style' => 'display:inline-block;', 'method' => 'PUT', 'route' => ['blog.restore', $post->id] ]) !!}
					<button title="Restore" class="btn btn-warning btn-xs">
						<i class="fa fa-refresh"></i> 
					</button>
				{!! Form::close() !!}
				{!! Form::open(['style' => 'display:inline-block;', 'route' => ['blog.force-destroy', $post->id], 'method' => 'DELETE']) !!}
					<button title="Delete Permanent" type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Apakah kamu yakin ingin Menghapus data ini Permanent!!!!!')" >
						<i class="fa fa-times"></i> 
					</button>
				{!! Form::close() !!}
			</td>
		</tr>
	  </tbody>
	  @endforeach
	</table>
