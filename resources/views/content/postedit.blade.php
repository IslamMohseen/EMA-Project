@extends('content.dashboardmaster')

@section('content')
<div class="col-lg-8">

<h6 class="font-weight-bolder mb-0">Post Edit</h6>

    <!-- Featured blog post-->           
      {{-- <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." /></a> --}}
      <form method="POST" action="{{ route('post.update', $posts->id)}}" enctype="multipart/form-data">
        @csrf
        {{-- <input type="hidden" name="id" value="{{$posts->id}}"> --}}

            <div class="form-group">
              <label>Post Title</label>                    
              <input  type="text" value="{{$posts->title}}" name="title"  required="required" id="title"  class="form-control" >
            </div>

            <div class="form-group">
              <label>Category</label>
              <select class="form-control categories" name="category_id" >
                <option value="<?php echo $categories ?>"></option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
              </select>          
            </div>
            
            <div class="form-group">
              <label >Post_Content</label>
              <textarea  type="text" value="{{$posts->body}}" name="body" id="body"  required="required" class="form-control" rows="10" >{{$posts->body}}</textarea>
            </div>

            <div class="col-md-6 col-sm-6 ">
                <input type="file" value="{{$posts->image}}"  name="image" id="image" class="data-picker form-control col-md-7 col-xs-12">
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>

        @foreach ($errors as $error)
            {{ $error}} <br>
        @endforeach
</div>    
@endsection




