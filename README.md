
# DoubleDispatch.php

## 	Visitorパターンとダブルディスパッチ

* PrinterがVistor（訪れるもの）でUserがVisitee（訪れられるもの）
* Userに何のプロパティがあるかがUserの外に露出していません（カプセル化）
* どのようにVisitorを利用するかをVisiteeのUserが決定することができます。
* Visitorパターンを強調するためにPrinter のprint()メソッドをvisit()に変えてもOK
* オブジェクトは操作される対象でなく、自らのデータを操作する主体になっています。
* Userは与えられたPrinterを無視することもできます。
