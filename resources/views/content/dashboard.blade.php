@extends('content.dashboardmaster')

@section('content')

<div class="col-lg-3 col-sm-6 mb-lg-0 mb-4">
  <div class="card">
    <div class="card-body p-3">
      <div class="row">
        <div class="col-8">
          <div class="numbers">
            <p class="text-sm mb-0 text-capitalize font-weight-bold">All Post</p>
            <h5 class="font-weight-bolder mb-0">
              {{$postes}}
            </h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-lg-3 col-sm-6 mb-lg-0 mb-4">
  <div class="card">
    <div class="card-body p-3">
      <div class="row">
        <div class="col-8">
          <div class="numbers">
            <p class="text-sm mb-0 text-capitalize font-weight-bold">All User</p>
            <h5 class="font-weight-bolder mb-0">
              {{ $users}}
            </h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    
    <div class="row mt-4">
      @foreach ($posts as $post)
      <div class="col-lg-4">
        <div class="card h-150 p-1">
          <div class="overflow-hidden position-relative border-radius-lg bg-cover h-150" style="background-image: url({{ asset('postimg/' . $post->image)}});">
            <span class="mask bg-gradient-dark"></span>
            <div class="card-body position-relative z-index-1 d-flex flex-column h-150 p-3">
              <h5 class="text-white font-weight-bolder mb-4 pt-2"></h5>
              <h4>
              <a href="{{ asset('posts/' . $post->id)}}" class="text-white">{{ $post->title}}</a>
              </h4>
              <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="{{asset('post_edit/' . $post->id )}}">
                  <i style="float: right" class="fa fa-edit"></i> Edit 
              </a>
              <a style="float: right" class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="{{asset('post_delete/' . $post->id )}}">
                  <i style="float: right" class="fas fa-trash-alt"></i>  Delete 
              </a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>    
@endsection


