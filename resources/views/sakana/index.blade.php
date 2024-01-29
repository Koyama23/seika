<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>魚検索サイト</title>
        
        <style>
        
            .centered-container {
            text-align: center;
            }
    
            h1 {
            font-size: 2em; /* フォントサイズを調整 */
            margin: 20px 0; /* 上下のマージンを追加 */
            }

            a {
    
            color: #3366cc; /* リンクの色を設定 */
            text-decoration: none; /* リンクの下線をなくす */
            font-size: 2em; /* フォントサイズを調整 */
            margin: 20px 0; /* 上下のマージンを追加 */
            }

        
            table {
                    border-collapse: collapse;
                     width: 100%; /* テーブル全体の幅を100%に設定 */
                    }

            td {
                border: 1px solid #ddd; /* セルのボーダーを追加 */
                padding: 8px; /* セルの内側の余白を調整 */
                text-align: center; /* セル内のテキストを中央揃えに設定 */
                width: 20%; /* セルの幅を調整（例として20%） */
                }

            .fish {
                 /* 魚の要素に対するスタイルを追加 */
                background-color: #87cefa; /* 背景色を設定 */
                padding: 10px; /* 内側の余白を調整 */
                margin-bottom: 10px; /* 下側のマージンを追加 */
                border-radius: 5px; /* 角を丸くする */
                }

            .fish a {
                text-decoration: none; /* リンクの下線をなくす */
                color: #333; /* テキストの色を設定 */
                }   
    
            .fish h3 {
                margin: 0; /* h3のマージンをリセット */
                font-size: 16px; /* フォントサイズを設定 */
                }

            .delete-button {
                background-color: #d9534f; /* 削除ボタンの背景色を設定 */
                color: #fff; /* 削除ボタンのテキスト色を設定 */
                border: none; /* ボーダーをなくす */
                padding: 5px 10px; /* パディングを設定 */
                cursor: pointer; /* カーソルをポインターに設定 */
                border-radius: 3px; /* 角を丸くする */
                }
        </style>

        </head>
        
    <body>
        <div style="text-align: center">
        <font size="10"><h1>魚検索サイト</h1></font>
        <a href="/fishes/create">登録フォームへ</a>
        </div>
        <table>
        {{--<!--    @foreach($fishes as $fish)-->
            <div class='fish'>
              <a href="/fishes/{{ $fish->id }}"><h3 class='name'>{{$fish->name}}</h3></a>
             </div>
                <form action="/fishes/{{ $fish->id }}" id="form_{{ $fish->id }}" method="post">
              @csrf
              @method('DELETE')
         <button type="button" onclick="deleteFish({{ $fish->id }})">削除</button> 
        </form>
        @endforeach
        </table>
        --}}
        
<table>
    <tr>
    @foreach($fishes as $fish)
        <td>
            <div class='fish'>
                <a href="/fishes/{{ $fish->id }}"><h3 class='name'>{{ $fish->name }}</h3></a>
            </div>
            <form action="/fishes/{{ $fish->id }}" id="form_{{ $fish->id }}" method="post">
                @csrf
                @method('DELETE')
                <button type="button" onclick="deleteFish({{ $fish->id }})">削除</button> 
            </form>
        </td>
            @if($loop->iteration % 5 == 0 && !($loop->last))
            </tr><tr>
            @endif
    @endforeach
    </tr>
</table>

      
        <script>
             function deleteFish(id){
                 'use strict'
                 if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                 document.getElementById(`form_${id}`).submit();
                }
             }
        </script>
    </body>
</html>
