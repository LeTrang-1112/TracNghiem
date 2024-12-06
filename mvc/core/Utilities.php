<?php
class Utilities{
    function getDateTimeNow(){
        $tz_object = new DateTimeZone('Asia/Ho_Chi_Minh');
        $datetime = new DateTime();
        $datetime->setTimezone($tz_object);
        return $datetime->format('d/m/yy h:i:s');
    }
    function convertToDateMySql($date){
        $date=date_create($date);
        return date_format($date,"Y-m-d");
    }
    function remove_utf8_bom($text)
    {
        $bom = pack('H*','EFBBBF');
        $text = preg_replace("/^$bom/", '', $text);
        return $text;
    }
}
?>