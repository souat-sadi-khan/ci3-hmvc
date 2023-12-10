<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Global Controller</title>
    <link rel="shortcut icon" href="images/favicon.ico"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= base_url() . 'assets/css/main.css' ?>">
    <link rel="stylesheet" href="<?= base_url() . 'assets/css/toastr.min.css' ?>">
    <link rel="stylesheet" href="<?= base_url() . 'assets/css/login.css' ?>">
    <style>
        .text-custom {
            color: #E01C1B;
        }

        .text-custom:hover, .text-custom:focus {
            color: #E01C1B;
        }

        .btn-primary {
            background-color: #E01C1B;
            border:#E01C1B;
        }

        .btn-primary:hover, .btn-primary:focus {
            background-color: #E01C1B;
        }

        .custom-checkbox .custom-control-input:checked~.custom-control-label::before{
            background-color: #E01C1B;
            color: #fff;
        }
    </style>
</head>
<body>
