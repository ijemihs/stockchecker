@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <div class="text-center">
            <h1>StockCheckerトップページ</h1>
            {{-- ユーザ登録ページへのリンク --}}
            {!! link_to_route('signup.get', 'ご利用開始はこちら', [], ['class' => 'btn btn-lg btn-brown']) !!}
        </div>
    </div>
@endsection