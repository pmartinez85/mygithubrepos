
@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Pàgina de Pedro
@endsection


@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Xuxman's Github Repos</div>

                    <div class="panel-body">
                        <ul>
                        @foreach ($githubrepos as $repo)
                            <li> {{ $repo }} </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection