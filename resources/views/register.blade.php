@extends('master')

@section('content')
<br>
<!-- Page content-->
<div style="padding-bottom: 300px;padding-top:70px;" class="container">
    <div class="row">
        <div class="col-lg-10">
            <div style="padding-left: 300px" class="col-lg-10">
                <form class="form-horizontal" action='{{asset('/register')}}' method="POST">
                @csrf
                <fieldset>
                  <div id="legend">
                    <legend class="">Register</legend>
                  </div>
                  <div class="control-group">
                    <!-- Username -->
                    <div class="controls">
                        <label for="name">Name</label>
                        <input class="form-control" name="name" type="text" placeholder="Name" required  />
                    </div>
                  </div>
                  <div class="control-group">
                    <!-- E-mail -->
                    <div class="controls">
                        <label for="email">Email</label>
                        <input class="form-control" name="email" type="email" placeholder="E-mail" required  />
                    </div>
                  </div>
                  <div class="control-group">
                    <!-- Password-->
                    <div class="controls">
                        <label for="Password">Password</label>
                        <input class="form-control" name="password" type="password" placeholder="Password" required />
                    </div>
                  </div>
                    <br>
                  <div class="control-group">
                    <!-- Button -->
                    <div class="controls">
                      <button class="btn btn-success">Register</button>
                    </div>
                  </div>
                </fieldset>
              </form> 
              <br>
            <div>
                @foreach ($errors->all() as $error)
                    <p class="alert alert-dark" role="alert"> {{ $error}} </p> <br>
                @endforeach
            </div>
            </div>         
        </div>
    </div>
</div>
</div>
    
@endsection