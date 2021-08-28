<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{ asset('admin-theme/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('admin-theme/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('admin-theme/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset('admin-theme/vendors/animate.css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('admin-theme/build/css/custom.min.css') }}" rel="stylesheet">

    <style>
      html,
      body,
      .login_wrapper {
        height: 100%;
      }

      .login_content {
        width: 300px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }
      .login_content form input[type=submit] {
        margin-left: 0px;
      }
    </style>
  </head>

  <body class="login">
      <section class="login_content">
        <form action="{{ url('/login') }}" method="POST">
          @csrf;
          <h1>Admin Login</h1>
          <div>
            <input type="text" class="form-control @error ('username') is-invalid @enderror" name="username" placeholder="Username" />
            @error ('username')
              <div style="margin-bottom: 16px;">
                <strong class="text-danger">{{ $message }}</strong>
              </div>
            @enderror
          </div>
          <div>
            <input type="password" class="form-control @error ('password') is-invalid @enderror" name="password" placeholder="Password" />
            @error ('password')
              <div style="margin-bottom: 16px;">
                <strong class="text-danger">{{ $message }}</strong>
              </div>
            @enderror
          </div>
          <div class="">
            <input type="submit" class="btn btn-default" value="Login" />
          </div>

          <div class="clearfix"></div>

          @if (session('login_failed'))
            <div class="alert alert-warning mt-3">{{ session('login_failed') }}</div>
          @endif
          
        </form>
      </section>
  </body>
</html>
