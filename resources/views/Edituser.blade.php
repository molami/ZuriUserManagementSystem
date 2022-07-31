<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
  </head>
  <body>
    <div class="">

      <form action="/users/{{ $user->id}}" method="POST">
        @method('PUT')


        @csrf

      <input type="text" name="id" value="{{ $user->id}}">
      <input type="text" name="name" value="{{ $user->name}}">
      <input type="text" name="email" value="{{ $user->email}}">
      <input type="text" name="phone" value="{{ $user->phone}}">
      <button type="button" name="button">Update</button>
      <a href="/users">Go Back</a>
      </form>
      <form class="" action="/users/{{ $user->id}}" method="post">
        @csrf
        @method('DELETE')
        <button type="button" name="button">Delete</button>
      </form>
    </div>

  </body>
</html>
