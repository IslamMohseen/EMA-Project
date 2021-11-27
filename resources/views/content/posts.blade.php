@extends('master')

@section('content')

<!-- Page header with logo and tagline-->
{{-- <header class="py-1 bg-light border-bottom mb-1">
    <div class="container">
        <div class="text-center my-4">
            <h1 class=" fw-bolder">Tanaw3</h1>
            <p class="link2 lead"></p>
        </div>
    </div>
</header> --}}

<!-- Page content-->
<br> 
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            
            @foreach ($posts as $post)            
                <div class="card-body border-bottom mb-1">
                    <h2 class="card-title">
                        <a class="col-lg-8 link2" href="{{ asset('posts/' . $post->id)}}">{{ $post->title}}</a></h2>
                        <div class="small text-muted"><i class="link2 fa fa-home"></i> Posted at {{ $post->created_at->toDayDateTimeString() }} - 
                            <strong> Category:</strong>
                        @if($post->category) 
                        <a class="link1" href="{{ asset(('category/' . $post->category->name))}}">
                            <strong>{{ $post->category->name}}</strong>
                        </a>
                        @endif
                        </div>
                    <br>
                    @if ($post->image)
                    <a href="{{ asset('posts/' . $post->id)}}"><img style="height: 300px" class="card-img-top" src="{{ asset('postimg/' . $post->image)}}" alt="..." /></a>
                    @endif
                    <br> 
                    <br> 
                    <p  class="card-text text-muted">{!!  substr(strip_tags($post->body), 0, 149) !!}...  <a style="text-decoration:none;" href="{{ asset('posts/' . $post->id)}}">Read more </a></p>
                    
                </div>               
            @endforeach
           <br><br>
        </div>
                            <!-- Side widgets-->
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                        <button class="btn btn-outline-success" id="button-search" type="button">Go!</button>
                    </div>   
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <div class="row">
                        
                        <div class="col-sm-8">
                            <ul class="list-unstyled mb-0">
                                @foreach ($categories as $category)
                                <li><a class="link2" href="{{'category/' . $category->name}}"><strong>{{$category->name}}</strong> </a></li>
                                @endforeach
                            </ul>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection