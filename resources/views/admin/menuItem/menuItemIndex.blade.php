@extends('layouts.admin')

@section('content')
<div class="col-md-12">
    <!-- Custom Tabs -->
    <div class="card">
        <div class="card-header d-flex p-0">
            <h3 class="card-title p-3">menuItem</h3>
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
                                <li class="nav-item"><a class="nav-link active" href="#ge" data-toggle="tab">ქართული</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#en" data-toggle="tab">ინგლისური</a></li>

                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="ge">
                                    <table class="table table-bordered table-striped" id="Table">
                                        <thead>
                                            <th width="10%">სახელწოდება</th>
                                            <th width="10%">სათაური</th>
                                            <th width="15%">ტექსტი</th>
                                            <th width="15%">ფერი</th>
                                            <th width="40%">სურათი</th>
                                            <th width="10%">ქმედება</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($menuItems as $menuItem)
                                            <tr>
                                                <td>{{$menuItem->label_ge}} </td>
                                                <td>{!! $menuItem->title_ge !!} </td>
                                                <td>{!! $menuItem->body_ge !!} </td>
                                                <td>{!! $menuItem->bg_color !!} </td>


                                                <td><img src="{{asset($menuItem->image)}} " width="250px" alt=""> </td>
                                                <td>
                                                    <form action="{{ route('menuItem.destroy',  $menuItem->id )}}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit">წაშლა</button>
                                                    </form>
                                                    <a href="{{ route('menuItem.edit',  $menuItem->id)}}"
                                                        class="btn btn-success">შეცვლა</a>
                                                </td>
                                            </tr>

                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane " id="en">
                                    <table class="table table-bordered table-striped" id="Table">
                                        <thead>
                                            <th width="10%">დასახელება</th>
                                            <th width="10%">სათაური</th>
                                            <th width="15%">ტექსტი</th>
                                            <th width="15%">ფერი</th>
                                            <th width="40%">სურათი</th>
                                            <th width="10%">ქმედება</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($menuItems as $menuItem)
                                            <tr>
                                                <td>{{$menuItem->label_en}} </td>
                                                <td>{!! $menuItem->title_en !!} </td>
                                                <td>{!! $menuItem->body_en !!} </td>
                                                <td>{!! $menuItem->bg_color !!} </td>


                                                <td><img src="{{asset($menuItem->image)}} " width="250px" alt=""> </td>
                                                <td>
                                                    <form action="{{ route('menuItem.destroy',  $menuItem->id )}}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit">წაშლა</button>
                                                    </form>
                                                    <a href="{{ route('menuItem.edit',  $menuItem->id)}}"
                                                        class="btn btn-success">შეცვლა</a>
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
                    <form role="form" action=" {{ route('menuItem.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <h2>ქართული</h2>
                            <div class="form-group">
                                <label for="label_ge">დასახელება</label>
                                <input type="text" class="form-contdol" name="label_ge" placeholder="მაგარი სერვისი">
                            </div>
                            <div class="form-group">
                                <label for="title_ge">სათაური</label>
                                <textarea name="title_ge" class="textarea"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="body_ge">ტექსტი</label>
                                <textarea name="body_ge" class="textarea"></textarea>
                            </div>

                            <hr class="bg-primary">

                            <div class="box-body">
                                <h2>ინგლისური</h2>
                                <div class="form-group">
                                    <label for="label_en">დასახელება</label>
                                    <input type="text" class="form-contdol" name="label_en" placeholder="მაგარი სერვისი">
                                </div>
                                <div class="form-group">
                                    <label for="title_en">სათაური</label>
                                    <textarea name="title_en" class="textarea"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="body_en">ტექსტი</label>
                                    <textarea name="body_en" class="textarea"></textarea>
                                </div>


                                <hr class="bg-primary">


                                <div class="form-group">
                                    <label for="image">სურათი</label>
                                    <input type="file" class="form-contdol" name="image">
                                </div>
                                <div class="form-group">
                                    <label for="bg_color">ფერი</label>
                                    <input type="color" class="form-contdol" name="bg_color">
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