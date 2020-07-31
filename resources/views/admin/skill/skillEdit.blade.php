@extends('layouts.admin')

@section('content')
<form role="form" action="{{ route('skill.update', $skill->id) }}" method="POST"
    enctype="multipart/form-data" class="col-12">
   @csrf
   @method('PUT')
   <div class="container-fluid">
       <div class="row">
           <div class="col-lg-8">
            @csrf
            <div class="box-body">
              <h2>ქართული</h2>
              <div class="form-group">
                <label for="title_ge">სათაური</label>
                <input type="text" class="form-contdol" name="title_ge" value="{{ $skill->title_ge }}">
              </div>
              <div class="form-group">
                <label for="desc_ge">აღწერა</label>
                <textarea name="desc_ge" class="textarea">{{ $skill->desc_ge }}</textarea>
              </div>

              <hr class="bg-primary">

              <div class="box-body">
                <h2>ინგლისური</h2>
                <div class="form-group">
                  <label for="title_en">სათაური</label>
                  <input type="text" class="form-contdol" name="title_en" value="{{ $skill->title_en }}">
                </div>
                <div class="form-group">
                  <label for="desc_en">აღწერა</label>
                  <textarea name="desc_en" class="textarea">{{ $skill->desc_en }}</textarea>
                </div>


                <hr class="bg-primary">


                
           </div>
           <div class="col-lg-4">
            <div class="form-group">
                <label for="image">სურათი</label>
                <input type="file" class="form-contdol" name="image" >
              </div>

              <div height="150px">
                  <img src="{{ asset($skill->image) }}" width="150px" >
              </div>
              
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
           </div>
       </div>
   </div>

</form>
@endsection