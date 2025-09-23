from flask import request, jsonify
import mysql.connector
from datetime import datetime
import bcrypt

# ログインルートを Flask アプリに登録する関数
def login_route(app, db_config):
    
    @app.route("/login", methods=["POST"])
    def login():
        data = request.get_json()
        username = data.get("username")
        password = data.get("password")

        try:
            conn = mysql.connector.connect(**db_config)
            cursor = conn.cursor(dictionary=True)

            # ユーザー名でユーザー情報を取得
            cursor.execute("SELECT USER_NAME, USER_PASS FROM USER_TABLE WHERE USER_NAME=%s", (username,))

            user = cursor.fetchone()
            cursor.close()
            conn.close()

            if user:
                # DBに保存されているハッシュ済みパスワード
                stored_hash = user["USER_PASS"].encode("utf-8")
                if bcrypt.checkpw(password.encode("utf-8"), stored_hash):
                    return jsonify({"success": True, "username": user["USER_NAME"]})
                else:
                    return jsonify({"success": False})
            else:
                return jsonify({"success": False})
        except Exception as e:
            return jsonify({"success": False, "message": str(e)})