<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
  </head>
  <body>
    <div class="">
      <form action="/users" method="POST">



        @csrf


      <input type="text" name="name">
      <input type="email" name="email">
      <input type="tel" name="phone">
        <button type="button" name="button">Submit</button>
      </form>
    </div>

  </body>
</html>
