<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link href="css/appqr.css" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <title>Тест qr</title>
  </head>
  <body>
    <div class="content">
      <div class="qr-content">
        <img src="{{ $output }}" alt="">
        <div class="buttons">
          <a href="{{ $output }}" class="button-download" download> скачать</a>
        </div>
        </div>
      <form class="" action="pngactform" method="post">
      @csrf
      <input type="text" name="content" value="test">
      <button type="submit" name="button">закодировать</button>
    </form>
    </div>
     </body>
</html>
