<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        {{-- スマートフォンで見たときなど、画面幅ごとに文字や画像の大きさを調整してくれる --}}
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Scripts -->
        {{-- Laravel標準で用意されているJavascriptを読み込みます。「/js/app.js」というパスを生成 --}}
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        {{-- この章の後半で作成するCSSを読み込みます --}}
        <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">

        <title>トップページ</title>
    </head>
    <body>
        <header>
            <h1><a href="welcome.blade.php"><img class="logo" scr="" alt="トップ画面"></a></h1>
            <nav>
                <ul class="main-nav">
                    <li><a href="profile.blade.php">Profile</a></li>
                    <li><a href="portfoilo.blade.php">Portfolio</a></li>
                    <li><a href="contact.blade.php">Contact</a></li>
                </ul>
            </nav>
        </header>
        <h1>Imamura haruna</h1>
        <h1>Portfolio</h1>
    </body>
</html>