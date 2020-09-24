@extends('layouts.admin')

@section('title', 'Edit About Me')

@section('content')
<form role="form" action=" {{ route('intro.update', $intro->id) }}" method="POST"
    enctype="multipart/form-data" class="col-12">
    @csrf
    @method('PUT')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="box-body">
                    <h2>ქართული</h2>
                    <div class="form-group">
                        <label for="title_ge">სათაური</label>
                        <textarea name="title_ge" class="textarea">{{ $intro->title_ge }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="desc_ge">აღწერა</label>
                        <textarea name="desc_ge" class="textarea">{{ $intro->desc_ge }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="link_ge">ღილაკი</label>
                        <input type="text" class="form-contdol" name="link_ge" placeholder="იხილეთ ჩვენი სერვისები"
                            value="{{ $intro->link_ge }}">
                    </div>
            
                    <hr class="bg-primary">
            
            
                    <h2>ინგლისური</h2>
                    <div class="form-group">
                        <label for="title_en">სათაური</label>
                        <textarea name="title_en" class="textarea">{{ $intro->title_en }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="desc_en">აღწერა</label>
                        <textarea name="desc_en" class="textarea">{{ $intro->desc_en }}</textarea>
            
                    </div>
                    <div class="form-group">
                        <label for="link_en">ლინკი</label>
                        <input type="text" class="form-contdol" name="link_en" placeholder="იხილეთ ჩვენი სერვისები"
                            value="{{ $intro->link_en }}">
                    </div>
            
            
                    <hr class="bg-primary">
            
            
                    
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="url">URl</label>
                    <input type="text" class="form-contdol" name="url" placeholder="blog, chuchu?"
                        value="{{ $intro->url }}">
                </div>
        
                <div class="form-group">
                    <label for="image">სურათ</label>
                    <input type="file" class="form-contdol" name="image">
                </div>
                <div width="150px">
                    <img src="{{ asset($intro->image) }}" height="150px">
                </div>
        
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>  
   
</form>
@endsection