from flask import request, jsonify
import mysql.connector
from datetime import datetime

# 顧客情報取得ルートを Flask アプリに登録する関数
def customer_route(app, db_config):
    
    # '/flask/search_customer' に対する GET リクエストを処理
    @app.route('/search_customer', methods=['GET'])
    def get_customer_search():
        # URL のクエリパラメータから name を取得
        customer_name = request.args.get('name')

        try:
            # データベースに接続（設定は db_config から取得）
            conn = mysql.connector.connect(**db_config)
            # 結果を辞書型（カラム名でアクセス可能）で取得するよう設定
            cursor = conn.cursor(dictionary=True)

            # 検索条件から部分一致で検索結果を取得
            sql = """SELECT 
                        C.FIRST_NAME,
                        C.LAST_NAME,
                        C.FIRST_NAME_FURI,
                        C.LAST_NAME_FURI,
                        C.TEL,
                        C.ADDRESS,
                        CAT.CATEGORY_NAME AS CATEGORY_NAME
                    FROM CUSTOMER_TABLE C
                    LEFT JOIN ORDER_TABLE O 
                        ON C.CUSTOMER_ID = O.CUSTOMER_ID
                    LEFT JOIN CATEGORY_TABLE CAT 
                        ON O.CATEGORY_ID = CAT.CATEGORY_ID
                    WHERE 
                        CONCAT(IFNULL(C.FIRST_NAME, ''), IFNULL(C.LAST_NAME, '')) LIKE %s
                        OR CONCAT(IFNULL(C.FIRST_NAME_FURI, ''), IFNULL(C.LAST_NAME_FURI, '')) LIKE %s
                 """

            cursor.execute(sql, ('%' + customer_name + '%', '%' + customer_name + '%'))
            
            # 複数値が返却される場合はfetchall()　※１つの場合はfetchone()
            result = cursor.fetchall()

            # カーソルと DB 接続を閉じる（リソース解放）
            cursor.close()
            conn.close()

            # 結果が存在する場合は JSON 形式で返す
            if result:
                return jsonify(result)
            else:
                # 顧客が見つからなかった場合は 404 を返す
                return jsonify({'status': 'not found'}), 404

        except mysql.connector.Error as err:
            # DB 接続やクエリでエラーが発生した場合は 500 を返す
            return jsonify({'status': 'error', 'message': str(err)}), 500
