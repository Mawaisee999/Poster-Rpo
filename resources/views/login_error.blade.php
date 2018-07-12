@extends('welcome')



<nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Post Uploader</a>
    <form class="form-inline" action="{{url('/signup')}}">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Signup</button>
    </form>
</nav>

<center>
    <div class="jumbotron vertical-center my-5 col-8">

        <form class="form-horizontal" action="{{url('login')}}">
            <div class="alert alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <a href="#" class="alert-link">Warning!</a> Username or Password is incorrect.
            </div>

                <input type="submit" value="Try Again"  class="btn btn-primary" >


        </form>
    </div>
</center>
{{-- Footer --}}
<div class="card text-center my-5">
    <div class="card-footer text-muted">
        Saviors
    </div>
</div>
