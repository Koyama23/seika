<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>魚検索サイト</title>
        </head>
    <body>
        </div>
         <div class='content_fish'>
             <font size='5'>
             魚名<h2 class='name'>{{$fish->name}}</h2>  
             旬の時期<h2 class='season'>{{$fish->season}}</h2>
             価格帯<h2 class='price'>{{$fish->price}}</h2>
             食べ方<h2 class='eat'>{{$fish->eat}}</h2>
             生息域<h2 class='habitat'>{{$fish->habitat}}</h2>
            </font>
         </div>
         <div class='edit'>
             <a href='/fishes/{{ $fish->id }}/edit'>編集</a>
         <div class='footer'>
             <a href='/'>戻る</a>
         </div>
    </body>
</html>
