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
  <label>郵便番号: <input type="text" id="post_number" value="1000001" /></label><br />
  <label>電話番号: <input type="tel" id="tel" value="123-4567-8910" /></label><br />
  <label>メール: <input type="email" id="mail" value="test@example.com" /></label><br />
  <button onclick="submitCustomer()">登録</button>
</div>

<div id="response"></div>

<script>
  // 非同期で顧客情報を送信する関数（ボタンクリックなどで呼び出される）
  async function submitCustomer() {
    // フォーム入力から値を取得し、送信データを作成
    const data = {
      customer_id: document.getElementById("customer_id").value,               // 顧客ID
      first_name: document.getElementById("first_name").value,                 // 名前（名）
      last_name: document.getElementById("last_name").value,                   // 名前（姓）
      first_name_furi: document.getElementById("first_name_furi").value,       // フリガナ（名）
      last_name_furi: document.getElementById("last_name_furi").value,         // フリガナ（姓）
      birthday: document.getElementById("birthday").value.replace("T", " ") + ":00", // 生年月日（datetime-local形式 → SQLのDATETIME形式へ変換）
      address: document.getElementById("address").value,                       // 住所
      post_number: document.getElementById("post_number").value,               // 郵便番号
      tel: document.getElementById("tel").value,                               // 電話番号
      mail: document.getElementById("mail").value                              // メールアドレス
    };

    try {
      // FlaskサーバーのエンドポイントにPOSTリクエストを送信
      const response = await fetch("/flask/customer_register", {
        method: "POST",                         // HTTPメソッド（POST）
        headers: {
          "Content-Type": "application/json"   // 送信データ形式をJSONに指定
        },
        body: JSON.stringify(data)              // フォームデータをJSON文字列に変換して送信
      });

      // サーバーからのレスポンスをJSONとしてパース
      const result = await response.json();

      // レスポンスを画面に表示（成功メッセージ or ステータス）
      document.getElementById("response").innerText = result.message || result.status;

    } catch (error) {
      // 通信エラーが発生した場合の処理
      console.error("送信エラー:", error);
      document.getElementById("response").innerText = "送信に失敗しました";
    }
  }
</script>
