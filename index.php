<?php

/**
 * 
 * Landing Page
 * 
 */ ?>
<?php get_header(); ?>
<div class="hero bg-gradient--page">
    <div class="container">
        <div class="hero__wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero/hero-bg.svg" alt="ABSTRACT DESIGN" class="img-fluid" width="1000" height="500" loading="lazy">

            <div class="hero-content">
                <div class="hero-content__logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/logo-icon.svg" alt="DUNX" class="img-fluid" width="391" height="100" loading="lazy">
                </div>

                <h1 class="hero-content__title">アーティストのすべてが<br>ひとつのアプリに</h1>
            </div>
        </div>
    </div>
</div>

<main class="main" id="main">
    <!-- about -->
    <section class="about bg-gradient--right" id="about">
        <div class="container">
            <div class="about__wrapper">
                <h2 class="heading-primary">ABOUT</h2>
                <div class="about__column">
                    <div class="about__left">
                        <div class="about__left-detail">
                            <p class="about__point">POINT 1</p>
                            <h3 class="about__title">オフィシャルサイト、<br>FCをアプリで一括管理</h3>
                            <p class="about__desc">ひとつの管理画面でオフィシャルサイト、FCをアプリで一括管理。<br class="d-md-block d-none">オフィシャルサイトでも有料コンテンツは一部のみ視聴可能です。アプリへの誘導、告知につなげます。</p>
                        </div>
                    </div>
                    <div class="about__right">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/about-img1.jpg" alt="オフィシャルサイト、FCをアプリで一括管理" width="486" height="486" class="img-fluid" loading="lazy">
                    </div>
                </div>

                <div class="about__column -reverse">
                    <div class="about__left">
                        <div class="about__left-detail">
                            <p class="about__point">POINT 2</p>
                            <h3 class="about__title">投稿ひとつで<br>アプリ/HP/SNSをまとめて更新！</h3>
                            <p class="about__desc">
                                SNSへの投稿も同時更新が可能。今まで大変だった<br class="d-md-block d-none">SNS管理も一括で。<br class="d-md-block d-none">NEWSに投稿した内容をSNS（X、Facebook、<br class="d-md-block d-none">LINE）へ同時投稿することで、更新の手間を省き、かなりの時間短縮になります。
                            </p>
                        </div>
                    </div>
                    <div class="about__right">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/about-img2.jpg" alt="投稿ひとつでアプリ/HP/SNSをまとめて更新！" width="486" height="486" class="img-fluid" loading="lazy">
                    </div>
                </div>

                <div class="about__column">
                    <div class="about__left">
                        <div class="about__left-detail">
                            <p class="about__point">POINT 3</p>
                            <h3 class="about__title">ライブ配信機能に投げ銭機能も搭載。<br>動画配信もアプリで簡単。</h3>
                            <p class="about__desc">
                                ライブ配信機能もアプリ内に実装されており、無料／有料と選択することができます。<br class="d-md-block d-none">コメント機能や投げ銭機能も選択出来るため、幅広いファンとのコミュニケーションを容易にする事ができます。<br class="d-md-block d-none">（撮影済の動画も無料／有料を選び公開可能）
                            </p>
                        </div>
                    </div>
                    <div class="about__right">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/about-img3.jpg" alt="ライブ配信機能に投げ銭機能も搭載。動画配信もアプリで簡単。" width="486" height="486" class="img-fluid" loading="lazy">
                    </div>
                </div>

                <div class="about__column -reverse">
                    <div class="about__left">
                        <div class="about__left-detail">
                            <p class="about__point">POINT 4</p>
                            <h3 class="about__title">アーティストにあわせた <br>デザインカスタム</h3>
                            <p class="about__desc">
                                デザインは各アーティストにあわせたものに変更できます。ご本人の画像、オリジナルキャラクターを使用したものなどはもちろん、背景やメニューアイコンを本人の手書き文字やイラストにするなど幅広く対応できます。
                            </p>
                        </div>
                    </div>
                    <div class="about__right">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/about-img4.jpg" alt="アーティストにあわせたデザインカスタム" width="486" height="486" class="img-fluid" loading="lazy">
                    </div>
                </div>

                <div class="about__column">
                    <div class="about__left">
                        <div class="about__left-detail">
                            <p class="about__point">POINT 5</p>
                            <h3 class="about__title">進化していくDUNX</h3>
                            <p class="about__desc">
                                DUNX今後もオリジナル機能をリリースしていきます。<br>ECサイト、ライブのチケッティング機能もリリース予定。ECサイトは会員向けグッズ販売も可能になります。<br class="d-md-block d-none">ライブ配信の際使用するアーティストのオリジナルギフト機能など、その他アプリに特化した機能を今後もリリース予定です。
                            </p>
                        </div>
                    </div>
                    <div class="about__right">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/about-img5.jpg" alt="進化していくDUNX" width="486" height="486" class="img-fluid" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- news -->
    <?php get_template_part('template-parts/home/part', 'news'); ?>

    <!-- feature -->
    <section class="section section-feature bg-gradient--right" id="feature">
        <div class="container">
            <div class="section-feature__wrapper">
                <h2 class="heading-primary">FEATURE</h2>

                <div class="section-feature-swiper feature-swiper swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="section-feature-swiper__card">
                                <div class="section-feature-swiper__left">
                                    <div class="section-feature-swiper__heading">
                                        <span class="section-feature-swiper__number">1</span>
                                        <h3 class="section-feature-swiper__title">オフィシャルサイト／FCを<br>オールインワン管理</h3>
                                    </div>

                                    <p class="section-feature-swiper__desc">DUNX
                                        は管理機能だけでなく充実の FC
                                        機能も持たせることでファンの方とのコミュニケーションをより深められるアプリを実現しました。<br>オフィシャルサイトとＦＣをアプリで一括管理出来る事により、他社とのやりとりで時間を取られる部分が削減、結果的にコスト削減にも繋がります。</p>
                                </div>

                                <div class="section-feature-swiper__right">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/feature/feature-swiper-img01.png" alt="オフィシャルサイト／FCをオールインワン管理" class="img-fluid" width="486" height="486" loading="lazy">
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="section-feature-swiper__card">
                                <div class="section-feature-swiper__left">
                                    <div class="section-feature-swiper__heading">
                                        <span class="section-feature-swiper__number">2</span>
                                        <h3 class="section-feature-swiper__title">無料／有料が選べる<br>動画配信／ライブ動画配信</h3>
                                    </div>

                                    <p class="section-feature-swiper__desc">ライブ配信、動画配信、そしてBLOG機能はすべてコンテンツごとに有料/無料が選ぶことができます。無料コンテンツを充実させることによって、新規やライトユーザーへの訴求効果もあり、ＦＣ会員への誘導もしやすくなります。</p>
                                </div>

                                <div class="section-feature-swiper__right">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/feature/feature-swiper-img02.png" alt="無料／有料が選べる動画配信／ライブ動画配信" class="img-fluid" width="486" height="486" loading="lazy">
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="section-feature-swiper__card">
                                <div class="section-feature-swiper__left">
                                    <div class="section-feature-swiper__heading">
                                        <span class="section-feature-swiper__number">3</span>
                                        <h3 class="section-feature-swiper__title">ECやチケッティングなどを<br>今後もリリ3ス</h2>
                                    </div>

                                    <p class="section-feature-swiper__desc">ECサイト、ライブのチケッティング機能も今後リリース予定です。ECサイトはＦＣ会員向けグッズ販売も可能になります。<br>その他アプリに特化した機能を今後もリリース予定です。</p>
                                </div>

                                <div class="section-feature-swiper__right">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/feature/feature-swiper-img03.png" alt="ECやチケッティングなどを今後もリリ3ス" class="img-fluid" width="486" height="486" loading="lazy">
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="section-feature-swiper__card">
                                <div class="section-feature-swiper__left">
                                    <div class="section-feature-swiper__heading">
                                        <span class="section-feature-swiper__number">4</span>
                                        <h3 class="section-feature-swiper__title">オリジナル投げ銭機能も<br>追加予定</h3>
                                    </div>

                                    <p class="section-feature-swiper__desc">ライブ配信に使用する投げ銭機能にアーティストオリジナルデザインのギフトを制作する機能も追加予定です。カスタムデザインされたアーティストのオリジナルギフトはアーティスト本人の目にも止まりやすく、ファンの方にも喜んで利用いただけます。</p>
                                </div>

                                <div class="section-feature-swiper__right">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/feature/feature-swiper-img04.png" alt="オリジナル投げ銭機能も追加予定" class="img-fluid" width="486" height="486" loading="lazy">
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="section-feature-swiper__card">
                                <div class="section-feature-swiper__left">
                                    <div class="section-feature-swiper__heading">
                                        <span class="section-feature-swiper__number">5</span>
                                        <h3 class="section-feature-swiper__title">FC手続きが簡単</h3>
                                    </div>

                                    <p class="section-feature-swiper__desc">サブスクリプションでのＦＣ会員手続きによりデジタル会員証を発行。会員証の配番はランダムです。これによりFCへの入会手続きが簡単に行えます。<br>※ＦＣ制作作業についても別途ご相談を承ります。</p>
                                </div>

                                <div class="section-feature-swiper__right">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/feature/feature-swiper-img05.png" alt="FC手続きが簡単" class="img-fluid" width="486" height="486" loading="lazy">
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="section-feature-swiper__card">
                                <div class="section-feature-swiper__left">
                                    <div class="section-feature-swiper__heading">
                                        <span class="section-feature-swiper__number">6</span>
                                        <h3 class="section-feature-swiper__title">ユーザーのアナリティスクも<br>一目で</h3>
                                    </div>

                                    <p class="section-feature-swiper__desc">ユーザーのアナリティスクは管理画面でいつでも見る事ができます。<br>無料会員、ＦＣ会員の会員数はもちろん、有料コンテンツの売り上げレポートや各コンテンツの稼働レポートがわかりやすく表示されるので、すぐに今後の活動に繋げる事ができます。</p>
                                </div>

                                <div class="section-feature-swiper__right">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/feature/feature-swiper-img06.png" alt="ユーザーのアナリティスクも一目で" class="img-fluid" width="486" height="486" loading="lazy">
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="section-feature-swiper__card">
                                <div class="section-feature-swiper__left">
                                    <div class="section-feature-swiper__heading">
                                        <span class="section-feature-swiper__number">7</span>
                                        <h3 class="section-feature-swiper__title">コンテンツ企画</h3>
                                    </div>

                                    <p class="section-feature-swiper__desc">ＦＣ内の制作コンテンツ企画や編集、制作業務なども別途承っております。アーティストにあわせた企画やコンテンツの制作進行などお気軽にご相談ください。</p>
                                </div>

                                <div class="section-feature-swiper__right">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/feature/feature-swiper-img07.png" alt="コンテンツ企画" class="img-fluid" width="486" height="486" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-dots"></div>
                </div>

                <div class="section-feature-content">
                    <div class="section-feature-content__block">
                        <h3 class="section-feature-content__title">管理機能</h3>

                        <div class="section-feature-content__list-wrapper">
                            <ul class="section-feature-content__list">
                                <li class="section-feature-content__point">管理ツール提供</li>
                                <li class="section-feature-content__point">アカウント管理</li>
                                <li class="section-feature-content__point">会員の基本データ取得</li>
                                <li class="section-feature-content__point">会員数レポート</li>
                            </ul>

                            <ul class="section-feature-content__list">
                                <li class="section-feature-content__point">コンテンツ稼働レポート</li>
                                <li class="section-feature-content__point">購入履歴</li>
                                <li class="section-feature-content__point">流入コード</li>
                                <li class="section-feature-content__point">通知設定</li>
                            </ul>

                            <ul class="section-feature-content__list">
                                <li class="section-feature-content__point">GA4計測</li>
                                <li class="section-feature-content__point">お問合せ</li>
                                <li class="section-feature-content__point">売上管理</li>
                            </ul>
                        </div>
                    </div>

                    <div class="section-feature-content__block">
                        <h3 class="section-feature-content__title">ファンクラブ機能</h3>

                        <div class="section-feature-content__list-wrapper">
                            <ul class="section-feature-content__list">
                                <li class="section-feature-content__point">会費設定(月額)</li>
                                <li class="section-feature-content__point">会員番号ランダム発番</li>
                                <li class="section-feature-content__point">デジタル会員証</li>
                            </ul>

                            <ul class="section-feature-content__list">
                                <li class="section-feature-content__point">ページ作成</li>
                                <li class="section-feature-content__point">BLOG</li>
                                <li class="section-feature-content__point">MOVIE</li>
                            </ul>

                            <ul class="section-feature-content__list">
                                <li class="section-feature-content__point">会員限定生配信</li>
                            </ul>
                        </div>
                    </div>

                    <div class="section-feature-content__block">
                        <h3 class="section-feature-content__title">オフィシャルサイト機能</h3>

                        <div class="section-feature-content__list-wrapper">
                            <ul class="section-feature-content__list">
                                <li class="section-feature-content__point">サイト設定
                                    (CSS/フォント)</li>
                                <li class="section-feature-content__point">NEWS</li>
                                <li class="section-feature-content__point">PROFILE</li>
                            </ul>

                            <ul class="section-feature-content__list">
                                <li class="section-feature-content__point">DISCOGRAPHY</li>
                                <li class="section-feature-content__point">SCHEDULE</li>
                                <li class="section-feature-content__point">BLOG</li>
                            </ul>

                            <ul class="section-feature-content__list">
                                <li class="section-feature-content__point">MOVIE</li>
                                <li class="section-feature-content__point">FAQ</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- case study -->
    <?php get_template_part('template-parts/home/part', 'case_study'); ?>

    <!-- faq -->
    <?php get_template_part('template-parts/home/part', 'faq'); ?>

    <!-- price -->
    <section class="section section-price bg-gradient--left" id="price">
        <div class="container">
            <div class="section-price__wrapper">
                <h2 class="heading-primary">PRICE</h2>

                <div class="section-price-content">
                    <div class="section-price-content__block">
                        <h3 class="section-price-content__title">Dunx App</h3>

                        <div class="section-price-content__inner-wrapper">
                            <div class="section-price-content__inner">
                                <h4 class="section-price-content__subtitle">初期費用</h4>

                                <div class="section-price-content__body">
                                    <div class="section-price-content__row">
                                        <p class="section-price-content__text">導入費用</p>
                                        <p class="section-price-content__text">20万円〜</p>
                                        <p class="section-price-content__text"><span>基本デザイン利用。</span><span>※デザイン変更の場合はデザイン費別。</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="section-price-content__inner">
                                <h4 class="section-price-content__subtitle">月額費用</h4>

                                <div class="section-price-content__body">
                                    <div class="section-price-content__row -br-left">
                                        <p class="section-price-content__text">固定費用</p>
                                        <p class="section-price-content__text">10万円</p>
                                    </div>
                                    <div class="section-price-content__row -br-left">
                                        <p class="section-price-content__text">売上ロイヤリティ</p>
                                        <p class="section-price-content__text">10%</p>
                                        <p class="section-price-content__text">アプリ決済の総売上に対して</p>
                                    </div>
                                    <div class="section-price-content__row -br-left">
                                        <p class="section-price-content__text">回線使用料</p>
                                        <p class="section-price-content__text">無料</p>
                                        <p class="section-price-content__text">無料動画配信:再生時間の合計が3時間までのファイルを公開可能</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-price-content__block">
                        <h3 class="section-price-content__title">Dunx HP (PC / SP)</h3>

                        <div class="section-price-content__inner-wrapper">
                            <div class="section-price-content__inner">
                                <h4 class="section-price-content__subtitle">初期費用</h4>

                                <div class="section-price-content__body">
                                    <div class="section-price-content__row">
                                        <p class="section-price-content__text">新規構築（デザイン費込）</p>
                                        <p class="section-price-content__text">25万円〜</p>
                                        <p class="section-price-content__text">デザイン及び表示コンテンツにより異なる(予算に応じて提案)</p>
                                    </div>
                                    <div class="section-price-content__row">
                                        <p class="section-price-content__text">既存HPにシステム組込み</p>
                                        <p class="section-price-content__text">10万円〜20万円</p>
                                        <p class="section-price-content__text">デザイン及び表示コンテンツにより異なる(予算に応じて提案)</p>
                                    </div>
                                </div>
                            </div>

                            <div class="section-price-content__inner">
                                <h4 class="section-price-content__subtitle">月額費用</h4>

                                <div class="section-price-content__body">
                                    <div class="section-price-content__row -br-left">
                                        <p class="section-price-content__text">固定費用</p>
                                        <p class="section-price-content__text">2万円</p>
                                        <p class="section-price-content__text">HP連動システム・サーバー保守管理費用含む</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact -->
    <section class="section contact bg-gradient--right" id="contact">
        <div class="container">
            <?php echo do_shortcode('[mwform_formkey key="116"]'); ?>
        </div>
    </section>

</main>
<?php get_footer(); ?>