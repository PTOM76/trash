<?php
define('MINECRAFTMCIDTOUUID_URL','https://api.mojang.com/users/profiles/minecraft/');

function plugin_minecraftmcidtouuid_convert(){
    global $vars;

    $html = '';
    $array = array();

    if($vars['mcid']){
        $json = file_get_contents(MINECRAFTMCIDTOUUID_URL.$vars['mcid']);
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
            <input type="text" name="mcid" placeholder="Minecraft ID"></input>
            <input type="submit" value="変換" />
        </form>
    EOD;
}