@extends('layouts.admin')

@section('content')
<form action=" {{ route('fact.update', $fact->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="box-body">
      <h2>ქართული</h2>
      
      <div class="form-group">
        <label for="education_ge">განათლება</label>
        <textarea name="education_ge" class="textarea">{{ $fact->education_ge }}</textarea>
      </div>

      <div class="form-group">
        <label for="experience_ge">გამოცდილება</label>
        <textarea name="experience_ge" class="textarea">{{ $fact->experience_ge }}</textarea>
      </div>


      <hr>

      <h2>ინგლისური</h2>
      
      <div class="form-group">
        <label for="education_en">განათლება</label>
        <textarea name="education_en" class="textarea">{{ $fact->education_en }}</textarea>
      </div>

      <div class="form-group">
        <label for="experience_en">გამოცდილება</label>
        <textarea name="experience_en" class="textarea">{{ $fact->experience_en }}</textarea>
      </div>

      <hr>
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection