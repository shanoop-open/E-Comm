<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Comm</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>

<style>
    .custom_login{
        height: 500px;
        padding-top: 200px;
        padding-right:300px
    }

    .slider-img{
        height: 200px !important;
        padding-left: 600px
    }

    .slider-text{
        background-color: rgb(249, 249, 249) !important;
        padding: 30px;
        margin-left: 500px;
        margin-right:500px;
        margin-bottom: 100px;
        margin-bottom: 100px;
    }

    .trending-img{
        height: 100px;
    }

    .trending-item{
        float: left;
        width: 25%
    }

    .trending-wrapper{
        padding: 50px
    }

    .searched-item{
        border: 1px;
        margin: 10px;
        padding: 10px;
        padding-bottom: 35px
    }
</style>
</html>