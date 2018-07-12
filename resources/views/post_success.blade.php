@extends('welcome')


@section('content')

    {{--Nav bar--}}
    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="{{url('/home')}}">Post Uploader</a>
        <form class="form-inline" action="{{url('/cancel')}}">
            <a class="btn btn-outline-light my-2 my-sm-0" href="{{url('/home')}}" role="button">Home</a>
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Logout</button>

        </form>
    </nav>
    <center>
        <div class="jumbotron my-4 col-10">


                <div class="alert alert-dismissible alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Well done!</strong> Successfully Submitted
                </div>

            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Post Name</th>
                    <th scope="col">Post Description</th>
                </tr>
                </thead>
                <tbody>
               @foreach($data as $row)
                <tr>
                    <th scope="row">{{$row->id}}</th>
                    <td>{{$row->post_name}}</td>
                    <td>{{$row->post_description}}</td>
                </tr>
              @endforeach

                </tbody>
            </table>
        </div>
    </center>




    {{-- Footer --}}
    <div class="card text-center my-5">
        <div class="card-footer text-muted">
            Saviors
        </div>
    </div>

@endsection