@extends('layouts.admin')

@section('content')
<div class="col-md-12">
    <!-- Custom Tabs -->
    <div class="card">
      <div class="card-header d-flex p-0">
        <h3 class="card-title p-3">Work</h3>
        <ul class="nav nav-pills ml-auto p-2">
          <li class="nav-item"><a class="nav-link active" href="#view" data-toggle="tab">იხილეთ</a></li>
          <li class="nav-item"><a class="nav-link" href="#create" data-toggle="tab">შექმენით ახალი</a></li>
        </ul>
      </div><!-- /.card-header -->
      <div class="card-body">
        <div class="tab-content">
          <div class="tab-pane active" id="view">
            <table id="Table" class="table table-bordered table-striped">
              <thead>
                <th width="15%">ქართულად</th>
                <th width="25%">ინგლისურად</th>
                <th width="30%">სურათი</th>
                <th width="30%">ფონი </th>
                <th width="5%">ქმედება</th>


              </thead>
              <tbody>
                @foreach ($works as $work)
                <tr>
                  <td>{{$work->work_ge}} </td>
                  <td>{!! $work->work_en !!} </td>
                  <td><img src="{{asset($work->image)}} " width="250px" alt=""> </td>
                  <td><img src="{{asset($work->bg_img)}} " width="250px" alt=""> </td>

                  <td>
                    <form action="{{ route('work.destroy',  $work->id )}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit">წაშლა</button>
                    </form>
                    <a href="{{ route('work.edit',  $work->id)}}" class="btn btn-success">შეცვლა</a>
                  </td>
                </tr>

                @endforeach

              </tbody>
            </table>
          </div>
          <!-- /.tab-pane -->
          <div class="tab-pane" id="create">
            <form role="form" action=" {{ route('work.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="box-body">
                <h2>ქართული</h2>
                <div class="form-group">
                  <label for="work_ge">სამუჟაო</label>
                  <input type="text" class="form-contdol" name="work_ge" placeholder="იხილეთ ჩვენი სერვისები">
                </div>

                <hr class="bg-primary">

                <div class="box-body">
                  <h2>ინგლისური</h2>
                  <div class="form-group">
                    <label for="work_en">სამუშო</label>
                    <input type="text" class="form-contdol" name="work_en" placeholder="იხილეთ ჩვენი სერვისები">
                  </div>

                  <hr class="bg-primary">

                  <div class="form-group">
                    <label for="image">სურათი</label>
                    <input type="file" class="form-contdol" name="image" >
                  </div>

                  <hr class="bg-primary">

                  <div class="form-group">
                    <label for="bg_img">საერთო ფონი</label>
                    <input type="file" class="form-contdol" name="bg_img" >
                  </div>
                  
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