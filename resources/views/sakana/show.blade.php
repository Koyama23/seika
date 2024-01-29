<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>魚検索サイト</title>
        
    
    <style>
       h1 {
        font-size: 1.5em; /* h2のフォントサイズを調整 */
        margin-bottom: 10px; /* 下方向の余白を追加 */
        text-align: center;
    }
    
    body {
        font-family: 'Arial', sans-serif; /* フォントファミリーを設定 */
        background-color: #f8f8f8; /* 背景色を設定 */
        margin: 0; /* ページ全体のマージンをリセット */
        padding: 0; /* ページ全体のパディングをリセット */
    }

    .content_fish {
        text-align: center; /* テキストを中央揃えに設定 */
        margin: 20px; /* 上下左右のマージンを追加 */
    }

    h2 {
        font-size: 2em; /* h2のフォントサイズを大きく調整 */
        margin-bottom: 30px; /* 下方向の余白を追加 */
        color: #333; /* テキストの色を設定 */
    }

    .edit, .footer {
        text-align: center; /* テキストを中央揃えに設定 */
        margin-top: 20px; /* 上方向のマージンを追加 */
    }

    .edit a, .footer a {
        color: #3366cc; /* リンクの色を設定 */
        text-decoration: none; /* リンクの下線をなくす */
        font-size: 1.5em; /* リンクのフォントサイズを調整 */
    }
    
    .layout{
    padding: 0.5em 1em;
        margin-bottom: 10px; /* 下方向の余白を追加 */
        border: 3px solid;
        width: 110px;
        height: 30px;
        font-size: 1.5em;
        display: flex; /* フレックスコンテナに設定 */
        align-items: center; /* 子要素を垂直方向に中央揃えに設定 */
        justify-content: center; /* 子要素を水平方向に中央揃えに設定 */
        margin: 0 auto; /* 水平方向に中央揃えに設定 */
    }

</style>
        </head>
    <body>
        <font size="5"><h1>魚検索結果</h1></font>
        </div>
         <div class='content_fish'>
             <p class=layout>魚名</p><h2 class='name'>{{$fish->name}}</h2>  
             <p class=layout>旬の時期</p><h2 class='season'>{{$fish->season}}</h2>
             <p class=layout>価格帯</p><h2 class='price'>{{$fish->price}}</h2>
             <p class=layout>食べ方</p><h2 class='eat'>{{$fish->eat}}</h2>
             <p class=layout>生息域</p><h2 class='habitat'>{{$fish->habitat}}</h2>
            </font>
         </div>
         <div class='edit'>
             <a href='/fishes/{{ $fish->id }}/edit'>編集</a>
         <div class='footer'>
             <a href='/'>戻る</a>
         </div>
    </body>
</html>
