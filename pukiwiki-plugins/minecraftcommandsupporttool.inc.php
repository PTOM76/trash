<?php
function plugin_minecraftcommandsupporttool_convert(){
    if (isset($_POST['command'])){
        $cmd = $_POST['command'];
        $cmd_r = str_replace("§","\\\\u00a7",$cmd);
        $converted = '/setblock ~ ~ ~ minecraft:standing_sign 0 replace {Text1:"{\\"text\\":\\"看板をクリック\\",\\"clickEvent\\":{\\"action\\":\\"run_command\\",\\"value\\":\\"/setblock ~ ~ ~ minecraft:command_block 0 replace {TrackOutput:false,Command:\\\\\\"'.$cmd_r.'\\\\\\"}\\"}}",Text2:"{\\"text\\":\\"\\"}",Text3:"{\\"text\\":\\"\\"}",Text4:"{\\"text\\":\\"\\"}"}';
    }
return <<<EOD
<html>
  <head>
    <title>コマンドサポートツール</title>
  </head>
  <body>
    <p>
      <h2>セクションアシスタントのWeb版</h2>
      Minecraftはバニラでコマンドブロックへの直接入力で"§"に対応していない。
      <br>
      このツールはバニラのMinecraftでもコマンドブロックで§を入力できるための支援ツールである。
    </p>
    <main>
      <h3>変換前</h3>
      <form method="post" action="">
        <textarea placeholder="/tell @p §a§lCommandSupportTool" id="command" name="command" cols="100" rows="15" style="
                                                                  border: 0;
                                                                  padding:10px;
                                                                  border:solid 1px #ccc;
                                                                  margin:0 0 20px;
                                                                  ">{$cmd}</textarea>
                                                                  
        <br>
        <input type="submit" value="変換"/>
      </form>
      <h3>変換後</h3>
      <textarea name="converted" cols="100" rows="15" style="
                                                             border: 0;
                                                             padding:10px;
                                                             border:solid 1px #ccc;
                                                             margin:0 0 20px;
                                                             ">{$converted}</textarea>
    </main>
  </body>
</html>
EOD;
}