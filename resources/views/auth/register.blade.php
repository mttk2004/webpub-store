<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>
</head>
<body>
  <h1>Register</h1>
  <form action="{{ route('register') }}" method="post">
    @csrf
    <div>
      <label for="name">Name</label>
      <input type="text" name="name" id="name">
    </div>
    <div>
      <label for="email">Email</label>
      <input type="email" name="email" id="email">
    </div>
    <div>
      <label for="password">Password</label>
      <input type="password" name="password" id="password">
    </div>
    <div>
      <label for="password_confirmation">Password Confirmation</label>
      <input type="password" name="password_confirmation" id="password_confirmation">
    </div>
    <button type="submit">Register</button>
  </form>
  <a href="{{ route('login') }}">Login</a>
</body>
</html>
