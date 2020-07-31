@extends('layouts.admin')

@section('content')
<form action=" {{ route('article.update', $article->id) }}" method="POST" enctype="multipart/form-data" class="col-12">
    @csrf
    @method('PUT')
    <div class="col-lg-8">
        <div class="box-body">
            <h2>ქართული</h2>
            <div class="form-group">
              <label for="title_ge">სათაური</label>
              <input type="text" class="form-control" name="title_ge" value="{{ $article->title_ge }}">
            </div>

            <div class="form-group">
              <label for="body_ge">კონტენტი</label>
              <textarea name="body_ge" class="textarea">{{ $article->body_ge }}</textarea>
            </div>
      
            <hr>
      
            <h2>ინგლისური</h2>
            <div class="form-group">
              <label for="title_en">სათაური</label>
              <input type="text" class="form-control" name="title_en" value="{{ $article->title_en }}">
            </div>

            <div class="form-group">
              <label for="body_en">კონტენტი</label>
              <textarea name="body_en" class="textarea">{{ $article->body_en }}</textarea>
            </div>
      
            <hr>
      
            <hr>
      
            
      
          </div>
          <!-- /.box-body -->
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label for="image">სურათი</label>
            <input type="file"  name="image">
          </div>
          <div height="150px">
              <img src="{{ asset($article->image) }}" width="150px">
          </div>
          <div class="form-group">
            <label for="url">URL(ლინკი)</label>
            <input type="text" class="form-control"  name="url" value="{{ $article->url }}">
          </div>
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
    </div>
    
  </form>
@endsection