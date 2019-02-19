@extends('layouts.profile')
@section('title','My プロフィール')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>Profile</h2>
            <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">
              @if (count($errors) > 0)
              <ul>
                @foreach($errors->all() as $e)
                <li>{{ $e }}</li>
                @endforeach
              </ul>
              @endif
              <div class="form-group row">
               <lavel class="col-md-2" for="name">氏名</lavel>
               <div class="col-md-10">
                 <input type="text" class="form-control" name="title" value="{{ old('title') }}">
               </div>
             </div>
             <div class="form-group row">
              <lavel class="col-md-2" for="gender">性別</lavel>
              <div class="col-md-10">
                <input type="text" class="form-control" name="title" value="{{ old('title') }}">
              </div>
            </div>
            <div class="form-group row">
             <lavel class="col-md-2" for="hobby">趣味</lavel>
             <div class="col-md-10">
               <input type="text" class="form-control" name="title" value="{{ old('title') }}">
             </div>
           </div>
           <div class="form-group row">
            <lavel class="col-md-2" for="introduction">自己紹介欄</lavel>
            <div class="col-md-10">
              <input type="text" class="form-control" name="title" value="{{ old('title') }}">
            </div>
          </div>
              <div class="form-group row">
                <lavel class="col-md-2" for="title">タイトル</lavel>
                <div class="col-md-10">
                  <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                </div>
              </div>

              </div>
              <div class="form-group row">
                <lavel class="col-md-2" for="title">画像
                </lavel>
                <div class="col-md-10">
                  <input type="file" class="form-control-file" name="image">
                </div>
              </div>
              {{ csrf_field() }}
              <input type="submit" class="btn btn-primary"value="更新">
            </form>
        </div>
    </div>
</div>
@endsection
