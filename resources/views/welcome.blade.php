@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="text-center">
            <h1>お気に入り一覧</h1>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>StockCheckerトップページ</h1>
                {{-- ユーザ登録ページへのリンク --}}
                {!! link_to_route('signup.get', 'ご利用開始はこちら', [], ['class' => 'btn btn-lg btn-brown']) !!}
            </div>
        </div>
    @endif
@endsection