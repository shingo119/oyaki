<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>


<body>
  <!-- ヘッダー -->
<header class="header">

  <div class="header_sub_left">
    <div class="header_sub_menu">
      <img style="width:60px; margin-right:20px" src="img/rang.png" alt="">
    </div>
    <div class="header_sub_menu">
      <img class="chin" style="width:160px; margin-right:15px;" src="img/chin.png" alt="">
    </div>
    <div class="header_sub_menu">
      <img style="width:70px" src="img/pin.png" alt="">
    </div>
  </div>

  <div class="header_icon">
    <img style="width:315px" src="img/header_icon.png" alt="">
  </div>

  <div class="header_sub_right">
    <div class="header_sub_menu sign_up">
      <img style="width:160px; margin-right:10px" src="img/sign_up.png" alt="">
    </div>
    <div class="header_sub_menu">
      <img style="width:30px; margin-right:10px" src="img/sarch.png" alt="">
    </div>
    <div class="header_sub_menu">
      <img style="width:30px; margin-right:10px" src="img/hurt.png" alt="">
    </div>
    <div class="header_sub_menu">
      <img style="width:30px" src="img/bug.png" alt="">
    </div>
  </div>
</header>
<div class="header_seperater">
  <img style="width:35px" src="img/header_seperater_icon.png" alt="">
</div>
  <div class="header_navigation">
    <ul class="header_menu_list">
      <li class="header_menu high_jewely">ハイジュエリー</li>
      <li class="header_menu jewely_collection">ジュエリーコレクション</li>
      <li class="header_menu engage">エンゲージメント＆ブライダル</li>
      <li class="header_menu watch">ウォッチ</li>
      <li class="header_menu fragrance">フレグランス</li>
      <li class="header_menu gift">ギフト</li>
      <li class="header_menu the_house">ザ ハウス</li>
    </ul>
    <div class="header_menu_navi_list">
      <div class="header_menu_navi high_jewely_navi">
        <ul>
          <h1>ユニーク ジュエリー</h1>
          <li>ユニーク ソリテール</li>
          <li>ユニーク タイムピース</li>
        </ul>
        <ul>
          <h1>宝石別に見る</h1>
          <li>ホワイト ダイヤモンド</li>
          <li>イエロー ダイヤモンド</li>
          <li>カラーダイヤモンド</li>
          <li>エメラルド</li>
          <li>サファイヤ</li>
          <li>ルビー</li>
        </ul>
        <ul>
          <h1>歴史的ダイヤモンド</h1>
          <li>ザ グラフ インフィニティ</li>
          <li>グラフ レセディ ラ ロナ</li>
          <li>エターナル ツインズ</li>
          <li>グラフ ヴィーナス</li>
          <li>グラフ ヴァンドーム</li>
          <li>ゴールデン エンプレス</li>
          <li>ダイヤモンドの歴史</li>
        </ul>
        <ul>
          <img src="" alt="">
        </ul>
        <ul>
          <h1>FEATURED</h1>
          <h2>デカダンスを気取ってドレスアップ</h2>
          <p>ホリデーシーズンを先取りして極上のハイジュエリーを身に纏い、デカダンスな気分を愉しんで。</p>
          <a href=""><button>さらに詳しく見る</button></a>
        </ul>
      </div>

      <div class="header_menu_navi jewely_collection_navi"></div>
      <div class="header_menu_navi engage_navi"></div>
      <div class="header_menu_navi the_house_navi"></div>
    </div>
  </div>


<!-- ヘッダー -->

<!-- メインコンテンツ -->
  <div class="main">
    <div class="main_video">
      <video src="main_video.mp4" style="width:1100px; height:610px" autoplay loop muted></video>
    </div>
    <div class="recommend_item_description">
      <div class="description_wrap">
        <h2 class="main_h2">極上のカラーダイヤモンド</h2>
        <p class="main_sub_title">自然の奇跡</p>
        <p class="main_description">おそらく極上のカラーダイヤモンド以上に、壮麗な美しさと希少価値を持つ貴石はこの世に存在しません。世界で最も魅力的でミステリアス、その数も非常に少ない希少な宝石です。世界で最も歴史的なピンクダイヤモンドとブルーダイヤモンドの多くは、ハウス オブ グラフを通じてこの世に送り出されました。神秘的で魔法のような美しさを讃えた極上のカラーダイヤモンドジュエリーとして、丁寧に創り出されています。</p>
      </div>
    </div>
  </div>
  <!-- メインコンテンツ -->
  <div class="glb_content">
    <model-viewer id="static-model" src="glb/Astronaut.glb" shadow-intensity="1" camera-controls alt="A 3D model of an astronaut">
      <!-- <div class="controls">
        <button onclick="exportGLB()">Export GLB</button>
      </div> -->
    </model-viewer>
  </div>


  <!-- フッター -->
 <div class="unity_gate_btn">
  <button class="unity_btn">SHOPに来店する</button> 
 </div>
  <!-- フッター -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
<script>
  async function exportGLB(){
    let modelViewer = document.getElementById("static-model");
    const glTF = await modelViewer.exportScene();
    var file = new File([glTF], "export.glb");
    var link = document.createElement("a");
    link.download =file.name;
    link.href = URL.createObjectURL(file);
    link.click();
  }
</script>
</body>
</html>