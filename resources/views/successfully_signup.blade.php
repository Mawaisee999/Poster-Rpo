@extends('welcome')



<nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Post Uploader</a>
    <form class="form-inline" action="{{url('/signup')}}">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Signup</button>
    </form>
</nav>

<center>
    <div class="jumbotron vertical-center my-5 col-8">
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Well done!</strong> Successfully Registered
        </div>
        <center> <img src="img2.png" class="img-circle" alt="Cinque Terre" height="100" width="100"></center></br>
        <form class="form-horizontal" action="{{url('/login/check')}}">
            <center>   <fieldset>

                    <div class="input-group col-4">
                        <img src="bb.png" class="img-circle" alt="Cinque Terre" height="35" width="35"> &#160;
                        <input id="name" type="text" class="form-control " name="name" placeholder="Name">

                    </div>
                    </br>
                    <div class="input-group col-4">
                        <img src="pp.png" class="img-circle" alt="Cinque Terre" height="35" width="35"> &#160;
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password">

                    </div></br>

                </fieldset></center>
            <center>
                <input type="submit" value="Sign In"  class="btn btn-primary" >

            </center>
        </form>
    </div>
</center>
{{-- Footer --}}
<div class="card text-center my-5">
    <div class="card-footer text-muted">
        Saviors
    </div>
</div>
