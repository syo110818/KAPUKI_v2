<?php
// ヘッダーを読み込む
get_header();
?>
<?php
/**
 * Template Name: 顧客一覧テンプレート
 */
?>
<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Serif%3Awght%40400%3B500%3B700%3B900&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900"
    />

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/customer-list.css" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body>
      <!-- メインレイアウト（サイドバー＋コンテンツ） -->
      <div class="flex flex-row flex-1 min-h-0">
        <!-- サイドバーは sidebar.php で表示されます -->
        <div class="flex flex-col flex-1 min-h-0">
          <!-- 顧客一覧ページのメインコンテンツ -->
          <div class="gap-1 px-6 flex flex-1 justify-center py-0">
            <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
              <!-- 顧客一覧ヘッダーと検索フォーム -->
              <div class="flex flex-col gap-1 px-4 pb-0 pt-0">
                <div class="flex items-center justify-between">
                  <h2 class="header-title">顧客一覧</h2>
                  <form class="search-form" action="#" method="get">
                    <input
                      type="text"
                      name="customer_search"
                      placeholder="顧客を検索"
                      class="search-input"
                      autocomplete="off"
                    />
                    <button type="submit" class="search-button">検索</button>
                  </form>
                </div>
                <div class="count-text">登録件数：6件</div>
              </div>
              <!-- 顧客一覧テーブル -->
              <div class="table-container @container">
                <div class="customer-table">
                  <table class="customer-table customer-list-table">
                    <thead>
                      <tr>
                        <th class="customer-list-col-name">氏名</th>
                        <th class="customer-list-col-tel">電話番号</th>
                        <th class="customer-list-col-address">住所</th>
                        <th class="customer-list-col-plan">プラン</th>
                        <th class="customer-list-col-action"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="customer-list-col-name">山田 太郎</td>
                        <td class="customer-list-col-tel">090-1234-5678</td>
                        <td class="customer-list-col-address">東京都渋谷区</td>
                        <td class="customer-list-col-plan">フォトプラン</td>
                        <td class="customer-list-col-action"><button type="button" class="detail-button">詳細</button></td>
                      </tr>
                      <tr>
                        <td class="customer-list-col-name">佐藤 花子</td>
                        <td class="customer-list-col-tel">080-9876-5432</td>
                        <td class="customer-list-col-address">大阪府大阪市</td>
                        <td class="customer-list-col-plan">成人式</td>
                        <td class="customer-list-col-action"><button type="button" class="detail-button">詳細</button></td>
                      </tr>
                      <tr>
                        <td class="customer-list-col-name">鈴木 一郎</td>
                        <td class="customer-list-col-tel">070-1122-3344</td>
                        <td class="customer-list-col-address">愛知県名古屋市</td>
                        <td class="customer-list-col-plan">成人式</td>
                        <td class="customer-list-col-action"><button type="button" class="detail-button">詳細</button></td>
                      </tr>
                      <tr>
                        <td class="customer-list-col-name">田中 次郎</td>
                        <td class="customer-list-col-tel">090-5555-6666</td>
                        <td class="customer-list-col-address">福岡県福岡市</td>
                        <td class="customer-list-col-plan">成人式</td>
                        <td class="customer-list-col-action"><button type="button" class="detail-button">詳細</button></td>
                      </tr>
                      <tr>
                        <td class="customer-list-col-name">高橋 三郎</td>
                        <td class="customer-list-col-tel">080-7777-8888</td>
                        <td class="customer-list-col-address">北海道札幌市</td>
                        <td class="customer-list-col-plan">卒業式</td>
                        <td class="customer-list-col-action"><button type="button" class="detail-button">詳細</button></td>
                      </tr>
                      <tr>
                        <td class="customer-list-col-name">高橋 三郎</td>
                        <td class="customer-list-col-tel">080-7777-8888</td>
                        <td class="customer-list-col-address">北海道札幌市</td>
                        <td class="customer-list-col-plan">卒業式</td>
                        <td class="customer-list-col-action"><button type="button" class="detail-button">詳細</button></td>
                      </tr>
                      <tr>
                        <td class="customer-list-col-name">高橋 三郎</td>
                        <td class="customer-list-col-tel">080-7777-8888</td>
                        <td class="customer-list-col-address">北海道札幌市</td>
                        <td class="customer-list-col-plan">卒業式</td>
                        <td class="customer-list-col-action"><button type="button" class="detail-button">詳細</button></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- スタイルは customer-list.css に移動 -->
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>
