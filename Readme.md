# Thread Center
## 概要
Laravelを用いて開発した、アカウント制の掲示板アプリ。スレッドやコメントを作成・閲覧できる。

## 使用技術
- PHP 8.1.8
- Laravel 9.22.1
- MySQL 8.0.30

## 環境構築
1. PHP・Laravel・MySQLがインストールされていることを確認
```
$ php -v
PHP 8.1.8 (cli) (built: Jul  8 2022 10:46:35) (NTS)
Copyright (c) The PHP Group
Zend Engine v4.1.8, Copyright (c) Zend Technologies
with Zend OPcache v8.1.8, Copyright (c), by Zend Technologies
```

```
$ php artisan -v
Laravel Framework 9.22.1
```

```
$ mysql --version
mysql  Ver 8.0.30 for macos12.4 on arm64 (Homebrew)
```

2. MySQLにデータベースを作成
```
$ mysql -u root -p
Enter password:
mysql> create database thread_center;
```

3. `.env`ファイルを編集
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=thread_center # 作成したデータベース名
DB_USERNAME=root
DB_PASSWORD=secret # MySQLのパスワード
```

```
$ php artisan cache:clear
```

4. Migrationを実行し、必要なテーブルを作成
```
$ php artisan migrate
```

5. テストデータを入れたいならSeedingを実行(任意)
```
$ php artisan db:seed
```

6. 開発サーバーを起動して動作確認
```
$ php artisan serve
```
