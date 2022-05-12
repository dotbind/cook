<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
    <title>@yield('title')</title>
    <style>
        table {
         width: 100%;
         text-align: center;
         border-collapse: collapse;
         border-spacing: 0;
        }
        table th {
         padding: 10px;
         background: #e9faf9;
         border: solid 1px #778ca3;
        }
        table td {
         padding: 10px;
         border: solid 1px #778ca3;
        }
     </style>
</head>
<body>
    @yield('content')
    @include('components.modal')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ mix('js/all.js') }}"></script>
</body>
</html>