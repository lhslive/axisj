<?php
$pageNo = $_POST["pageNo"];
$browser = $_POST["browser"];
$version = $_POST["version"];
$itemCount = 10000;

if($browser == "ie"){
    $itemCount = 5000;
    if($version < 9){
        $itemCount = 1000;
    }
}
?>
{result:"ok",list:[
<? for ($i = 0;$i<$itemCount; $i++){ ?>
<? if($i > 0){ echo ","; } ?>{no:<?=$pageNo * $i + 1?>,title:"AXGrid data line <?=$pageNo."/".$i?>",writer:"Thomas",regDate:"2013-01-18",desc:"myGrid.setList",price:123000,amount:10}
<? } ?>
],
page:{pageNo:<?=$pageNo?>,pageCount:200,listCount:<?=$itemCount?>},msg:""
}



