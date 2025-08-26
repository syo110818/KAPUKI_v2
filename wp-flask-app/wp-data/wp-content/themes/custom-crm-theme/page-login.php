<?php
/**
 * Template Name: ログインページ
 */
session_start();

// -------------------------------------
// PHP側でログインPOST処理
// Flask認証成功後、セッションにユーザー情報を保存
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['set_user'])) {
    $_SESSION['user'] = ['username' => $_POST['username']];
    header("Location: /customer-list"); // ログイン後に遷移
    exit;
}
?>

<main id="primary" class="site-main">
    <div class="login-container">
        <h2 class="login-title">ログイン</h2>
        <p class="login-subtitle">ユーザー名とパスワードを入力してください</p>

        <div class="login-form">
            <input type="text" id="username" placeholder="ユーザー名" class="login-input" />
            <input type="password" id="password" placeholder="パスワード" class="login-input" />
            <button onclick="login()" class="login-button">ログイン</button>
        </div>

        <div id="login-response" class="login-response"></div>
    </div>
</main>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/login.css">

<script>
async function login() {
    const username = document.getElementById("username").value.trim();
    const password = document.getElementById("password").value.trim();

    if (!username || !password) {
        document.getElementById("login-response").innerText =
            "ユーザー名とパスワードを入力してください";
        return;
    }

    try {
        const response = await fetch("/flask/login", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ username, password })
        });

        const result = await response.json();

        if (result.success) {
            // PHP セッションにユーザー情報を保存
            const formData = new FormData();
            formData.append("set_user", "1");
            formData.append("username", result.username);

            await fetch("/page-login.php", { method: "POST", body: formData , credentials: "same-origin"});

            // ログイン後にトップページへ
            window.location.href = "/index.php";
        } else {
            document.getElementById("login-response").innerText =
                "ログイン失敗: " + (result.message || "ユーザー名またはパスワードが違います");
        }
    } catch (error) {
        console.error("通信エラー:", error);
        document.getElementById("login-response").innerText = "サーバー通信エラー";
    }
}
</script>
