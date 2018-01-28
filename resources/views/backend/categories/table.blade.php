                                <table class="table table-striped">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>name</th>
                                      <th>parent_id</th>
                                      <th>slug</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                    <?php $no=1; ?>
                                    @foreach($categories as $category)
                                  <tbody>
                                    <tr>
                                      <th scope="row">{{ $no++ }}</th>
                                      <td>{{ $category->name }}</td>
                                      <td>{{ $category->parent_id }}</td>
                                      <td>{{ $category->slug }}</td>
                                      <td>
                                        {!! Form::open(['route' => ['category.destroy', $category->id], 'method' => 'DELETE']) !!}
                                        <a href="{{ route ('category.edit',$category->id) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                        <button type="submit"  class="btn btn-danger btn-xs" onclick="return confirm('Apakah kamu yakin ingin Menghapus data ini')" ><i class="fa fa-trash-o"></i> Hapus </a>
                                        </button>
                                        {!! Form::close() !!}
                                      </td>
                                    </tr>
                                  </tbody>
                                  @endforeach
                                </table>
