<?php
/**
 * Template Name: ログインページ
 */
?>

<main id="primary" class="site-main">
    <div class="login-container">
        <!-- ページタイトル -->
        <h2 class="login-title">ログイン</h2>
        <p class="login-subtitle">ユーザー名とパスワードを入力してください</p>

        <!-- ログインフォーム -->
        <div class="login-form">
            <!-- ユーザー名入力 -->
            <input type="text" id="username" placeholder="ユーザー名" class="login-input" />

            <!-- パスワード入力欄 -->
            <input type="password" id="password" placeholder="パスワード" class="login-input" autocomplete="current-password" />

            <!-- ログインボタン -->
            <button onclick="login()" class="login-button">ログイン</button>
        </div>

        <!-- ログイン結果表示用 -->
        <div id="login-response" class="login-response"></div>
    </div>
</main>

<!-- CSS読込 -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/login.css">
<!-- 共通JSを読み込む -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/common-check.js"></script>

<script>

    // パスワードの入力制限（英数字のみ）
    document.addEventListener("DOMContentLoaded", function() {
        // パスワードに半角制御を適用
        enforceHalfwidth(document.getElementById("password"));
    });

    // ログイン処理
    async function login() {
        const username = document.getElementById("username").value.trim();
        const password = document.getElementById("password").value.trim();

        // 入力チェック
        if (!username || !password) {
            document.getElementById("login-response").innerText = ERROR_MESSAGES.LOGIN_NULL;
            return;
        }

        try {
            // Flask API に認証リクエスト
            const response = await fetch("http://localhost/flask/login", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ username, password })
            });

            // レスポンスをJSONで取得
            const result = await response.json();

            if (result.success) {
                // 認証成功した場合にトップページ（顧客一覧）へ遷移
                window.location.href = "/index.php";
            } else {
                // 認証失敗時のメッセージ表示
                document.getElementById("login-response").innerText = '';
                document.getElementById("login-response").innerText = ERROR_MESSAGES.LOGIN_FAILED;
            }
        } catch (error) {
            // サーバー通信エラー(デバッグ用)
            console.error("通信エラー:", error);

            // サーバー通信エラーのメッセージ表示
            document.getElementById("login-response").innerText = ERROR_MESSAGES.SERVER_ERROR;
        }
    }
</script>
