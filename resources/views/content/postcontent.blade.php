@extends('master')

@section('content')

<!-- Page content-->
<div style="padding-top: 25px;" class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->           
            <div class="card mb-4">
                <div class="card-body">
                    <h1 class="fw-bolder">{{ $post->title}}</h1>

                    <div class="small text-muted">Posted at  {{ $post->created_at}}</div>
                    <br>
                    <p class="card-text">{{ $post->body}}</p>
                </div>
                
                {{-- View Comment  --}}
                <div class="card-body ">
                    @foreach ($post->comments as $comment)
                        <p class="comment">{{ $comment->body }}</p>
                    @endforeach
                </div>
                    {{-- Add Comments --}}
                <form class="card-body" method="POST" action="{{ url('postscomment', $post->id)}}" >
                @csrf
                    <div class="form-group">
                    <label >Write Something . . . </label>
                    <textarea name="body" id="body" required="required" class="form-control" ></textarea>
                    </div>
                    <br>
                    <button type="submit" style="background-color: cadetblue;color:white;" class="btn">Add Comment</button>
                </form>
            </div>
            <!-- Nested row for non-featured blog posts-->
            
            <!-- Pagination-->
            <nav aria-label="Pagination">
                <hr class="my-0" />
                <ul class="pagination justify-content-center my-4">
                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                    <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                    <li class="page-item"><a class="page-link" href="#!">2</a></li>
                    <li class="page-item"><a class="page-link" href="#!">3</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                    <li class="page-item"><a class="page-link" href="#!">15</a></li>
                    <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                </ul>
            </nav>
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                        <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                    </div>
                </div>
            </div>
            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-8">
                            <ul class="list-unstyled mb-0">
                                @foreach ($categories as $category)
                                <li><a class="link2" href="{{asset('category/' . $category->name)}}"><strong>{{$category->name}}</strong> </a></li>
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