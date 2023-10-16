<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- SEO対策 -->
    <meta
      content="ポートフォリオサイトをご覧いただきありがとうございます。はじめまして、Hiroki Chiyodaと申します。 私は株式投資をきっかけにプログラミングを勉強しています。まずは取引データの管理に役立つと思いPHPとMySQLを学びました。 その後、Web開発を本格的に学ぶためにLaravelやHTML、CSSを学びました。 またPythonやFlutterにも興味を持ち自己学習を続けています。自分が学んだことをアウトプットすることが大切だと考え、Webアプリやスマートフォンアプリを開発してきました。"
      name="description"
    />
    <meta
      property="og:title"
      content="Wellcome to My Portfolio - Hiroki Chiyodaのポートフォリオサイトにようこそ"
    />
    <meta
      property="og:description"
      content="ポートフォリオサイトをご覧いただきありがとうございます。はじめまして、Hiroki Chiyodaと申します。 私は株式投資をきっかけにプログラミングを勉強しています。"
    />
    <meta property="og:type" content="ページの種類" />
    <meta property="og:url" content="https://portfolio.arafipro.com/" />
    <!-- <meta property="og:image" content="サムネイル画像の URL" /> -->
    <meta
      property="og:site_name"
      content="Wellcome to My Portfolio - Hiroki Chiyodaのポートフォリオサイトにようこそ"
    />
    <meta property="og:locale" content="ja_JP" />
    <meta
      name="keywords"
      content="streamlit,ポートフォリオ,html,css,sass,wordpress,ts,react,nextjs,vue,tailwind,python,django,php,laravel,dart,flutter,git,github,vscode,figma,mysql,sqlite"
    />
    <!-- SEO対策 終了-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <title>ARAFIPRO</title>
    <!-- Google tag (gtag.js) -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=G-TG1DR49E5G"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "G-TG1DR49E5G");
    </script>
		<?php wp_head(); ?>
  </head>
  <body>
    <div id="scroll"></div>
    <!-- 固定ヘッダー -->
    <header id="header" class="header_top">
      <div id="header_main">
        <h1>
          <a href="#">
            <img src="<?php echo get_template_directory_uri();?>/images/logo_black.png" alt="" />
          </a>
        </h1>
        <nav>
          <ul id="nav_menu">
            <li><a href="#" class="nav_link">Home</a></li>
            <li><a href="#about" class="nav_link">About</a></li>
            <li><a href="#skills" class="nav_link">Skills</a></li>
            <li>
              <a href="#products" class="nav_link">Products</a>
              <!-- サブメニュー
              <div class="sub_menu">
                <ul>
                  <li><a href="#hp">ホームページ</a></li>
                  <li><a href="#webapp">Webアプリ</a></li>
                  <li><a href="#spapp">スマートフォンアプリ</a></li>
                </ul>
              </div> -->
            </li>
            <li><a href="#contact" class="nav_link">Contact</a></li>
            <!-- <li><a href="#news" class="nav_link">News</a></li> -->
          </ul>
        </nav>
        <div class="nav_icon">
          <i class="ri-menu-line" id="menu_icon"></i>
          <i class="ri-close-line" id="close_icon"></i>
        </div>
      </div>
      <div class="header_content">
        <img src="<?php echo get_template_directory_uri();?>/images/human.png" alt="" />
        <p>
          <span>Wellcome to My Portfolio</span>
          <br />
          Hiroki Chiyodaのポートフォリオサイトにようこそ
        </p>
      </div>
    </header>
