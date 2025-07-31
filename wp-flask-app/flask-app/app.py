# Flask本体とリクエスト/レスポンス機能、JSONレスポンス機能
from flask import Flask, request, jsonify

# MySQLとの接続用ライブラリ
import mysql.connector

# CORS対策ライブラリ
from flask_cors import CORS

# 現在時刻を取得するためのライブラリ
from datetime import datetime

# Flaskのインスタンス作成
app = Flask(__name__)

# CORSの設定
CORS(app)

# データベース接続設定
db_config = {
    'host': 'db',
    'user': 'wp_user',
    'password': 'wp_pass',
    'database': 'wp_db'
}

# POSTリクエストを受け付けるAPIエンドポイントを定義
@app.route('/submit', methods=['POST'])
def submit():
    print("[DEBUG] /submit に POST リクエストを受信")
    # JSON形式で送られてきたデータを取得
    data = request.get_json()
    print("[DEBUG] 受信データ:", data)

    try:
        # データベースに接続
        conn = mysql.connector.connect(**db_config)
        cursor = conn.cursor()

        # 顧客情報を CUSTOMER_TABLE に登録するSQL文
        sql = """
            INSERT INTO CUSTOMER_TABLE (
                CUSTOMER_ID, FIRST_NAME, LAST_NAME,
                FIRST_NAME_FURI, LAST_NAME_FURI,
                BIRTHDAY, ADDRESS, POST_NUMBER,
                TEL, MAIL, CREATED_AT, UPDATE_AT, HAS_DELETED_FLAG
            ) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)
        """

        # 現在の日時を取得（作成日・更新日に使用）
        now = datetime.now()

        # プレースホルダに渡す値のタプル
        values = (
            data['customer_id'],
            data['first_name'],
            data['last_name'],
            data['first_name_furi'],
            data['last_name_furi'],
            data['birthday'],     # 例: "2000-01-01 00:00:00"
            data['address'],
            data['post_number'],
            data['tel'],
            data['mail'],
            now,                  # CREATED_AT
            now,                  # UPDATE_AT
            False                 # HAS_DELETED_FLAG 初期値 False
        )

        # SQL実行
        cursor.execute(sql, values)

        # 変更をデータベースに保存
        conn.commit()

        # カーソルとコネクションを閉じる
        cursor.close()
        conn.close()

        # 登録成功のレスポンスを返す
        return jsonify({'status': 'success'})

    except mysql.connector.Error as err:
        # エラーが起きた場合は、エラーメッセージ付きで返す
        return jsonify({'status': 'error', 'message': str(err)}), 500

if __name__ == '__main__':
    # すべてのホストからアクセスを受け付け、ポート5000で実行
    app.run(host='0.0.0.0', port=5000)