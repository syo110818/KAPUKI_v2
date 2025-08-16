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
                      id="customer_search_name"
                    />
                    <button type="button" class="search-button" onclick="searchCustomerByName()">検索</button>
                  </form>
                </div>
                <div class="count-text" id="count-text">登録件数：0件</div>
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
                    <tbody id="customer-list-body">
                      <!-- JavaScriptで挿入 -->
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

<script>
// ページロード時に全件表示（name="" を送る）
document.addEventListener("DOMContentLoaded", () => {
  // 初期表示で全件を取得
  searchCustomerByName("");
});

async function searchCustomerByName(name = null) {
  // 検索キーワードを決定。引数がある場合はそれを使用、ない場合はフォームの値を取得
  const searchName = (name !== null) ? name.trim() : document.getElementById("customer_search_name").value.trim();
  // テーブル本体と件数表示要素を取得
  const tbody = document.getElementById("customer-list-body");
  const countText = document.getElementById("count-text");

  tbody.innerHTML = ""; // 前回の結果をクリア
  countText.textContent = "検索中...";

  try {
    // FlaskにGETリクエストを送信
    const response = await fetch(`/flask/search_customer?name=${encodeURIComponent(searchName)}`);
    
    // レスポンスがOKでない場合（404 や 500 など）
    if (!response.ok) {
      countText.textContent = "登録件数：0件";
      tbody.innerHTML = `<tr><td colspan="5">顧客が見つかりません。</td></tr>`;
      return;
    }

    // JSONデータ（DBの検索結果）を取得
    const customers = await response.json();

    // 配列でない、または要素がない場合
    if (!Array.isArray(customers) || customers.length === 0) {
      countText.textContent = "登録件数：0件";
      tbody.innerHTML = `<tr><td colspan="5">顧客が見つかりません。</td></tr>`;
      return;
    }

    // 取得した顧客データをテーブルに挿入
    customers.forEach(cust => {
      const row = `
        <tr>
          <td class="customer-list-col-name">${cust.FIRST_NAME || ""} ${cust.LAST_NAME || ""}</td>
          <td class="customer-list-col-tel">${cust.TEL || ""}</td>
          <td class="customer-list-col-address">${cust.ADDRESS || ""}</td>
          <td class="customer-list-col-plan">${cust.CATEGORY_NAME || ""}</td>
          <td class="customer-list-col-action"><button type="button" class="detail-button">詳細</button></td>
        </tr>
      `;
      tbody.insertAdjacentHTML("beforeend", row);
    });

    // 件数表示を更新
    countText.textContent = `登録件数：${customers.length}件`;

  } catch (error) {
    console.error("検索エラー:", error);
    countText.textContent = "登録件数：0件";
    tbody.innerHTML = `<tr><td colspan="5">検索中にエラーが発生しました。</td></tr>`;
  }
}
</script>

<?php get_footer(); ?>