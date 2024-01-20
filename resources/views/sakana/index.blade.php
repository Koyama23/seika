<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>魚検索サイト</title>
        </head>
    <body>
        <div style="text-align: center">
        <font size="10"><h1>魚検索サイト</h1></font>
        <a href="/fishes/create">登録フォームへ</a>
        </div>
            @foreach($fishes as $fish)
            <div class='fish'>
              <a href="/fishes/{{ $fish->id }}"><h3 class='name'>{{$fish->name}}</h3></a>
             </div>
                <form action="/fishes/{{ $fish->id }}" id="form_{{ $fish->id }}" method="post">
              @csrf
              @method('DELETE')
         <button type="button" onclick="deleteFish({{ $fish->id }})">削除</button> 
        </form>
        @endforeach
        
        <div class='paginate'>{{ $fishes->links()}}</div>
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
