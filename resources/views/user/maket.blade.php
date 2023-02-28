<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/admin.css') }}">
    <style>
        body {
            background-color: #23242a !important;
        }

        .box {
            position: relative;
            width: 380px;
            height: 450px;
            border-radius: 8px;
            background: #1c1c1c;
            overflow: hidden;
        }

        .box::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 380px;
            height: 420px;
            background: linear-gradient(0deg, transparent,
                    #45f4ff, #45f4ff);
            transform-origin: bottom right;
            animation: animate 6s linear infinite;
        }

        .box::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 380px;
            height: 420px;
            background: linear-gradient(0deg, transparent,
                    #45f4ff, #45f4ff);
            transform-origin: bottom right;
            animation: animate 6s linear infinite;
            animation-delay: -3s;
        }

        @keyframes animate {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .box .register-box {
            position: absolute;
            inset: 2px;
            border-radius: 8px;
            background: #28292d;
            margin: 0;
            z-index: 10;
            padding: 50px 40px;
            display: flex;
            flex-direction: column;
            width: auto;
            color: #fff;

        }

        .box .register-box .card {
            box-shadow: none;
        }

        .box .register-box .card .login-card-body,
        .register-card-body {
            background-color: #28292d !important;
        }

        .login-card-body .input-group .form-control,
        .register-card-body .input-group .form-control {
            background-color: transparent;
            color: white;
        }

        .login-card-body .input-group .form-control,
        .register-card-body .input-group input:focus {
            background-color: #45f3ff;
        }

        .login-card-body .input-group .form-control,
        .register-card-body .input-group input:focus~input:placeholder {
            color: black;
        }

        .login-card-body .input-group .form-control,
        .register-card-body .input-group input:not(.is-invalid) {
            color: white;
        }

        .card .card-body form button,
        .card .card-body form button:hover {
            background-color: #45f3ff;
            color: #28292d;
            font-weight: bold;
        }
    </style>
</head>

<body class="hold-transition register-page">
   @yield('content')

    <script src="{{ asset('assets/admin/js/admin.js') }}"></script>
</body>

</html>