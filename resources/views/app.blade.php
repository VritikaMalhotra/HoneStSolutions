<html lang="en">

<head>
    @include('layout/head')
    <link rel="stylesheet" href="../../public/scss/main.scss">
    
</head>
<body>
    @include('layout/header')

    @section('main-content')
        @show

    @include('layout/footer')    
</body>
</html>
