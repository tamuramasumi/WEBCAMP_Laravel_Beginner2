@extends('layout')

{{-- タイトル --}}
@section('title')(詳細画面)@endsection

{{-- メインコンテンツ --}}
@section('contets')
        <h1>ユーザ登録</h1>
            @if (session('front.user_register_success') == true)
                ユーザを登録しました！！<br>
            @endif
            @if (session('front.user_completed_failure') == true)
                The name field is required.<br>
                The email field is required.<br>
                The password field is required.<br>
            @endif
            @if ($errors->any())
                <div>
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
                </div>
            @endif
            <form action="/user/register" method="post">
                @csrf
                名前:<input name="name" value="{{ old('name') }}"><br>
                email:<input email="email" type="email" value="{{ old('email') }}"><br>
                パスワード:<input name="pw" type="password"><br>
                <button>登録する</button>
            </form>