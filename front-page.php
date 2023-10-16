<?php get_header();?>
<main>
      <section id="about" class="about jump_point">
        <h2>About</h2>
        <div>
          <img src="<?php bloginfo("template_url");?>/images/human.png" alt="" />
          <p>
            ポートフォリオサイトをご覧いただきありがとうございます。<br />
            はじめまして、Hiroki Chiyodaと申します。
            私は株式投資をきっかけにプログラミングを勉強しています。<br />
            まずは取引データの管理に役立つと思いPHPとMySQLを学びました。
            その後、Web開発を本格的に学ぶためにLaravelやHTML、CSSを学びました。
            またPythonやFlutterにも興味を持ち自己学習を続けています。<br />
            自分が学んだことをアウトプットすることが大切だと考え、Webアプリやスマートフォンアプリを開発してきました。<br />
            よろしくお願いいたします。
          </p>
        </div>
      </section>
      <section id="skills" class="skill jump_point">
        <h2>Skills</h2>
        <div>
          <h3>ホームページ</h3>
          <a href="https://skillicons.dev">
            <img
              src="https://skillicons.dev/icons?i=html,css,sass,wordpress&theme=light"
            />
          </a>
        </div>
        <div>
          <h3>Webアプリ</h3>
          <a href="https://skillicons.dev" class="api">
            <img
              src="https://skillicons.dev/icons?i=ts,react,nextjs,vue,tailwind&theme=light"
            />
            <img src="https://skillicons.dev/icons?i=php,laravel&theme=light" />
            <img
              src="https://skillicons.dev/icons?i=python,django&theme=light"
            />
          </a>
        </div>
        <div>
          <h3>スマートフォンアプリ</h3>
          <a href="https://skillicons.dev">
            <img
              src="https://skillicons.dev/icons?i=dart,flutter&theme=light"
            />
          </a>
        </div>
        <div>
          <h3>データベース</h3>
          <a href="https://skillicons.dev">
            <img
              src="https://skillicons.dev/icons?i=mysql,sqlite&theme=light"
            />
          </a>
        </div>
        <div>
          <h3>ツール</h3>
          <a href="https://skillicons.dev">
            <img
              src="https://skillicons.dev/icons?i=git,github,vscode,postman,figma&theme=light"
            />
          </a>
        </div>
      </section>
      <section id="products" class="product jump_point">
        <h2>Products</h2>
        <div class="categories">
          <h3 id="hp" class="category jump_point">ホームページ</h3>
          <div>
            <a href="#" target="_top">
              <h3>ポートフォリオサイト<br />ARAFIPRO</h3>
              <h4>当ポートフォリオサイト</h4>
              <h5>HTML CSS SASS JavaScript</h5>
              <div class="img">
                <img src="<?php bloginfo("template_url");?>/images/ss-portfolio.jpg" alt="" />
              </div>
            </a>
          </div>
          <div>
            <a href="https://jpstockminimemo.arafipro.com/" target="_blank">
              <h3>LP<br />日本株ひとこと投資メモ</h3>
              <h4>ひとこと投資メモを紹介するLPサイト</h4>
              <h5>HTML CSS</h5>
              <div class="img">
                <img src="<?php bloginfo("template_url");?>/images/ss-jpstockminimemoLP.jpg" alt="" />
              </div>
            </a>
          </div>
          <div>
            <a href="https://usstockminimemo.arafipro.com/" target="_blank">
              <h3>LP<br />米国株ひとこと投資メモ</h3>
              <h4>ひとこと投資メモを紹介するLPサイト</h4>
              <h5>HTML CSS</h5>
              <div class="img">
                <img src="<?php bloginfo("template_url");?>/images/ss-usstockminimemoLP.jpg" alt="" />
              </div>
            </a>
          </div>
          <div>
            <a href="https://portfolio.arafipro.com/amanda_figma_blog-sample/" target="_top">
              <h3>サンプルサイト</h3>
              <h4>Figmaのデザインカンプから<br />コーディングのサンプル</h4>
              <h5>HTML CSS SASS Figma</h5>
              <div class="img">
                <img src="<?php bloginfo("template_url");?>/images/ss-amanda-demo.jpg" alt="" />
              </div>
            </a>
          </div>
        </div>
        <div class="categories">
          <h3 id="webapp" class="category">Webアプリ</h3>
          <div>
            <a href="https://trade-next-prisma-test.vercel.app/" target="_blank">
              <h3>日本株取引記録</h3>
              <h4>銘柄別投資額割合<br />取引一覧・銘柄一覧</h4>
              <h5>Nextjs TypeScript<br />TailwindCSS Prisma</h5>
              <div class="img">
                <img src="<?php bloginfo("template_url");?>/images/ss-usstocktradedashboard.png" alt="" />
              </div>
            </a>
          </div>
          <div>
            <a href="https://usstockchartlite-arafipro.streamlit.app/" target="_blank">
              <h3>米国相場各種チャート</h3>
              <h4>個別銘柄ローソク足チャート<br />VIXやWTIなど</h4>
              <h5>Python Streamlit</h5>
              <div class="img">
                <img src="<?php bloginfo("template_url");?>/images/ss-usstockchartlite.jpg" alt="" />
              </div>
            </a>
          </div>
        </div>
        <div class="categories">
          <h3 id="spapp" class="category">スマートフォンアプリ</h3>
          <div>
            <a href="https://jpstockminimemo.arafipro.com/" target="_blank">
              <h3>株取引記録アプリ<br />日本株ひとこと投資メモ</h3>
              <h4>日本株投資をスムーズにするひとことメモ</h4>
              <h5>Flutter - iPhone & Android</h5>
              <div class="img">
                <img src="<?php bloginfo("template_url");?>/images/ss-jpstockminimemo.png" alt="" />
              </div>
            </a>
          </div>
          <div>
            <a href="https://usstockminimemo.arafipro.com/" target="_blank">
              <h3>株取引記録アプリ<br />米国株ひとこと投資メモ</h3>
              <h4>米国株投資をスムーズにするひとことメモ</h4>
              <h5>Flutter - iPhone & Android</h5>
              <div class="img">
                <img src="<?php bloginfo("template_url");?>/images/ss-usstockminimemo.png" alt="" />
              </div>
            </a>
          </div>
        </div>
      </section>
      <!-- <section id="news" class="news">
        <h2>News</h2>
        <dl>
          <dt>2022/11/13</dt>
          <dd>News 1</dd>
          <dt>2022/12/1</dt>
          <dd>News 2</dd>
          <dt>2022/12/18</dt>
          <dd>News 3</dd>
          <dt>2023/1/21</dt>
          <dd>News 4</dd>
          <dt>2023/2/1</dt>
          <dd>News 5</dd>
        </dl>
      </section> -->
      <section id="contact" class="contact">
        <h2>Contact</h2>
        <h3>
          お問い合わせは&nbsp;<a href="mailto:contact@arafipro.com">
            contact@arafipro.com
          </a>
          &nbsp;へ
        </h3>
        <!-- <h3>お問い合わせは以下のフォームから</h3> -->
        <!-- <form action="./php/sendmail.php" method="post">
          <div>
            <div class="input_wrapper">
              <input type="text" placeholder=" " id="name" name="name" required />
              <span>名前</span>
            </div>
            <div class="input_wrapper">
              <input type="email" placeholder=" " id="email" name="email" required />
              <span>メールアドレス</span>
            </div>
            <div class="input_wrapper">
              <input type="text" placeholder=" " id="subject" name="subject" required />
              <span>件名</span>
            </div>
            <div class="input_wrapper">
							<textarea id="message" placeholder=" " name="message" required></textarea>
              <span>メッセージ</span>
            </div>
          </div>
          <div class="btn">
            <button type="submit">送信</button>
            <button type="reset">リセット</button>
          </div>
        </form> -->
      </section>
    </main>
		<?php get_footer();?>
