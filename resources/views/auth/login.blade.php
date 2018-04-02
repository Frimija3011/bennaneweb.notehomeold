<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>AdminLTE 2 | Log in</title>
        
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        
        <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
        
        <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
        
        <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
        
        <link rel="stylesheet" href="assets/plugins/iCheck/square/blue.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>

    <body class="hold-transition login-page">

        <div class="login-box">

            <div class="login-logo">
                <a href="{{ route('home') }}"><b>Notehome</b></a>
            </div>
            
            <div class="login-box-body">

                <p class="login-box-msg">Connectez-vous pour ouvrir une session</p>

                <form method="POST" action="{{ route('login') }}">
                    
                    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                    
                    <div class="form-group has-feedback">
                        
                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        
                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong class="text-danger">{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        
                    </div>
                    
                    <div class="form-group has-feedback">
                        
                        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        
                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong class="text-danger"><i class="fa fa-sign-in"></i> {{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Rester connecté') }}
                            </label>                          
                        </div>
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-primary btn-block btn-flat"><i class="fa fa-sign-in"></i> Connexion</button>
                        </div>
                    </div>
                    
                </form>

            </div>

        </div>

        <script type="text/javascript" src="assets/bower_components/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/plugins/iCheck/icheck.min.js"></script>

        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' /* optional */
                });
            });
        </script>
         
    </body>
</html>