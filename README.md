# 開発背景
鈴木大志のWEBエンジニアリングの勉強のため。
4年のギャップを埋めるため、最近のスタンダードなフレームワーク、インフラでWEBアプリをつくってみる

# つくるもの
鈴木大志が作る料理をアップするサイト
日付別で朝昼夜の料理を写真とコメントで投稿

# アーキテクチャ
- Laravel7
- PHP8(詳細バージョン追記予定)
- AWS
- MySQL8(詳細バージョン追記予定)
- docker-compose(詳細バージョン追記予定)

# 画面設計
https://www.figma.com/file/xPHBhAjUiKridt3nT9bLoX/Cook?node-id=0%3A1

# ワイヤー
https://www.figma.com/file/T22tNhjdDKHqqUaMB3Fap6/Untitled?node-id=0%3A1

# DB設計
## ER図
https://cacoo.com/diagrams/ri6hajzCAzcnHqWF/D0D97

### エンティティ洗い出し（作業用）
https://docs.google.com/spreadsheets/d/1QHrBpSb--hf1Fp7bd00sciBeCoX23TVAIU7lQ1UxhQc/edit#gid=0

# インフラ構成
https://cacoo.com/diagrams/X7KAndMKpB2cZJpt/3A49C

# サイトマップ
https://docs.google.com/spreadsheets/d/1gRwImMnMCAOYCJl9_siKQshyNjXQgZNnLIalDXlg354/edit#gid=0

# 基本設計
ページに対してのコントローラーとアクション、ビューテンプレートの関係をまとめたもの。
https://gyazo.com/5730a1a1ea7bc89ef1e0e72fe7b21ea6

# Git運用
## ブランチの命名規則
|  ブランチ名  |  役割  |  派生元  |  マージ先  |
| ---- | ---- | ---- | ---- |
|  main  |  公開するものを置くブランチ  |    |    |
|  develop  |  開発中のものを置くブランチ  |  main  |  main  |
|  release  |  次にリリースするものを置くブランチ  |  develop  |  develop,main  |
|  feature-#イシュー番号*  |  新機能開発中に使うブランチ  |  develop  |  develop  |
|  hotfix-*  |  	公開中のもののバグ修正用ブランチ  |  main  |  develop,main  |

## Issueドリブン開発
Issueを立てて、ブランチを切って開発するIssueドリブン開発とする
### 例
- 1.Webサイトのメニューバーをハンバーガーメニューに変更したい
- 2. Github上で、１の旨を記載したIssueを立てる
    - マークダウンでコメントを書けるので便利
    - 画像も載せられるので、こんなメニューにしたい、というイメージ図も載せておける
- 3.feature/#12_replace_to_hamburger_menuというブランチを作成
    - Issueを立てるとそのIssueに番号、例えば#12が割り振られるので、それをブランチ名に含める
- 4.開発進める
- 5.開発完了
- 6.Issueに書いた内容のタスクが完了したので、developブランチにマージコミットする
    - この際、close #12などとコミットメッセージに記述すると、自動的にIssueが閉じられる
