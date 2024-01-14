<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>魚検索サイト</title>
        </head>
    <body>
        <h1>魚の情報</h1>
      <form action="/fishes/{{ $fish->id }}" method="POST">
          @csrf
          @method('PUT')
          <div class='content_name'>
              <h2>魚名</h2>
              <input type="text" name="fish[name]" value="{{ $fish->name }}">
          </div>
           <div class='content_season'>
              <h2>旬の時期</h2>
              <input type="text" name="fish[season]" value="{{ $fish->season }}">
          </div>
           <div class='content_price'>
              <h2>価格帯</h2>
              <input type="text" name="fish[price]"  value="{{ $fish->price }}">
          </div>
           <div class='content_price'>
              <h2>食べ方</h2>
              <input type="text" name="fish[eat]" value="{{ $fish->eat }}">
          </div>
           <div class='content habitat'>
              <h2>生息域</h2>
              <input type="text" name="fish[habitat]" value="{{ $fish->habitat }}">
          </div>
          <div>
             <input type="submit" value="更新">   
          </div>
      </form>
         <div class='footer'>
             <a href='/fishes/{{ $fish->id }}'>戻る</a>
         </div>
    </body>
</html>
