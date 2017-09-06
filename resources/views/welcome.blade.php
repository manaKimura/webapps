@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Web制作管理アプリへようこそ</h1>
            {!! link_to_route('signup.get', 'ユーザ登録', null, ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
@endsection