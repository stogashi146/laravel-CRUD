<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>paiza bbs</title>
    @include("style-sheet")
  </head>
  <body>
    @include("navi")
    <div class="container">
      @yield("content")
    </div>
    
  </body>
</html