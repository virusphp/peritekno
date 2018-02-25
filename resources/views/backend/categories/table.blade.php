<div class="table-responsive">
	<table class="table table-bordered table-striped jambo_table bulk_action">
	<thead>
		<tr>
			<th># No </th>
			<th>Nama</th>
			<th>Created at</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($categories as $category)
		<tr>
			<td>{{ $loop->iteration }}
			<td>{{ $category->name }}</td>
			<td>{{ $category->created_at }}</td>
			<td>
				{!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!}
					<a href="{{ route ('categories.edit',$category->id) }}" class="btn btn-xs btn-warning">
						<i class="fa fa-pencil"></i> 
					</a>
					<button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Apakah kamu yakin ingin Menghapus data ini')" >
						<i class="fa fa-trash-o"></i> 
					</button>
				{!! Form::close() !!}
			</td>

		</tr>
		@endforeach
	</tbody>
	</table>
</div>
