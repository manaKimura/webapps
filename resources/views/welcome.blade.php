@extends('layouts.app')

@section('content')
    @if (Auth::check())
            <div class="col-lg-12 col-xs-8">
                    @include('webapps.webapps')
            </div>
     @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Web制作管理アプリへようこそ</h1>
                {!! link_to_route('signup.get', 'ユーザ登録', null, ['class' => 'btn btn-lg btn-primary']) !!}
                {!! link_to_route('login.get', 'ログイン', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection