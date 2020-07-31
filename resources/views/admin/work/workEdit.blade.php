@extends('layouts.admin')

@section('title', 'Works')

@section('content')
<form role="form" action=" {{ route('work.update', $work->id) }}" method="POST"
    enctype="multipart/form-data" class="col-12">
    @csrf
    @method('PUT')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="box-body">
                    <h2>ქართული</h2>
                    <div class="form-group">
                        <label for="work_ge">ღილაკი</label>
                        <input type="text" class="form-contdol" name="work_ge" placeholder="იხილეთ ჩვენი სერვისები"
                            value="{{ $work->work_ge }}">
                    </div>
            
                    <hr class="bg-primary">
            
            
                    <h2>ინგლისური</h2>
                    <div class="form-group">
                        <label for="work_en">ლინკი</label>
                        <input type="text" class="form-contdol" name="work_en" placeholder="იხილეთ ჩვენი სერვისები"
                            value="{{ $work->work_en }}">
                    </div>
            
            
                    <hr class="bg-primary">
            
            
                    
                </div>
            </div>
            <div class="col-lg-4">
        
                <div class="form-group">
                    <label for="image">სურათ</label>
                    <input type="file" class="form-contdol" name="image">
                </div>
                <div class="form-group">
                    <label for="bg_img">ფონი</label>
                    <input type="file" class="form-contdol" name="bg_img" >
                  </div>
                <div width="150px">
                    <img src="{{ asset($work->image) }}" height="150px">
                </div>
                <hr>
                <div width="150px">
                    <img src="{{ asset($work->bg_img) }}" height="150px">
                </div>
        
                
                <div class="box-footer m-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                

                
            </div>

            
        </div>
    </div>
   
</form>
@endsection