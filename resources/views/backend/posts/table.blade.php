	<table class="table table-responsive">
	  <thead>
		<tr>
		  <th>#</th>
		  <th>name</th>
		  <th>title</th>
		 	<th>body</th>
		  <th>Action</th>
		</tr>
	  </thead>
		<?php $no=1; ?>
		@foreach($posts as $post)
	  <tbody>
		<tr>
		  <th scope="row">{{ $no++ }}</th>
		  <td>{{ $post->author_id }}</td>
		  <td>{{ $post->TitleTable }}</td>
		  <td>{{ $post->BodyTable }}</td>
			<td>
				<a href="{{ url($post->ImagePath) }}" target="blank" class="btn btn-success btn-xs"><i class="fa fa-file-photo-o"></i> Gambar</a>
		  </td>
		  <td>
			{!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
			<a href="{{ route ('posts.edit',$post->id) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
			<button type="submit"  class="btn btn-danger btn-xs" onclick="return confirm('Apakah kamu yakin ingin Menghapus data ini')" ><i class="fa fa-trash-o"></i> Hapus </a>
			</button>
			{!! Form::close() !!}
		  </td>
		</tr>
	  </tbody>
	  @endforeach
	</table>
