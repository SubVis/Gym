<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href=" {{ URL::asset('dashboard/css/bootstrap.min.css') }}  ">
<!-- 
    <link rel="stylesheet" href=" {{ URL::asset('dashboard/css/AdminLTE.min.css') }}  ">
    <link rel="stylesheet" href=" {{ URL::asset('dashboard/css/ionicons.min.css') }}  ">
    <link rel="stylesheet" href=" {{ URL::asset('dashboard/css/skin-blue.min.css') }}  "> -->

    <title>Dashboard</title>
</head>
<body>

    <div id="dash">
        <dashboard></dashboard>
    </div>

</body>

    <script src="{{ asset('js/app.js') }}"></script>
<!--     
    <script src="{{ asset('dashboard/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/adminlte.min.js') }}"></script> -->

</html>