@extends('content.dashboardmaster')

@section('content')

<div class="col-lg-8">

        <!-- Featured blog post-->        
        <h6 class="font-weight-bolder mb-0">Category Name</h6>
        <br>
        {{-- <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." /></a> --}}
        <form method="POST" action="{{asset('/category/store') }}" enctype="multipart/form-data">
          {{ csrf_field() }}

          <div class="form-group">
            <label>Category Name</label>
            <input  type="text" name="name"  required="required" id="name"  class="form-control" >
          </div>
          
          <div class="form-group">
            <label >Category Description</label>
            <textarea name="discription" id="discription" rows="6" class="form-control" ></textarea>
          </div>

            <button type="submit" class="btn btn-primary">Add New Category</button>

        </form>

      @foreach ($errors as $error)
          {{ $error}} <br>
      @endforeach
</div>   
@endsection