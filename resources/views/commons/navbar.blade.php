<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-brown">
        {{-- トップページへのリンク --}}
        <a class="navbar-brand" href="/">StockChecker</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @if (Auth::check())
                    {{-- 商品検索ページへのリンク --}}
                    <li class="nav-item"><a href="#" class="nav-link">商品検索</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            {{-- ユーザ情報ページへのリンク --}}
                            <li class="dropdown-item"><a href="#">ユーザ情報</a></li>
                            {{-- パスワード変更ページへのリンク --}}
                            <li class="dropdown-item"><a href="#">パスワード変更</a></li>
                            {{-- お気に入り一覧ページへのリンク --}}
                            <li class="dropdown-item"><a href="#">お気に入り一覧</a></li>
                            <li class="dropdown-divider"></li>
                            {{-- ログアウトへのリンク --}}
                            <li class="dropdown-item">{!! link_to_route('logout.get', 'ログアウト') !!}</li>
                        </ul>
                    </li>
                @else
                    {{-- ユーザ登録ページへのリンク --}}
                    <li class="nav-item">{!! link_to_route('signup.get', 'ユーザ登録', [], ['class' => 'nav-link']) !!}</li>
                    {{-- ログインページへのリンク --}}
                    <li class="nav-item">{!! link_to_route('login', 'ログイン', [], ['class' => 'nav-link']) !!}</li>
                @endif
            </ul>
        </div>
    </nav>
</header>