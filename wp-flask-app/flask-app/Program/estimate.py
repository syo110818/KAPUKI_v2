from flask import request, jsonify
import mysql.connector
from datetime import datetime

# 外部から app を渡してルートを登録する関数
def estimate_route(app, db_config):

    # ルート '/customer_register' を POST メソッドで登録
    @app.route('/customer_register', methods=['POST'])
    def customer_register():

        # リクエストから JSON データを取得
        data = request.get_json()

        try:
            # データベース接続
            conn = mysql.connector.connect(**db_config)
            cursor = conn.cursor()

            # SQLを作成
            sql = """
                INSERT INTO CUSTOMER_TABLE (
                    CUSTOMER_ID, FIRST_NAME, LAST_NAME,
                    FIRST_NAME_FURI, LAST_NAME_FURI,
                    BIRTHDAY, ADDRESS, POST_NUMBER,
                    TEL, MAIL, CREATED_AT, UPDATE_AT, HAS_DELETED_FLAG
                ) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)
            """

            # 現在の日時を取得
            now = datetime.now()

            # データをタプルに変換
            values = (
                data['customer_id'],
                data['first_name'],
                data['last_name'],
                data['first_name_furi'],
                data['last_name_furi'],
                data['birthday'],
                data['address'],
                data['post_number'],
                data['tel'],
                data['mail'],
                now,
                now,
                False
            )

            # SQL クエリを実行
            cursor.execute(sql, values)
            conn.commit()

            # カーソルと接続を閉じる
            cursor.close()
            conn.close()

            # 成功レスポンスを返す
            return jsonify({'status': 'success'})

        # エラー処理
        except mysql.connector.Error as err:
            return jsonify({'status': 'error', 'message': str(err)}), 500
