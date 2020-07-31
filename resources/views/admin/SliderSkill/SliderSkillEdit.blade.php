@extends('layouts.admin')

@section('content')
<form action=" {{ route('SliderSkill.update', $SliderSkill->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="box-body">
      <h2>ქართული</h2>
      

      <div class="form-group">
        <label for="skills_str_ge">შესაძლებლობის დასახელება</label>
        <textarea name="skills_str_ge" class="textarea">{{ $SliderSkill->skills_str_ge }}</textarea>
      </div>


      <hr>

      <h2>ინგლისური</h2>

      <div class="form-group">
        <label for="skills_str_en">შესაძლებლობის დასახელება</label>
        <textarea name="skills_str_en" class="textarea">{{ $SliderSkill->skills_str_en }}</textarea>
      </div>

      <div class="form-group">
        <label for="skills_int">შესაძლებლობის პროცენტულობა</label>
        <input type="text" class="form-control" name="skills_int" value="{{ $SliderSkill->skills_int }}">
      </div>

      <hr>
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection