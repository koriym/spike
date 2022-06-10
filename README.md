
# DoubleDispatch.php

## 	Visitorパターンとダブルディスパッチ

* PrinterがVistor（訪れるもの）でUserがVisitee（訪れられるもの）
* Userに何のプロパティがあるかがUserの外に露出していません（カプセル化）
* どのようにVisitorを利用するかをVisiteeのUserが決定することができます。
* Visitorパターンを強調するためにPrinter のprint()メソッドをvisit()に変えてもOK
