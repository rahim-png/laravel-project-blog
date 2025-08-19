<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home.blad.php</title>
    @include('common.header')
</head>
<body>

 
    <a href="/home">home</a>
    <a href="/about">about</a>
    <p>home page new one</p>
  
     <div>
    <P>the name of the person from fun function is :{{ $na }}</P>
   @foreach ($us as $arU)
   <p>the array users name :{{ $arU }}</p>

   @if ($arU=='ray')
     <p>hi boss {{ $arU }}</p>
   @elseif($arU=='max')
     <h3>where is {{$arU}}</h3>
   @endif

    @endforeach
    
   </div>
    @include('common.footer')

   
</body>
</html>