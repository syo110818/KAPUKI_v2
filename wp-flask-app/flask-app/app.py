from flask import Flask
from flask_cors import CORS
from Program.estimate import estimate_route
from Program.customer import customer_route
from Program.login import login_route

# 新規でルートを追加する場合
# from Program.(ルート名) import (関数名)

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

# 新規でルートを追加する場合
# 関数名(app, db_config)

# ログイン画面のルートを登録
login_route(app, db_config)

# 見積作成画面のルートを登録
estimate_route(app, db_config)

# 顧客一覧画面のルートを登録
customer_route(app, db_config)

if __name__ == '__main__':
    # すべてのホストからアクセスを受け付け、ポート5000で実行
    app.run(host='0.0.0.0', port=5000)