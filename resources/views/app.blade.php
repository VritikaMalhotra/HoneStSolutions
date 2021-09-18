<html lang="en">

<head>
    @include('layout/head')
    <link rel="stylesheet" href="../../public/scss/main.scss">
    <link href="/css/app.css" rel="stylesheet">
    <link href="/scss/main.scss" rel="stylesheet">
    
</head>
<body>
    @include('layout/header')

    @section('main-content')
        @show

    @include('layout/footer')    
</body>
</html>
