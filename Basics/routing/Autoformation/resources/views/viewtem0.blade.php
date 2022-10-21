3 @extends('layouts.base')



<h2> dear lord otwell </h2>
<p>i hereby  challenge you to duel for the honour of laravel ,legit this time</p>
{{--this is how you would echo sth in blade is it tho xd --}}

<p>{{$RandomArray = 2}}</p>
{{--Since the Blade template directives are translated directly to PHP, we can use any PHP
code within these brackets, including methods.
--}}
1 <p>{{ date('d/m/y') }}</p>
{{-- 3 <p>{{ '<script>alert(“CHUNKY BACON!”);</script>' }}</p>
 this will inject a script in our template well nasty ruby developers,how do we skip it tho ? well:--}}

 2 <p>{{ '<script>alert(“CHUNKY BACON!”);</script>' }}</p>
 {{--if you wanna disable autoEscaping and let some injection smack you like zoubir smirk well--}}

 3 <p>{!! '<script>alert("CHUNKY Zobir!");</script>' !!}</p>

 {{--forget your vanilla way of writing php when writing loop if statement , blade for DA WIN --}}

   {{$thomasthetrain = "no"}};
 4 @if ($thomasthetrain === "awesome")
 4 <p>we friends!</p>
 5 @else
 6 <p>we are not friend you monster!</p>
 7 @endif
 {{--more conditional Ya BOIh--}}

 {{$something ="Giant Panda"}}
 @if ($something == 'Red Panda')
 <p>Something is red, white, and brown!</p>
 @elseif ($something == 'Giant Panda')
<p>Something is black and white!</p>
 @else
 <p>Something could be a squirrel.</p>
 @endif
{{--loop want to know your location ,nah seriously blade are awesome--}}
<?php $manyThings=["say ","hi ","colorado ","im ","a ","giraffe!!!! "]?>
@foreach ($manyThings as $thing)
 <span>{{ $thing }}</span>
 @endforeach
 {{--for loop you heard it right , go back to square like drake said--}}
 @for ($i = 0; $i < 5; $i++)
 <p>Even {{ $i }} red pandas, aren't enough!</p>
 @endfor
 {{--if you're like you could just include other blade into your current by using include--}}
 @include('welcome')
 {{--template inheritence ! Some parts of a web page don’t change across
each page. These are the tags that need to be present for any web page we view. We
can call it our boilerplate code--}}

{{--<!doctype html>
2 <html lang="en">
3 <head>
4 <meta charset="UTF-8">
5 <title></title>
6 </head>
7 <body>
8 </body>
9 </html>
--}}