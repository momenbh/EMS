
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{url('/Css/style.css')}}" />
    <title>Login form</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
  </head>
  @if(session()->has('message'))

  <p class="alert alert-danger">{{session()->get('message')}}</p>
@endif
  <body>


    <form action="{{route('do.login')}}" method="POST">
        @csrf
      <div class="container">
        <div class="forms">
          <fieldset>E-Commerce</fieldset>
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" /><br />
          <label for="password">Password:</label>
          <input
            type="password"
            name="password"
            id="password" /><br />
          <button type="submit">Login</button>
        </div>
      </div>
    </form>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
