@extends('layouts.admin')

@section('content')

<div class="col-md-12">
    <!-- Custom Tabs -->
<div class="card">
    <div class="card-header d-flex p-0">
      <h3 class="card-title p-3">About</h3>
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
                  @foreach ($abouts as $about)
                  <table class="table table-bordered table-striped table-hover" id="Table">
                    <tr>
                      <th>სათაური</th>
                      <td>{{ $about->title_ge }}</td>
                    </tr>
                    <tr>
                      <th>აღწერა</th>
                      <td>{!! $about->desc_ge !!}</td>
                    </tr>
                    <tr>
                      <th>სახელი</th>
                      <td>{{ $about->name_ge }}</td>
                    </tr>
                    <tr>
                      <th>სქესი</th>
                      <td>{{ $about->gender_ge }}</td>
                    </tr>
                    <tr>
                      <th>დაბადების თარიღი</th>
                      <td>{{ $about->date_of_birth_ge }}</td>
                    </tr>
                    <tr>
                      <th>ეროვნება</th>
                      <td>{{ $about->nationality_ge }}</td>
                    </tr>
                    <tr>
                      <th>ელ-ფოსტა</th>
                      <td>{{ $about->email }}</td>
                    </tr>
                    <tr>
                      <th>ტელ-ნომერი</th>
                      <td>{{ $about->phone_number }}</td>
                    </tr>
                    <tr>
                      <th>სურათი</th>
                      <td><img src="{{ asset($about->image) }} " alt="image" width="100px"></td>
                    </tr>
                    <tr>
                      <th>გამოქვეყნების თარიღი</th>
                      <td><dd> {{ date('M j, Y H:i', strtotime($about->created_at)) }}</dd></td>
                    </tr>
                    <tr>
                      <th>ქმედება</th>
                      <td>
                        <div class="col-md-1">
                          <form action="{{ route('about.destroy',  $about->id )}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">წაშლა</button>
                          </form>
                          <a href="{{ route('about.edit',  $about->id)}}" class="btn btn-success">შეცვლა</a>

                        </div>
                      </td>
                    </tr>
                  </table>
                  @endforeach
                </div>
                <div class="tab-pane" id="en">
                    <table class="table table-bordered table-striped" id="Table">
                      <thead>
                        <th>სათაური</th>
                        <th>აღწერა</th>
                        <th>სახელი</th>
                        <th>სქესი</th>
                        <th>დაბადების თარიღი</th>
                        <th>ეროვნება</th>
                        <th>ელ-ფოსტა</th>
                        <th>ტელ-ნომერი</th>
                        <th>ვებსაიტი</th>
                        <th>სურათი</th>
  
                        <th>გამოქვეყნების თარიღი</th>
                        <th width="10%">ქმედება</th>
                      </thead>
                      <tbody>
    
                        @foreach ($abouts as $about)
                        <tr height="80px">
                          <td>{{ $about->title_en }}</td>
                          <td>{!! $about->desc_en !!}</td>
                          <td>{{ $about->name_en }}</td>
                          <td>{{ $about->gender_en }}</td>
                          <td>{{ $about->date_of_birth_en }}</td>
                          <td>{{ $about->nationality_en }}</td>
                          <td>{{ $about->email }}</td>
                          <td>{{ $about->phone_number }}</td>
                          <td>{{ $about->website }}</td>
                          <td> <img src="{{ asset($about->image) }} " alt="image" width="100px"></td>
                          <td>
                            <dd> {{ date('M j, Y H:i', strtotime($about->created_at)) }}</dd>
                          </td>
                          <td>
                            <div class="col-md-1">
                              <form action="{{ route('about.destroy',  $about->id )}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">წაშლა</button>
                              </form>
                              <a href="{{ route('about.edit',  $about->id)}}" class="btn btn-success">შეცვლა</a>
    
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
          <form action=" {{ route('about.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
              <h2>ქართული</h2>
              <div class="form-group">
                <label for="title_ge">სათაური</label>
                <input type="text" class="form-control" name="title_ge" placeholder="Enter title">
              </div>
              <div class="form-group">
                <label for="desc_ge">აღწერა</label>
                <textarea name="desc_ge" class="textarea"></textarea>
              </div>
              <div class="form-group">
                <label for="name_ge">სახელი</label>
                <textarea name="name_ge" class="textarea"></textarea>
              </div>
              <div class="form-group">
                <label for="gender_ge">სქესი</label>
                <textarea name="gender_ge" class="textarea"></textarea>
              </div>
              <div class="form-group">
                <label for="birth_date_ge">დაბადების თარიღი</label>
                <input type="date" name="birth_date_ge">
              </div>
              <div class="form-group">
                <label for="nationality_ge">ეროვნება</label>
                <textarea name="nationality_ge" class="textarea"></textarea>
              </div>
              
  
              <hr>
  
              <h2>ინგლისური</h2>
              <div class="form-group">
                <label for="title_en">სათაური</label>
                <input type="text" class="form-control" name="title_en" placeholder="Enter title">
              </div>
              <div class="form-group">
                <label for="desc_en">აღწერა</label>
                <textarea name="desc_en" class="textarea"></textarea>
              </div>
              <div class="form-group">
                <label for="name_en">სახელი</label>
                <textarea name="name_en" class="textarea"></textarea>
              </div>
              <div class="form-group">
                <label for="gender_en">სქესი</label>
                <textarea name="gender_en" class="textarea"></textarea>
              </div>
              <div class="form-group">
                <label for="birth_date_en">დაბადების თარიღი</label>
                <input type="date" name="birth_date_en">
              </div>
              <div class="form-group">
                <label for="nationality_en">ეროვნება</label>
                <textarea name="nationality_en" class="textarea"></textarea>
              </div>

              <hr>
  
              <div class="form-group">
                <label for="image">სურათი</label>
                <input type="file"  name="image">
              </div>
              <div class="form-group">
                <label for="email">ელ-ფოსტა</label>
                <input type="text"  name="email">
              </div>
              <div class="form-group">
                <label for="phone_number">ტელ-ნომერი</label>
                <input type="text"  name="phone_number">
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