@extends('layouts.admin')


@section('content')
<form role="form" action="{{ route('about.update', $about->id) }}" method="POST"
     enctype="multipart/form-data" class="col-12">
    @csrf
    @method('PUT')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
               
                <div class="box-body">
                  <h2>ქართული</h2>

                  <div class="form-group">
                    <label for="name_ge">სახელი</label>
                    <textarea name="name_ge" class="textarea">{{ $about->name_ge }}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="gender_ge">სქესი</label>
                    <textarea name="gender_ge" class="textarea">{{ $about->gender_ge }}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="birth_date_ge">დაბადების თარიღი</label>
                    <input type="date" name="birth_date_ge" value="{{ $about->birth_date_ge }}">
                  </div>
                  <div class="form-group">
                    <label for="nationality_ge">ეროვნება</label>
                    <textarea name="nationality_ge" class="textarea">{{ $about->nationality_ge }}</textarea>
                  </div>
                  
            
                  <hr>
            
                  <h2>ინგლისური</h2>

                  <div class="form-group">
                    <label for="name_en">სახელი</label>
                    <textarea name="name_en" class="textarea">{{ $about->name_en }}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="gender_en">სქესი</label>
                    <textarea name="gender_en" class="textarea">{{ $about->gender_en }}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="birth_date_en">დაბადების თარიღი</label>
                    <input type="date" name="birth_date_en" value="{{ $about->birth_date_en }}">
                  </div>
                  <div class="form-group">
                    <label for="nationality_en">ეროვნება</label>
                    <textarea name="nationality_en" class="textarea">{{ $about->nationality_en }}</textarea>
                  </div>
            
                  <hr>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="image">სურათი</label>
                    <input type="file"  name="image">
                  </div>
                  <div height="150px">
                      <img src="{{ asset($about->image) }}" width="150px">
                  </div>
                  <div class="form-group">
                    <label for="email">ელ-ფოსტა</label>
                    <input type="text"  name="email" value="{{ $about->email }}">
                  </div>
                  <div class="form-group">
                    <label for="phone_number">ტელ-ნომერი</label>
                    <input type="text"  name="phone_number" value="{{ $about->phone_number }}">
                  </div>
                 
                </div>
                <!-- /.box-body -->
            
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>

</form>
   

     
@endsection