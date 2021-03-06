<?php

// ----------基本設定開始---------- //

// 送信先メールアドレス
$adminMail = "job@openloop.co.jp,tsuyoshi.nakamura@openloop.co.jp";


// 送信先メールアドレスを配列化(編集しないでください)
$adminArray = array();
$adminArray = explode(',', $adminMail);


// 送信者名
$adminName = "株式会社オープンループ グループ採用窓口";


// 送信後に戻るURL
$returnUrl = "https://www.olp.co.jp/recruit/";


// 送信完了メッセージ
$completionMessage = <<<EOD
中途採用エントリーフォームを受け付けました。
後ほど、採用担当者よりご連絡をさしあげます。
EOD
;

// リターンメールのメールタイトル
$returnMailTitle = "中途採用エントリーフォームを受け付けました。";

// リターンメールのヘッダーメッセージ
$returnMailHeader = <<<EOD
お世話になっております。
オープンループ・グループ 中途採用担当でございます。

この度、弊社求人にお問合わせいただきましてありがとうございます。

早速ではございますが、是非とも書類選考を進めさせていただきたく存じます。

履歴書・職務経歴書の添付をされていない方は、【郵送】もしくは【メール添付】にてお送りください。


【送付先】

（郵送の場合）
〒160-0022
東京都新宿区新宿1-19-8 サンモール第7ビル3階
株式会社オープンループ　人事総務部　中途採用担当　宛

（メールの場合）
job@openloop.co.jp

書類が届き次第、書類選考を進めさせていただきます。

お手数おかけいたしますが、ご確認の程、何卒宜しくお願い申し上げます。

EOD
;


// リターンメールのフッターメッセージ
$returnMailFooter = <<<EOD

＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
〒160-0022
東京都新宿区新宿1-19-8 サンモール第7ビル3階
株式会社オープンループ【グループ採用窓口】

TEL：03-5368-3014
MAIL：job@openloop.co.jp
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝

EOD
;

// ----------基本設定終了---------- //


// ----------添付ファイル設定開始---------- //

// 拡張子制限（0=しない・1=する）
$ext_denied = 0;
// 許可する拡張子リスト
$ext_allow1 = "jpg";
$ext_allow2 = "jpeg";
$ext_allow3 = "gif";
$ext_allow4 = "pdf";
// 配列に格納しておく
$EXT_ALLOWS = array($ext_allow1, $ext_allow2, $ext_allow3, $ext_allow4);

// アップロード容量制限（0=しない・1=する）
$maxmemory = 1;
// 最大容量（KB）
$max = 3000;

// ----------添付ファイル設定終了---------- //


// ----------ここから下は変更不要---------- //

require_once(__DIR__ . "/../lib/functions.php");
require_once(__DIR__ . "/autoload.php");

session_start();
