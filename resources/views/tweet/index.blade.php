<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable-no, macium-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>つぶやきアプリ</title>
</head>
<body>
  <h1>つぶやきアプリ</h1>
  <div>
    @foreach($tweets as $tweet)
      <p>{{ $tweet->content }}</p>
      <br>
    @endforeach
  </div>
</body>
</html>