<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>魚検索サイト</title>
            <style>
        h1 {
            font-size: 32px; /* フォントサイズを設定 */
            color: #3366cc; /* テキストの色を設定 */
            text-align: center; /* テキストを中央揃えに設定 */
            margin-bottom: 20px; /* 下側のマージンを追加 */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); /* テキストに影を追加 */
         }
        
        .content_name {
            margin-bottom: 20px; /* 下側のマージンを追加 */
            text-align: center;
        }

        .content_name h2 {
            font-size: 24px; /* h2のフォントサイズを設定 */
            margin-bottom: 10px; /* h2の下側のマージンを追加 */
            text-align: center;
        }

        .content_name input[type="text"] {
            width: 150px; /* 幅を設定 */
            padding: 8px; /* 内側の余白を調整 */
            border: 1px solid #ccc; /* ボーダーを追加 */
            background-color: #f5f5f5; /* 背景色を設定 */
            color: #333; /* テキストの色を設定 */
            text-align: center;
        }
        
        
        .content_season {
            margin-bottom: 20px; /* 下側のマージンを追加 */
            text-align: center;
        }

        .content_season h2 {
            font-size: 24px; /* h2のフォントサイズを設定 */
            margin-bottom: 10px; /* h2の下側のマージンを追加 */
            text-align: center;
        }

        .content_season input[type="text"] {
            width: 150px; /* 幅を設定 */
            padding: 8px; /* 内側の余白を調整 */
            border: 1px solid #ccc; /* ボーダーを追加 */
            background-color: #f5f5f5; /* 背景色を設定 */
            color: #333; /* テキストの色を設定 */
            text-align: center;
        }
    
        .content_price {
            margin-bottom: 20px; /* 下側のマージンを追加 */
            text-align: center;
        }

        .content_price h2 {
            font-size: 24px; /* h2のフォントサイズを設定 */
            margin-bottom: 10px; /* h2の下側のマージンを追加 */
            text-align: center;
        }
    
        .content_price input[type="text"] {
            width: 100px; /* 幅を設定 */
            padding: 8px; /* 内側の余白を調整 */
            border: 1px solid #ccc; /* ボーダーを追加 */
            background-color: #f5f5f5; /* 背景色を設定 */
            color: #333; /* テキストの色を設定 */
            text-align: center;
        }
    
        .content_eat {
            margin-bottom: 20px; /* 下側のマージンを追加 */
            text-align: center;
        }

        .content_eat h2 {
            font-size: 24px; /* h2のフォントサイズを設定 */
            margin-bottom: 10px; /* h2の下側のマージンを追加 */
            text-align: center;
        }

        .content_eat input[type="text"] {
            width: 200px; /* 幅を設定 */
            padding: 8px; /* 内側の余白を調整 */
            border: 1px solid #ccc; /* ボーダーを追加 */
            background-color: #f5f5f5; /* 背景色を設定 */
            color: #333; /* テキストの色を設定 */
            text-align: center;
        }
    
        .content_habitat {
            margin-bottom: 20px; /* 下側のマージンを追加 */
            text-align: center;
        }

        .content_habitat h2 {
            font-size: 24px; /* h2のフォントサイズを設定 */
            margin-bottom: 10px; /* h2の下側のマージンを追加 */
            text-align: center;
        }

        .content_habitat input[type="text"] {
            width: 300px; /* 幅を設定 */
            padding: 8px; /* 内側の余白を調整 */
            border: 1px solid #ccc; /* ボーダーを追加 */
            background-color: #f5f5f5; /* 背景色を設定 */
            color: #333; /* テキストの色を設定 */
            text-align: center;
        }
    
         /* フォームのスタイル */
        form {
            max-width: 400px; /* フォームの最大幅を設定 */
            margin: 0 auto; /* フォームを中央揃えに設定 */
            display: flex; /* フレックスコンテナに設定 */
            flex-direction: column; /* 子要素を縦方向に配置 */
            align-items: center; /* 子要素を中央揃えに設定 */
        }

        input[type="submit"] {
            background-color: #4caf50; /* ボタンの背景色を設定 */
            color: #fff; /* ボタンのテキスト色を設定 */
            padding: 10px 20px; /* ボタンの内側の余白を調整 */
            border: none; /* ボーダーをなくす */
            border-radius: 5px; /* 角を丸くする */
            cursor: pointer; /* カーソルをポインターに設定 */
            margin-top: 20px;
        }

        /* フッターのスタイル */
        .footer {
            margin-top: 20px; /* 上側のマージンを追加 */
            text-align: center; /* テキストを中央揃えに設定 */
        }

        .footer a {
            color: #3366cc; /* リンクの色を設定 */
            text-decoration: none; /* リンクの下線をなくす */
        }
        
    </style>
                  </head>
    <body>
        <h1>魚の情報</h1>
      <form action="/fishes/{{ $fish->id }}" method="POST">
          @csrf
          @method('PUT')
          <div class='content_name'>
              <h2>魚名</h2>
              <input type="text" name="fish[name]" value="{{ $fish->name }}" required>
          </div>
           <div class='content_season'>
              <h2>旬の時期</h2>
              <input type="text" name="fish[season]" value="{{ $fish->season }}" required>
          </div>
           <div class='content_price'>
              <h2>価格帯</h2>
              <input type="text" name="fish[price]"  value="{{ $fish->price }}" required>
          </div>
           <div class='content_eat'>
              <h2>食べ方</h2>
              <input type="text" name="fish[eat]" value="{{ $fish->eat }}" required>
          </div>
           <div class='content_habitat'>
              <h2>生息域</h2>
              <input type="text" name="fish[habitat]" value="{{ $fish->habitat }}"required>
          </div>
              <?php
             $image_dir = "/storage/";
             $path = $image_dir.$fish->image;
             ?>
              <h2>画像アップロード</h2>
              <input type="file" name="fish[image]" file="{{ $fish->image }}">
             <input type="submit" value="更新">   
      </form>
         <div class='footer'>
             <a href='/fishes/{{ $fish->id }}'>戻る</a>
         </div>
    </body>
</html>
