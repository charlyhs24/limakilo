<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
{{--  <!------ Include the above in your HEAD tag ---------->  --}}
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <nav class="navbar navbar-default navbar-inverse" role="navigation">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">limakilo.id</a>
          </div>
      
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                  <li class="divider"></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
              <li><p class="navbar-text">Already have an account?</p></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
                  <ul id="login-dp" class="dropdown-menu">
                      <li>
                           <div class="row">
                               <br>
                                  <div class="col-md-12">
                                       <form class="form" role="form" method="get" action="/login" accept-charset="UTF-8" id="login-nav">
                                              <div class="form-group">
                                                   <label class="sr-only" for="exampleInputEmail2">username</label>
                                                   <input type="text" name="username" class="form-control" id="exampleInputEmail2" placeholder="username" required>
                                              </div>
                                              <div class="form-group">
                                                   <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                   <input type="password" class="form-control" id="exampleInputPassword2" name="password" placeholder="Password" required>
                                              </div>
                                              <div class="form-group">
                                                   <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                              </div>
                                              <div class="checkbox">
                                              </div>
                                       </form>
                                  </div>
                                  <div class="bottom text-center">
                                      Dont have an Acount ? <a data-target="#registermodal" data-toggle="modal"><b>Register Now!</b></a>
                                  </div>
                           </div>
                      </li>
                  </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      {{--  modal-register  --}}
      <div class="modal fade" id="registermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content col-sm-8">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Register Account</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="/user/store"  method="POST">
                {{ csrf_field() }}
                <label for="username">Input Username</label>
                <input type="text" name="username" class="form-control form-control-sm">
                <label for="password">Input Password</label>
                <input type="password" name="password" class="form-control form-control-sm"><br>
                <div class="text-right">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                <input type="hidden" name="_method" value="POST">
              </form>
            </div>
          </div>
        </div>
      </div>

      @if ($counts ==1)
      <div class="alert alert-danger" role="alert">
            <h3><b>Username atau Password salah</b></h3>
            <p>username : charlyhsitumorang</p>
            <p>password : indonesiaraya</p>
          </div>
      @endif
      <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>