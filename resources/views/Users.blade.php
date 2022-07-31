<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
  </head>
  <body>
    <div class="">
      <h1>User Management System</h1>
      <a href="/users/create">Add User</a>

      @foreach($user as $users)

      <table>
      <a href="/users/{{ $users =>id }}/edit"><td>{{ $users->id }}</td></a>
        <td>{{ $users->name }}</td>
        <td>{{ $users->email }}</td>
        <td>{{ $users->phone }}</td>
      </table>
    </div>

  </body>
</html>
