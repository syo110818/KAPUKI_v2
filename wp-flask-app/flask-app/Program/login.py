from flask import request, jsonify
import mysql.connector
from datetime import datetime

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
            cursor.execute("SELECT * FROM USER_TABLE WHERE USER_NAME=%s AND USER_PASS=%s", (username, password))
            user = cursor.fetchone()
            cursor.close()
            conn.close()

            if user:
                return jsonify({"success": True, "username": user["USER_NAME"]})
            else:
                return jsonify({"success": False, "message": "ユーザー名またはパスワードが違います"})
        except Exception as e:
            return jsonify({"success": False, "message": str(e)})