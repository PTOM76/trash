<?php
define('MINECRAFTUUIDTOMCID_URL','https://sessionserver.mojang.com/session/minecraft/profile/');

function plugin_minecraftuuidtomcid_convert(){
    global $vars;

    $html = '';
    $array = array();

    if($vars['mcuuid']){
        $json = file_get_contents(MINECRAFTUUIDTOMCID_URL.$vars['mcuuid']);
        $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
        $array = json_decode($json,true);
        $html = <<<EOD
        MinecraftID: {$array['name']}
        <br />
        UUID: {$array['id']}
        EOD;
    }
    return <<<EOD
        {$html}
        <form action="?{$vars['page']}" method="post">
            <input type="text" name="mcuuid" placeholder="UUID"></input>
            <input type="submit" value="変換" />
        </form>
    EOD;
}