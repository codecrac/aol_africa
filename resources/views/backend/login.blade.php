<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Asg login</title>

    <!-- Styles -->
    <link href="css/backend/font-awesome.min.css" rel="stylesheet">
    <link href="css/backend/themify-icons.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/backend/helper.css" rel="stylesheet">
    <link href="css/backend/style.css" rel="stylesheet">
</head>

<body style="background-color : #fbab22">

    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="{{route('accueil')}}"><span>Aol Africa seoul group</span></a>
                        </div>
                        <div class="login-form">
                            <h4>Administration <br/> <!--<?= md5('code') ?>--> </h4>
                            <form method="post" action="{{route('se_connecter')}}">
                                <div class="form-group">
                                    <label><b>Email</b></label>
                                    <input type="email" name="email" class="form-control" placeholder="monadresse@gmail.com" value="admin@gmail.com">
                                </div>
                                <div class="form-group">
                                    <label><b>Mot de passe</b></label>
                                    <input type="password" name="pass" class="form-control" placeholder="Votre mot de passe" value="code">
                                </div>
                                <div class="checkbox">
                                    <label class="pull-right">
										<a href="#">Mot de passe oublié?</a>
									</label>

                                </div>

{{--                                <a href="{{route('accueil')}}">--}}
{{--                                <a href="{{route('se_connecter')}}">--}}
                                {{csrf_field()}}
                                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Se connecter</button>
{{--                                </a>--}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
