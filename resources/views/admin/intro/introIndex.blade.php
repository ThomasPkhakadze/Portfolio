@extends('layouts.admin')

@section('content')
<div class="col-md-12">
    <!-- Custom Tabs -->
    <div class="card">
      <div class="card-header d-flex p-0">
        <h3 class="card-title p-3">intro</h3>
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
                <th width="10%">სათაური</th>
                <th width="10%">აღწერა</th>
                <th width="15%">ღილაკი</th>
                <th width="15%">URL</th>
                <th width="40%">სურათი</th>
                <th width="10%">ქმედება</th>


              </thead>
              <tbody>
                @foreach ($intros as $intro)
                <tr>
                  <td>{!! $intro->title_ge !!} </td>
                  <td>{!! $intro->desc_ge !!} </td>
                  <td>{{$intro->link_ge}} </td>
                  <td>{{ $intro->url }}</td>
                  <td><img src="{{asset($intro->image)}} " width="250px" alt=""> </td>
                  <td>
                    <form action="{{ route('intro.destroy',  $intro->id )}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit">წაშლა</button>
                    </form>
                    <a href="{{ route('intro.edit',  $intro->id)}}" class="btn btn-success">შეცვლა</a>
                  </td>
                </tr>

                @endforeach

              </tbody>
            </table>
          </div>
          <!-- /.tab-pane -->
          <div class="tab-pane" id="create">
            <form role="form" action=" {{ route('intro.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="box-body">
                <h2>ქართული</h2>
                <div class="form-group">
                  <label for="title_ge">სათაური</label>
                  <textarea name="title_ge" class="textarea"></textarea>
                </div>
                <div class="form-group">
                  <label for="desc_ge">აღწერა</label>
                  <textarea name="desc_ge" class="textarea"></textarea>
                </div>
                <div class="form-group">
                  <label for="link_ge">ღილაკი</label>
                  <input type="text" class="form-contdol" name="link_ge" placeholder="იხილეთ ჩვენი სერვისები">
                </div>

                <hr class="bg-primary">

                <div class="box-body">
                  <h2>ინგლისური</h2>
                  <div class="form-group">
                    <label for="title_en">სათაური</label>
                    <textarea name="title_en" class="textarea"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="desc_en">აღწერა</label>
                    <textarea name="desc_en" class="textarea"></textarea>

                  </div>
                  <div class="form-group">
                    <label for="link_en">ლინკი</label>
                    <input type="text" class="form-contdol" name="link_en" placeholder="იხილეთ ჩვენი სერვისები">
                  </div>


                  <hr class="bg-primary">


                  <div class="form-group">
                    <label for="url">ლინკი</label>
                    <input type="text" class="form-contdol" name="url" placeholder="blog, chuchu?">
                  </div>

                  <div class="form-group">
                    <label for="image">ლინკი</label>
                    <input type="file" class="form-contdol" name="image" >
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