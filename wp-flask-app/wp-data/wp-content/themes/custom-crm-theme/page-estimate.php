<?php
/**
 * Template Name: 見積書作成ページ
 * Description: サイドバーからの見積書作成遷移確認用ページ
 */
get_header();
?>

<main id="primary" class="site-main" style="padding: 40px;">
    <h1>見積書作成ページ</h1>
    <p>これは「見積書作成」ページのテスト表示です。</p>
</main>


<div id="customer-form">
  <label>顧客ID: <input type="number" id="customer_id" value="9999" /></label><br />
  <label>苗字: <input type="text" id="first_name" value="安田" /></label><br />
  <label>名前: <input type="text" id="last_name" value="光" /></label><br />
  <label>苗字（ふりがな）: <input type="text" id="first_name_furi" value="やすだ" /></label><br />
  <label>名前（ふりがな）: <input type="text" id="last_name_furi" value="ひかる" /></label><br />
  <label>生年月日: <input type="datetime-local" id="birthday" value="2000-02-22T00:00" /></label><br />
  <label>住所: <input type="text" id="address" value="大阪市1-1" /></label><br />
  <label>郵便番号: <input type="text" id="post_number" value="100-0001" /></label><br />
  <label>電話番号: <input type="tel" id="tel" value="123-4567-8910" /></label><br />
  <label>メール: <input type="email" id="mail" value="test@example.com" /></label><br />
  <button onclick="submitCustomer()">登録</button>
</div>

<div id="response"></div>

<script>
  async function submitCustomer() {
    const data = {
      customer_id: document.getElementById("customer_id").value,
      first_name: document.getElementById("first_name").value,
      last_name: document.getElementById("last_name").value,
      first_name_furi: document.getElementById("first_name_furi").value,
      last_name_furi: document.getElementById("last_name_furi").value,
      birthday: document.getElementById("birthday").value.replace("T", " ") + ":00",
      address: document.getElementById("address").value,
      post_number: document.getElementById("post_number").value,
      tel: document.getElementById("tel").value,
      mail: document.getElementById("mail").value
    };

    try {
      const response = await fetch("/flask/submit", {
        method: "POST",
        headers: {
          "Content-Type": "application/json"
        },
        body: JSON.stringify(data)
      });

      const result = await response.json();
      document.getElementById("response").innerText = result.message || result.status;
    } catch (error) {
      console.error("送信エラー:", error);
      document.getElementById("response").innerText = "送信に失敗しました";
    }
  }
</script>

<?php get_footer(); ?>
