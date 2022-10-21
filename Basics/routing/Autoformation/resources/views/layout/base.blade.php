<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" src='random.css'> {{--if i have some  css file and i extended this into a template
        it'll affect all of em--}}
    <title></title>

</head>
<body>
    <header>
        <h2 style="color: brown">
        @yield('banner')
        </h2>
    


    </header>




    <h1>
     @yield('body') {{-- any content from the views i want it to be inserted here--}}
    </h1>

</body>

</html>