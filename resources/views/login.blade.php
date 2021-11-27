@extends('master')

@section('content')
<br>
<!-- Page content-->
<div style="padding-bottom: 300px;padding-top:70px;" class="container">
    <div class="row">
        <div class="col-lg-10">
            <div style="padding-left: 300px" class="col-lg-10">
            <form  class="form-horizontal" action='{{asset('/login')}}' method="POST">
                @csrf
                <fieldset>
                  <div id="legend">
                    <legend class="">Login Page</legend>
                  </div>
                  <div class="control-group">
                    <!-- E-mail -->
                    <div class="controls">
                        <label for="email">Email</label>
                        <input class="form-control" name="email" value="{{ old('email') }}" type="email" placeholder="E-mail"   />
                    </div>
                  </div>
                  <div class="control-group">
                    <!-- Password-->
                    <div class="controls">
                        <label for="Password">Password</label>
                        <input class="form-control" name="password"  type="password" placeholder="Password" />
                    </div>
                  </div>
                    <br>
                  <div class="control-group">
                    <!-- Button -->
                    <div class="controls">
                      <button class="btn btn-success">Login</button>
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

    
@endsection