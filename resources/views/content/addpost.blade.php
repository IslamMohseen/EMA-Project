@extends('content.dashboardmaster')

@section('content')

<div class="col-lg-8">

        <!-- Featured blog post-->        
        <h6 class="font-weight-bolder mb-0">Add Post</h6>
        <br>
        {{-- <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." /></a> --}}
        <form method="POST" action="{{asset('/posts/store') }}" enctype="multipart/form-data">
          {{ csrf_field() }}

          <div class="form-group">
            <label>Post Title</label>
            <input  type="text" name="title"  required="required" id="title"  class="form-control" >
          </div>
          
          <div class="form-group">
            <label>Category</label>
            <select class="form-control categories" name="category_id" >
              <option>-- Select Category --</option>
              @foreach ($categories as $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
            </select>          
          </div>

          <div class="form-group">
            <label >Post_Content</label>
            <textarea name="body" id="body" rows="8" required="required" class="form-control" ></textarea>
          </div>

          <div style="padding-bottom: 15px" class="col-md-6 col-sm-6 ">
              <input type="file" required="required" name="image" id="image" class="data-picker form-control col-md-7 col-xs-12">
          </div>

            <button type="submit" class="btn btn-primary">Add New Post</button>

        </form>

      @foreach ($errors as $error)
          {{ $error}} <br>
      @endforeach
</div>   
@endsection