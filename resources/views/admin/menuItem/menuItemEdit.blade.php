@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form role="form" action=" {{ route('menuItem.update', $menuItem->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="box-body">
                        <h2>ქართული</h2>
                        <div class="form-group">
                            <label for="label_ge">დასახელება</label>
                            <input type="text" class="form-contdol" name="label_ge" value="{{ $menuItem->label_ge }}">
                        </div>
                        <div class="form-group">
                            <label for="title_ge">სათაური</label>
                            <textarea name="title_ge" class="textarea">{{ $menuItem->title_ge }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="body_ge">ტექსტი</label>
                            <textarea name="body_ge" class="textarea">{{ $menuItem->body_ge }}</textarea>
                        </div>

                        <hr class="bg-primary">

                        <div class="box-body">
                            <h2>ინგლისური</h2>
                            <div class="form-group">
                                <label for="label_en">დასახელება</label>
                                <input type="text" class="form-contdol" name="label_en" value="{{ $menuItem->label }}">
                            </div>
                            <div class="form-group">
                                <label for="title_en">სათაური</label>
                                <textarea name="title_en" class="textarea">{{ $menuItem->title_en }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="body_en">ტექსტი</label>
                                <textarea name="body_en" class="textarea">{{ $menuItem->body_en }}</textarea>
                            </div>


                            <hr class="bg-primary">


                            <div class="form-group">
                                <label for="image">სურათი</label>
                                <input type="file" class="form-contdol" name="image">
                            </div>

                            <img src="{{ asset($menuItem->image) }}" width="">
                            <div class="form-group">
                                <label for="bg_color">ფერი</label>
                                <input type="color" class="form-contdol" name="bg_color" value="{{ $menuItem->bg_color }}">
                            </div>

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                </form>
            </div>
        </div>
    </div>
@endsection