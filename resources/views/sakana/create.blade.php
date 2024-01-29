<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>魚検索サイト</title>
        </head>
    <body>
        <h1>魚の情報</h1>
      <form action="/fishes" method="POST">
          @csrf
          <div class="name">
              <h2>魚名</h2>
              <input type="text" name="fish[name]" placeholder="カタカナ魚名" style="width:200px;">
          </div>
           <div class="season">
              <h2>旬の時期</h2>
              <input type="text" name="fish[season]" placeholder="春～夏" style="width:200px;">
          </div>
           <div class="price">
              <h2>価格帯</h2>
              <input type="text" name="fish[price]" placeholder="高or中or安" style="width:200px;">
          </div>
           <div class="eat">
              <h2>食べ方</h2>
              <input type="text" name="fish[eat]" placeholder="焼き、煮付け" style="width:200px;">
          </div>
           <div class="habitat">
              <h2>生息域</h2>
              <input type="text" name="fish[habitat]" placeholder="西太平洋、インド洋の熱帯・温帯域" style="width:200px;">
          </div>
          <div>
             <input type="submit" value="登録">   
          </div>
      </form>
         <div class='footer'>
             <a href='/'>戻る</a>
         </div>
    </body>
</html>
