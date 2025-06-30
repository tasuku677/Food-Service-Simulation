# Food-Service-Simulation

## 概要

サーバーサイド言語である PHP を使った、フードサービスシミュレーションです。PHP でのクラスの作成、OOP に基づいた継承やインターフェースについて、練習するために作成しました。

## 機能

- 複数の食品アイテム（チーズバーガー、フェットチーネ、ハワイアンピザ、スパゲッティ）の管理
- レストランの従業員（シェフ、キャッシャー）の管理
- 顧客の注文処理と請求書生成
- 自動クラスローディング機能

## プロジェクト構造

```
src/
├── main.php                    # メインエントリーポイント
├── FoodItems/                  # 食品アイテム関連
│   ├── FoodItem.php           # 食品アイテム抽象クラス
│   ├── CheeseBurger.php       # チーズバーガークラス
│   ├── Fettuccine.php         # フェットチーネクラス
│   ├── HawaianPizza.php       # ハワイアンピザクラス
│   └── Spaghetti.php          # スパゲッティクラス
├── People/                     # 人物関連
│   ├── Person.php             # 人物抽象クラス
│   ├── Customers/
│   │   └── Customer.php       # 顧客クラス
│   └── Employees/
│       ├── Employee.php       # 従業員クラス
│       ├── Chef.php           # シェフクラス
│       └── Cashier.php        # キャッシャークラス
├── Restaurants/
│   └── Restaurant.php         # レストランクラス
├── FoodOrders/
│   └── FoodOrder.php          # 食品注文クラス
└── Invoices/
    └── Invoice.php            # 請求書クラス
```

## クラス設計

### 継承関係

- `Person` (抽象クラス)

  - `Customer` - 顧客の注文処理
  - `Employee` - 従業員の基底クラス
    - `Chef` - 料理の準備
    - `Cashier` - 注文と請求書の生成

- `FoodItem` (抽象クラス)
  - `CheeseBurger` - カテゴリ: "CheeseBurger"
  - `Fettuccine` - カテゴリ: "Fettuccine"
  - `HawaianPizza` - カテゴリ: "Pizza"
  - `Spaghetti` - カテゴリ: "Spaghetti"

### 主要機能

- **Restaurant**: メニューと従業員を管理し、注文を処理
- **Customer**: 興味のある食品カテゴリに基づいて注文
- **Invoice**: 最終価格、注文時間、推定調理時間を含む請求書

## 実行方法

```bash
cd src
php main.php
```

## 使用例

メインファイルでは以下の処理が行われます：

1. 食品アイテムの作成（チーズバーガー、フェットチーネ、ハワイアンピザ、スパゲッティ）
2. 従業員の作成（シェフの Inavash、キャッシャーの Nadia）
3. レストラン「サイゼリヤ」の作成
4. 顧客 Tom の作成と注文処理
5. 請求書の表示

## 出力例

```
finalPrice 120, orderTime is Mon Jan 15, 2024 14:30, will be made in 45
```

## 学習ポイント

- **継承**: Person クラスから Customer、Employee クラスを継承
- **抽象クラス**: FoodItem と Person の抽象クラス実装
- **名前空間**: 各クラスが適切な名前空間で管理
- **オートローディング**: `spl_autoload_register`を使用した自動クラス読み込み
- **多態性**: 異なる食品アイテムクラスの統一的な扱い
