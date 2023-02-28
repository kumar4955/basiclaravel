<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cretae Todo</title>
</head>
<body>
  <div class="form-center pt-10">
      <h1 class="text-2xl">Create TODO</h1>


    <form action="/todos/create" method="POST">
      @csrf

      <label for="email">Email:</label>
        <input type="email" id="email" name="email" ><br><br>
        <span class="text-danger">
          @error('Email')
          {{$Message}}
          @enderror


        </span>
        <label for="pwd">Password:</label>
        <input type="password" id="pwd" name="pwd" minlength="8" ><br><br>
        <input type="submit">
    </form>
  </div>
</body>
</html>
