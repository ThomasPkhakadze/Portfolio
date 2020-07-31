@extends('layouts.admin')

@section('content')

<div class="col-md-12">
    <!-- Custom Tabs -->
<div class="card">
    <div class="card-header d-flex p-0">
      <h3 class="card-title p-3">სერვისები</h3>
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
                      <th>განათლება</th>
                      <th>გამოცდილება</th>
                      <th width="10%">ქმედება</th>
                    </thead>
                    <tbody>
  
                      @foreach ($facts as $fact)
                      <tr height="80px">
                        <td>{!! $fact->education_ge !!}</td>
                        <td>{!! $fact->experience_ge !!}</td>


                        <td> <img src="{{ asset($fact->image) }} " alt="image" width="100px"></td>
                        <td>
                          <dd> {{ date('M j, Y H:i', strtotime($fact->created_at)) }}</dd>
                        </td>
                        <td>
                          <div class="col-md-1">
                            <form action="{{ route('fact.destroy',  $fact->id )}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger" type="submit">წაშლა</button>
                            </form>
                            <a href="{{ route('fact.edit',  $fact->id)}}" class="btn btn-success">შეცვლა</a>
  
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
                      <th>განათლება</th>
                      <th>გამოცდილება</th>
                      <th width="10%">ქმედება</th>
                    </thead>
                    <tbody>
  
                      @foreach ($facts as $fact)
                      <tr height="80px">
                        <td>{!! $fact->education_en !!}</td>
                        <td>{!! $fact->experience_en !!}</td>
                        <td>
                          <dd> {{ date('M j, Y H:i', strtotime($fact->created_at)) }}</dd>
                        </td>
                        <td>
                          <div class="col-md-1">
                            <form action="{{ route('fact.destroy',  $fact->id )}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger" type="submit">წაშლა</button>
                            </form>
                            <a href="{{ route('fact.edit',  $fact->id)}}" class="btn btn-success">შეცვლა</a>
  
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
          <form action=" {{ route('fact.store') }}" method="POST">
            @csrf
            <div class="box-body">
              <h2>ქართული</h2>
              
              <div class="form-group">
                <label for="education_ge">განათლება</label>
                <textarea name="education_ge" class="textarea"></textarea>
              </div>

              <div class="form-group">
                <label for="experience_ge">გამოცდილება</label>
                <textarea name="experience_ge" class="textarea"></textarea>
              </div>


  
              <hr>
  
              <h2>ინგლისური</h2>
              
              <div class="form-group">
                <label for="education_en">განათლება</label>
                <textarea name="education_en" class="textarea"></textarea>
              </div>

              <div class="form-group">
                <label for="experience_en">გამოცდილება</label>
                <textarea name="experience_en" class="textarea"></textarea>
              </div>
  
              <hr>
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