                        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                          {!! Form::label('title','Title',['class' => 'control-label col-md-1 col-sm-1 col-xs-12']) !!}
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            {!! Form::text('title', null, ['class' => 'form-control col-md-7 col-xs-12']) !!}
                            {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
                          </div>
                        </div>
                        
                        <div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
                            {!! Form::label('body', 'Body', ['class'=>'control-label col-md-1 col-sm-1 col-xs-12']) !!}
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              {!! Form::textarea('body', null, ['class'=>'form-control'])!!}
                              {!! $errors->first('body', '<p class="help-block">:message</p>') !!}
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
  
  
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_content">  
                          <div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
                              {!! Form::label('category_id','Category',['class' => 'control-label col-md-1 col-sm-1 col-xs-12']) !!} 
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                {!! Form::select('category_id', App\Category::pluck('name', 'id'), null, ['placeholder' => 'Pilih Category', 'class' => 'form-control col-md-7 col-xs-12']) !!}
                          
                                @if ($errors->has('category_id'))
                                       <span class="help-block">
                                       {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
                                       </span>
                                @endif
                          </div>
                            </div>
                            <br><br><br>
                          {{--  {!! Form::hidden('author_id', Auth::user()->id) !!}  --}}
                          <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
                          {!! Form::label('image', 'Gambar', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            {!! Form::file('image') !!}
                            {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
                        
                            {{--  @if (isset($post) && $post->image !== '')
                              <div class="row">
                                  <div class="col-md-6">
                                    <br><br>
                                    <div class="thumbnail">
                                    <img src="{{ url($post->ImageUrl) }}" class="img-rounded">
                                  </div>
                                  </div>
                                </div>
                            @endif  --}}
                          </div>
                        </div>
                        <br><br><br>
                        
                            <div class="form-group {{ $errors->has('tanggal_publish') ? 'has-error' : '' }}">
                            {!! Form::label('tanggal_publish','Tanggal Publish',['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              {!! Form::date('tanggal_publish', null, ['class' => 'form-control col-md-7 col-xs-12']) !!}
                              {!! $errors->first('tanggal_publish', '<p class="help-block">:message</p>') !!}
                            </div>
                          </div>
                          
                          <br><br><br>
                          <div class="control-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Input Tags</label>
                              <div class="col-md-12 col-sm-12 col-xs-12">
                                <input id="tags_1" type="text" class="tags form-control" value="social, adverts, sales" />
                                <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                              </div>
                            </div>

                      <br><br><br>
                      <div class="ln_solid"></div>
                        <div class="form-group">
                          <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                            <button type="button" class="btn btn-danger">Cancel</button>
                            {!! Form::reset('Reset', ['class' => 'btn btn-warning']) !!}
							              {!! Form::submit(isset($data) ? 'Simpan' : 'Simpan', ['class' => 'btn btn-primary']) !!}
                          </div>
                        </div>
                      </div>
                      {!! Form::close() !!}
                    </div>
                  </div>
                </div>
              </div>
