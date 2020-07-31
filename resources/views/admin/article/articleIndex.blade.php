@extends('layouts.admin')

@section('title','პოსტები')

@section('content')


    <div class="col-md-12">
      <!-- Custom Tabs -->
      <div class="card">
        <div class="card-header d-flex p-0">
          <h3 class="card-title p-3">სიახლეები</h3>
          <ul class="nav nav-pills ml-auto p-2">
            <li class="nav-item"><a class="nav-link active" href="#view" data-toggle="tab">იხილეთ</a></li>
            <li class="nav-item"><a class="nav-link" href="#create" data-toggle="tab">შექმენით ახალი</a></li>
          </ul>
        </div><!-- /.card-header -->
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane active" id="view">
              <div class="card">
                <div class="card-header d-flex ">
                  <ul class="nav nav-pills ml-auto p-2">
                    <li class="nav-item"><a class="nav-link active" href="#ge" data-toggle="tab">ქართული</a></li>
                    <li class="nav-item"><a class="nav-link" href="#en" data-toggle="tab">ინგლისური</a></li>
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="ge">
                      <table class="table table-bordered table-striped" id="Table">
                        <thead>
                          <th>სათაური</th>
                          <th>ტექსტი</th>
                          <th>სურათი</th>
                          <th>გამოქვეყნების თარიღი</th>
                          <th >ქმედება</th>
                        </thead>
                        <tbody>
        
                          @foreach ($articles as $post)
                          <tr height="80px">
                            <td>{{ $post->title_ge }}</td>
                            <td>{!! $post->body_ge !!}</td>
        
                            <td> <img src="{{ asset($post->image) }} " alt="image" width="100px"></td>
                           
                            <td>
                              <dd> {{ date('M j, Y H:i', strtotime($post->created_at)) }}</dd>
                            </td>
                            <td>
                              <div class="col-md-1">
                                <form action="{{ route('article.destroy',  $post->id )}}" method="post">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-danger" type="submit">წაშლა</button>
                                </form>
                                <a href="{{ route('article.show',  $post->id)}}" class="btn btn-primary">ნახვა</a>
                                <a href="{{ route('article.edit',  $post->id)}}" class="btn btn-success">შეცვლა</a>
        
                              </div>
                            </td>
                          </tr>
                          @endforeach
        
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane " id="en">
                      <table class="table table-bordered table-striped" id="Table">
                        <thead>
                          <th>სათაური</th>
                          <th>ტექსტი</th>
                          <th>სურათი</th>
                          <th>გამოქვეყნების თარიღი</th>
                          <th >ქმედება</th>
                        </thead>
                        <tbody>
        
                          @foreach ($articles as $post)
                          <tr height="80px">
                            <td>{{ $post->title_en }}</td>
                            <td>{!! $post->body_en !!}</td>
        
                            <td> <img src="{{ asset($post->image) }} " alt="image" width="100px"></td>
                           
                            <td>
                              <dd> {{ date('M j, Y H:i', strtotime($post->created_at)) }}</dd>
                            </td>
                            <td>
                              <div class="col-md-1">
                                <form action="{{ route('article.destroy',  $post->id )}}" method="post">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-danger" type="submit">წაშლა</button>
                                </form>
                                <a href="{{ route('article.edit',  $post->id)}}" class="btn btn-success">შეცვლა</a>
        
                              </div>
                            </td>
                          </tr>
                          @endforeach
        
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>
              
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="create">
              <form action=" {{ route('article.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                  <h2>ქართული</h2>
                  <div class="form-group">
                    <label for="title_ge">სათაური</label>
                    <input type="text" class="form-control" name="title_ge" placeholder="Enter title">
                  </div>
                  <div class="form-group">
                    <label for="body_ge">კონტენტი</label>
                    <textarea name="body_ge" class="textarea"></textarea>
                  </div>

                  <hr>

                  <h2>ინგლისური</h2>
                  <div class="form-group">
                    <label for="title_en">სათაური</label>
                    <input type="text" class="form-control" name="title_en" placeholder="Enter title">
                  </div>
                  <div class="form-group">
                    <label for="body_en">კონტენტი</label>
                    <textarea name="body_en" class="textarea"></textarea>
                  </div>

                  <hr>

                  <hr>

                  <div class="form-group">
                    <label for="image">სურათი</label>
                    <input type="file"  name="image">
                  </div>
                  <div class="form-group">
                    <label for="url">URL(ლინკი)</label>
                    <input type="text" class="form-control"  name="url" placeholder="Enter URL">
                  </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content -->
        </div><!-- /.card-body -->
      </div>
      <!-- ./card -->
    </div>

@endsection