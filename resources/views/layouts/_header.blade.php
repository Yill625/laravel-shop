<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" data-target="#app-navbar-collapse" data-toggle="collapse" type="button">
                <span class="sr-only">
                    Toggle Navigation
                </span>
                <span class="icon-bar">
                </span>
                <span class="icon-bar">
                </span>
                <span class="icon-bar">
                </span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">
                Laravel Shop
            </a>
        </div>
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <ul class="nav navbar-nav">
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!-- 登录注册链接开始 -->
                @guest
                <li>
                    <a href="{{ route('login') }}">
                        登录
                    </a>
                </li>
                <li>
                    <a href="{{ route('register') }}">
                        注册
                    </a>
                </li>
                @else
                <li>
                    <a href="{{ route('cart.index') }}">
                        <span aria-hidden="true" class="glyphicon glyphicon-shopping-cart">
                        </span>
                    </a>
                </li>
                <li class="dropdown">
                    <a aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                        <span class="user-avatar pull-left" style="margin-right:8px; margin-top:-5px;">
                            <img class="img-responsive img-circle" height="30px" src="https://fsdhubcdn.phphub.org/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/60/h/60" width="30px">
                            </img>
                        </span>
                        {{ Auth::user()->name }}
                        <span class="caret">
                        </span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                退出登录
                            </a>
                            <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        <li>
                            <a href="{{ route('user_addresses.index') }}">
                                收货地址
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('products.favorites') }}">
                                我的收藏
                            </a>
                        </li>
                    </ul>
                </li>
                @endguest
                <!-- 登录注册链接结束 -->
            </ul>
        </div>
    </div>
</nav>