<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="/js/app.js"></script>
    <title>My Blog</title>
</head>

<body>
    <section id="main">
        <div class="container">
            <header class="d-flex">
                <div class="logo">
                    <h1>my blog</h1>
                </div>
                <div class="icon-bar">
                    <span><i class="fas fa-search"></i></span>
                    <span><i class="fas fa-bars"></i></span>
                </div>
            </header>
        </div>
    </section>

    @yield('maincontent')

    <footer>
        <div class="container">
            이곳은 푸터입니다.
        </div>
    </footer>
</body>

</html>