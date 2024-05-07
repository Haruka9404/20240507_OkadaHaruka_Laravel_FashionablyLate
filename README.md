# 20240507_OkadaHaruka_Laravel_FashionablyLate
# アプリケーション名
FashionablyLate

## 環境構築
- Dockerのビルドからマイグレーション、シーディングまでを記述する
docker-compose up -d --build
docker-compose exec php bash
composer -v
composer create-project "laravel/laravel=8.*" . --prefer-dist
時間設定の編集 ('timezone' => 'Asia/Tokyo)

php artisan migrate

public function run()
        {
                $param = [
                        'content' => '商品のお届けについて',
                ];
                DB::table('categories')->insert($param);
                $param = [
                        'content' => '商品の交換について',
                ];
                DB::table('categories')->insert($param);
                $param = [
                        'content' => '商品トラブル',
                ];
                DB::table('categories')->insert($param);
                $param = [
                        'content' => 'ショップへのお問い合わせ',
                ];
                DB::table('categories')->insert($param);
                $param = [
                        'content' => 'その他',
                ];
                DB::table('categories')->insert($param);
        }

php artisan db:seed

## 使用技術(実行環境)
- 例) Laravel 8.x(言語やフレームワーク、バージョンなどが記載されていると良い)
version: '3.8'

services:
    nginx:
        image: nginx:1.21.1
        ports:
            - "80:80"
        volumes:
            - ./docker/nginx/default.conf:/etc/nginx/conf.d/default.conf
            - ./src:/var/www/
        depends_on:
            - php

    php:
        build: ./docker/php
        volumes:
            - ./src:/var/www/

    mysql:
        image: mysql:8.0.26
        command:
            mysqld --default-authentication-plugin=mysql_native_password
        volumes:
            - ./docker/mysql/data:/var/lib/mysql
            - ./docker/mysql/my.cnf:/etc/mysql/conf.d/my.cnf
    phpmyadmin:
        image: phpmyadmin/phpmyadmin
        depends_on:
            - mysql
        ports:
            - 8080:80

## ER図
< - - - 作成したER図の画像 - - - >
![alt text](<../スクリーンショット 2024-04-28 18.08.13.png>)

## URL
開発環境：http://localhost/
