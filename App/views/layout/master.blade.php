<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @if( isset($_SESSION['flash_msg']))
        <script>
            let msg = "{{$_SESSION['flash_msg']['msg']}}";
        </script>
        @php
            unset ($_SESSION['flash_msg']);
        @endphp
    @endif
    <script src="/js/app.js"></script>
    @yield('scriptsection')
    <title>My Blog</title>
</head>

<body>
    <aside id="submenu">
        <h2 class="my-3 text-center">Submenu</h2>
        @if(isset($_SESSION['user']))
            <a href="/logout" class="btn btn-block btn-outline-primary">로그아웃</a>
            <a href="/post" class="btn btn-block btn-outline-primary">포스팅</a>
        @else
            <a href="/login" class="btn btn-block btn-outline-primary">로그인</a>
        @endif
    </aside>
    <div id="toastList">
        
    </div>
    <section id="bgimg">
    <section id="main">
        <div class="container">
            <header class="d-flex">
                <div class="logo">
                    <h1><a href="/">my blog</a></h1>
                </div>
                <div class="icon-bar">
                    <span><i class="fas fa-search"></i></span>
                    <span id="btnSubmenu"><i class="fas fa-bars"></i></span>
                </div>
            </header>
        </div>
    </section>
    
        <div class="wrapper">
        @yield('maincontent')

        
        </div>
        <footer>
            <div class="container">
                <div class="logo">
                    <img src="/images/logo.png" alt="logo" width="360" height="70">
                </div>
                <div class="copyright">
                    <p>Copyright dudwn. 2019 Some right reserved. Y-Y Digital hightschool</p>
                </div>
            </div>
        </footer>
    </section>
</body>

</html>