<?php
// https://www.php.net/manual/en/timezones.php
date_default_timezone_set("Asia/Baghdad");
$TIME = date("s");
echo $TIME;

// g  يقوم بجلب لك ساعة بصيغة 12 ساعة من دون اضافة 0 للأعداد الذي يكون اقل من عدد 10
// G  يقوم بجلب لك ساعة  بصيغة 24 ساعة من دون اضافة 0 للأعداد الذي يكون اقل من عدد 10
// h يقوم بجلب لك ساعة الحالية بصيغة 12 ساعة مع اضافة 0 للأعداد الذي يكون اقل من عدد 10
// H يقوم بجلب لك ساعة الحالية بصيغة 24 ساعة مع اضافة 0 للأعداد الذي يكون اقل من عدد 10
// i                               يقوم بجلب  لك دقيقة الحالية من ساعة الذي انت الان بها 
// s                                            يقوم بجلب لك ثانية بمجرد يتم طبع البيانات 
?>