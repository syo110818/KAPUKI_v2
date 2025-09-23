// エラーメッセージ定義
const ERROR_MESSAGES = {
    LOGIN_NULL: "ユーザー名とパスワードを入力してください",
    LOGIN_FAILED: "ログイン失敗: ユーザー名またはパスワードが違います",
    SERVER_ERROR: "サーバへの通信でエラーが発生しました。",
    SEARCH_ERROR: "検索中にエラーが発生しました。",
    SEARCH_NORESULTS: "顧客が見つかりませんでした。"
};

// -----------------------------
// 半角英数字制御（リアルタイム）
// -----------------------------
function enforceHalfwidth(inputElement) {
    inputElement.addEventListener("input", function() {
        this.value = this.value.replace(/[^a-zA-Z0-9]/g, '');
    });
}

// -----------------------------
// フォーム必須チェック（例）
// -----------------------------
function validateRequired(inputElement, fieldName) {
    if (inputElement.value.trim() === "") {
        alert(fieldName + "は必須です");
        return false;
    }
    return true;
}
