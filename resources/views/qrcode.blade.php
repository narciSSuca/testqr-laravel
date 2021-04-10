<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Тест qr</title>
  </head>
  <body>
    @if (isset($text))
      {!! QrCode::encoding('UTF-8')->size(500)->generate($text); !!}
    @endif
     </body>
</html>
