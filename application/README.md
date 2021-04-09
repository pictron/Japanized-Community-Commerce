# Japanized For concrete5 Community Store
concrete5のコミュニティ開発されている通販アドオンであるCommunity Storeを日本語で使う場合の更新ファイル
application/のオーバーライトするファイルを共有します。

## Community Store
https://github.com/concrete5-community-store

### 登録画面、編集画面

表記を、国、郵便番号、都道府県、市町村、住所１、住所2の変更

/application/attributes/address/form.php

### 決済画面

姓名を逆に変更、住所の表記を、国、郵便番号、都道府県、市町村、住所１、住所2の変更

/application/single_pages/checkout.php

###新規受注確認メール（管理者）

姓名を逆に変更、様を追加、住所の表記を、国、郵便番号、都道府県、市町村、住所１、住所2の変更

/application/mail/new_order_notification.php

###注文受注確認メール（顧客）

姓名を逆に変更、様を追加、住所の表記を、国、郵便番号、都道府県、市町村、住所１、住所2の変更

/application/mail/order_receipt.php

### ダッシュボード　オーダー一覧

姓名を逆に変更

/application/single_pages/dashboard/store/orders.php