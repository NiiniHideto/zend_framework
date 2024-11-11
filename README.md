# zend_framework

環境の参考

https://ryamate.hatenablog.com/archive/category/Zend%20Framework

ビルド・起動

docker-compose up -d --build

Composer での Zend Framework のインストール

docker-compose exec app composer create-project zendframework/skeleton-application .

エラーが出たら、doc_root/public のディレクトリを削除して、もう一度実行

Do you want a minimal install (no optional packages)? Y/n

最小で y

doc_root/ にファイルが生成される。

コンテナを再起動して、 http://localhost/ へアクセス。

Zend Framework の Welcome 画面が表示されれば成功。

パーミッションの変更が必要

chmod 777 doc_root/data/cache


