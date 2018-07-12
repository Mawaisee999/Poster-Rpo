@extends('welcome')




    {{--Nav bar--}}
<nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand" href="{{url('/home')}}">Post Uploader</a>
    <form class="form-inline" method="get" action="{{url('/cancel')}}">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Logout</button>
    </form>
</nav>
<center>
    <div class="jumbotron my-4 col-10">

        <form class="form-horizontal"  action="{{url('/load/post')}}">
            <fieldset>
                <center><h2 class="form-signup-heading">Post Information</h2></center></br>
                <div class="form-group">
                    <label for="inputName" class="col-lg-10 control-label">Post Name</label>
                    <div class="col-lg-6">
                        <input id="pname" type="text" class="form-control" name="pname" placeholder="Post Name">
                    </div>
                </div>

                <div class="form-group my-2 col-7">
                    <label for="exampleTextarea">Post Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>


                <div class="form-group">
                    </br>
                    <div class="col-lg-10 col-lg-offset-2">
                        <input type="submit" value="Post"  class="btn btn-primary" >
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

