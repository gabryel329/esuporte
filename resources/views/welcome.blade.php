<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Login - eSUPORTE</title>
</head>
<body>
    @if ($errors->has('name'))
    <div class="alert alert-danger">
        {{ $errors->first('name') }}
    </div>
    @endif
    @if ($errors->has('password'))
        <div class="alert alert-danger">
            {{ $errors->first('password') }}
        </div>
    @endif
    <section class="material-half-bg">
        <div class="cover"></div>
    </section>
    <section class="login-content">
        <div class="logo">
            <img src="{{ asset('images/LOGO_PAGINICIAL.png') }}" alt="ePRONTUARIO" style="height: 100px;">
        </div>
        <div class="login-box">
            <form class="login-form" method="POST" action="{{ route('login') }}">
                @csrf
                <h3 class="login-head"><i class="bi bi-person me-2"></i>Login</h3>
                <div class="mb-3">
                    <label class="form-label">CNPJ</label>
                    <input id="cnpj" name="cnpj" class="form-control" type="text" placeholder="CNPJ" autofocus>
                    @error('cnpj')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Senha</label>
                    <input class="form-control" id="password" name="password" type="password" placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 btn-container d-grid">
                    <button type="submit" class="btn btn-primary btn-block">
                        <i class="bi bi-box-arrow-in-right me-2 fs-5"></i>SIGN IN
                    </button>
                </div>
            </form>
        </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#cnpj').mask('00.000.000/0000-00', {reverse: true});
        });
    </script>
</body>
</html>
