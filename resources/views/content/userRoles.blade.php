@extends('content.dashboardmaster')

@section('content')
<div class="col-lg-81">

<h6 class="font-weight-bolder mb-5">User Roles</h6>

    <table class="table table-bordered" >
        <thead style="text-align: center" class="thead-light">
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Admin</th>
            <th>Editor</th>
        </thead>
        <tbody> 
                       
            @foreach ($users as $user)
            <form method="POST" action="{{asset('/change-role')}}">
                @csrf
                <input type="hidden" name="email" value="{{$user->email}}">
            <tr style="text-align: center">
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <input type="checkbox" name="role_admin" onChange="this.form.submit()" {{ $user->hasRole('Admin') ? 'checked' : ' '}}>
                </td>
                <td>                    
                    <input type="checkbox" name="role_editor" onChange="this.form.submit()" {{ $user->hasRole('Editor') ? 'checked' : ' '}}>
                </td>
            </tr>
            </form>
            @endforeach
        </tbody>
    </table>
</div>

@endsection



