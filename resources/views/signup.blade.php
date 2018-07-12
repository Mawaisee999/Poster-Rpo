@extends('welcome')

    {{--Nav bar--}}
<nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Post Uploader</a>
    <form class="form-inline" action="{{url('/login')}}">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Login</button>
    </form>
</nav>
<center>
<div class="jumbotron my-4 col-10">

    <form class="form-horizontal" method="get" action="{{url('/ssuccess')}}">
        <fieldset>
            <center><h2 class="form-signup-heading">Please Fill Correct Information</h2></center></br>
            <div class="form-group">
                <label for="inputName" class="col-lg-10 control-label">Name</label>
                <div class="col-lg-6">
                    <input id="name" type="text" class="form-control" name="name" placeholder="Name">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-6">
                    <input id="email" type="text" class="form-control" name="email"  placeholder="someone@example.com">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                <div class="col-lg-6">
                    <input id="password" type="password" class="form-control" name="password"  placeholder="******" >
                </div>
            </div>

            <div class="form-group">
                <label for="phone" class="col-lg-2 control-label">Mobile Number</label>
                <div class="col-lg-6">
                    <input id="mnumber" type="phone" class="form-control" name="mnumber"    maxlength="11" placeholder="03123456789">
                </div>
            </div>




            <div class="form-group">
                </br>
                <div class="col-lg-10 col-lg-offset-2">
                    <input type="submit" value="Sign Up"  class="btn btn-primary" >
                    <a class="btn btn-primary btn-lg" href="{{url('/cancel')}}" role="button">Cancel</a>
                  </div>
            </div>
        </fieldset>

    </form>
</div>
</center>




{{-- Footer --}}
<div class="card text-center my-5">
    <div class="card-footer text-muted">
        Saviors
    </div>
</div>


