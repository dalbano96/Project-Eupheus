@extends('layouts.app')

@section('content')
<div class="jumbotron">
<h1 align="center">University of Hawaii at Hilo </h1>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
									<h1 align="center"> Welcome </h1>
									<h1 align="center"><a class="btn btn-lg btn-info" href="{{ url('/users/checklist') }}">View application status</a></h1>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
