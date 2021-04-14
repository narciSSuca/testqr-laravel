<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link href="css/appqr.css" rel="stylesheet">
    <title>Тест qr</title>
  </head>
  <body>
    <div class="content">
      <div class="qr-content">
        <img src="{{ $output }}" alt="">
        <a href="{{ $output }}" download> asda</a>
      </div>
      <form class="" action="pngactform" method="post">
      @csrf
      <input type="text" name="content" value="test">
      <button type="submit" name="button">закодировать</button>
    </form>
    </div>
     </body>
</html>
