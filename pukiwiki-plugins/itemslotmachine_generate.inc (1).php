<?php
function plugin_itemslotmachine_generate_convert(){
return <<<EOD
<html>
  <head>
    <title>ItemSlotMachine</title>
  </head>
  <body>
    <p>
      1.12.2(他のバージョンは未確認)の<a href=https://dev.bukkit.org/projects/itemslotmachine>ItemSlotMachine</a>のスロットを生成ツール     
      <br>1.12.2で使うにはItemSlotMachine 1.3.3で動作します。
    </p>
    <main>
      <form method="post" action="generate_download.php">
        <br>
        一般設定:<br>
        &nbsp;&nbsp;&nbsp;消費コイン:<input value="1" type="text" name="Activation_Amount" size="4"/>
        <br>
        &nbsp;&nbsp;&nbsp;スロットの表示アイテム:<input type="text" name="Item_Icons" value="35-6, 41, 95-15"/>
        <br>&nbsp;&nbsp;&nbsp;↑書き方 &lt;アイテムID(数値)-ダメージ値、データ値&gt;
        <br>&nbsp;&nbsp;&nbsp;クリエイティブでの使用:
        <select name="Creative_Usage_Enabled" size="1">
          <option value="true" label="有効" selected>有効</option>
          <option value="false" label="無効">無効</option>
        </select>
        <br>&nbsp;&nbsp;&nbsp;花火の打ち上げ:
        <select name="Fireworks_Enabled" size="1">
          <option value="true" label="有効" selected>有効</option>
          <option value="false" label="無効">無効</option>
        </select>
        <br>
        &nbsp;&nbsp;&nbsp;個人権限:
        <script type="text/javascript">var ipermissionNo=1;</script>
        <select name="Individual_Permission__Enabled" size="1" onchange="document.getElementById('ipermission'+ipermissionNo).style.display='none';document.getElementById('ipermission'+(ipermissionNo=(this.selectedIndex+1))).style.display='block'">
          <option value="true" label="有効">有効</option>
          <option value="false" label="無効" selected>無効</option>
        </select>
        <div id="ipermission1" style="display: none;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;権限:<input value="ItemSlotMachine.slot.use.<name>" type="text" name="Individual_Permission__Permission"/>
        </div>
        <div id="ipermission2" style="display: block;"></div>
        &nbsp;&nbsp;&nbsp;停止設定:
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ティック遅延:<input value="0-5-10" type="text" name="Halt_Settings__Tick_Delay" size="4"/>
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;自動停止:
        <script type="text/javascript">var Automatic_HaltNo=1;</script>
        <select name="Halt_Settings__Automatic_Halt__Enabled" size="1" onchange="document.getElementById('Automatic_Halt'+Automatic_HaltNo).style.display='none';document.getElementById('Automatic_Halt'+(Automatic_HaltNo=(this.selectedIndex+1))).style.display='block'">
          <option value="true" label="有効" selected>有効</option>
          <option value="false" label="無効">無効</option>
        </select>
        <div id="Automatic_Halt1" style="display: block;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ティック:<input value="20" type="text" name="Halt_Settings__Automatic_Halt__Ticks"/>
        </div>
        <div id="Automatic_Halt2" style="display: none;"></div>
        &nbsp;&nbsp;&nbsp;当たる確率の設定:
        <script type="text/javascript">var pwinningchance1No=1;</script>
        <select name="Predetermined_Winning_Chance__Enabled" size="1" onchange="document.getElementById('pwinningchance1'+pwinningchance1No).style.display='none';document.getElementById('pwinningchance1'+(pwinningchance1No=(this.selectedIndex+1))).style.display='block'">
          <option value="true" label="有効" selected>有効</option>
          <option value="false" label="無効">無効</option>
        </select>
        <div id="pwinningchance11" style="display: block;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;値:<input value="1/100" type="text" name="Predetermined_Winning_Chance__Value"/>
        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;↑書き方&lt;最小のチャンス/最大のチャンス&gt;
        </div>
        <div id="pwinningchance12" style="display: none;"></div>
        &nbsp;&nbsp;&nbsp;サウンド設定:
	<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"サウンド"は「, 」で複数指定可能。書き方→&lt;サウンドID-音量-音程&gt;
  <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://helpch.at/docs/1.12.2/org/bukkit/Sound.html">Bukkit/Spigot 1.12.2 サウンドID</a>
	<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;動作時のカチカチ音:
        <script type="text/javascript">var soundsettingstsNo=1;</script>
        <select name="Sound_Settings__Ticking_Sounds__Enabled" size="1" onchange="document.getElementById('soundsettingsts'+soundsettingstsNo).style.display='none';document.getElementById('soundsettingsts'+(soundsettingstsNo=(this.selectedIndex+1))).style.display='block'">
          <option value="true" label="有効" selected>有効</option>
          <option value="false" label="無効">無効</option>
        </select>
        <div id="soundsettingsts1" style="display: block;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ブロードキャスト(周辺に聞こえるようにする/しない):
        <select name="Sound_Settings__Ticking_Sounds__Broadcast__Enabled" size="1">
          <option value="true" label="有効" selected>有効</option>
          <option value="false" label="無効">無効</option>
        </select>
        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;サウンド:<input size="75" value="UI_BUTTON_CLICK-2-2" type="text" name="Sound_Settings__Ticking_Sounds__Sounds"/>
        </div>
        <div id="soundsettingsts2" style="display: none;"></div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;勝利時(当たり)の音:
        <script type="text/javascript">var soundsettingswsNo=1;</script>
        <select name="Sound_Settings__Win_Sounds__Enabled" size="1" onchange="document.getElementById('soundsettingsws'+soundsettingswsNo).style.display='none';document.getElementById('soundsettingsws'+(soundsettingswsNo=(this.selectedIndex+1))).style.display='block'">
          <option value="true" label="有効" selected>有効</option>
          <option value="false" label="無効">無効</option>
        </select>
        <div id="soundsettingsws1" style="display: block;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ブロードキャスト(周辺に聞こえるようにする/しない):
        <select name="Sound_Settings__Win_Sounds__Broadcast__Enabled" size="1">
          <option value="true" label="有効" selected>有効</option>
          <option value="false" label="無効">無効</option>
        </select>
        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;サウンド:<input size="75" value="ENTITY_PLAYER_LEVELUP-2-2" type="text" name="Sound_Settings__Win_Sounds__Sounds"/>
        </div>
        <div id="soundsettingsws2" style="display: none;"></div>

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;敗北時(ハズレ)の音:
        <script type="text/javascript">var soundsettingslsNo=1;</script>
        <select name="Sound_Settings__Lose_Sounds__Enabled" size="1" onchange="document.getElementById('soundsettingsls'+soundsettingslsNo).style.display='none';document.getElementById('soundsettingsls'+(soundsettingslsNo=(this.selectedIndex+1))).style.display='block'">
          <option value="true" label="有効" selected>有効</option>
          <option value="false" label="無効">無効</option>
        </select>
        <div id="soundsettingsls1" style="display: block;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ブロードキャスト(周辺に聞こえるようにする/しない):
        <select name="Sound_Settings__Lose_Sounds__Broadcast__Enabled" size="1">
          <option value="true" label="有効" selected>有効</option>
          <option value="false" label="無効">無効</option>
        </select>
        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;サウンド:<input size="75" value="BLOCK_NOTE_BELL-2-2, BLOCK_NOTE_BASS-2-2" type="text" name="Sound_Settings__Lose_Sounds__Sounds"/>
        </div>
        <div id="soundsettingsls2" style="display: none;"></div>
        &nbsp;&nbsp;&nbsp;プレイヤーロック:
        <script type="text/javascript">var playerLockNo=1;</script>
        <select name="Player_Lock__Enabled" size="1" onchange="document.getElementById('playerLock'+playerLockNo).style.display='none';document.getElementById('playerLock'+(playerLockNo=(this.selectedIndex+1))).style.display='block'">
          <option value="true" label="有効">有効</option>
          <option value="false" label="無効" selected>無効</option>
        </select>
        <div id="playerLock1" style="display: none;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;タイム:<input value="10" type="text" name="Player_Lock__Time" size="4"/>
        </div>
        <div id="playerLock2" style="display: block;"></div>
                &nbsp;&nbsp;&nbsp;コマンド実行:
        <script type="text/javascript">var commandExeNo=1;</script>
        <select name="Command_Execution__Enabled" size="1" onchange="document.getElementById('commandExe'+commandExeNo).style.display='none';document.getElementById('commandExe'+(commandExeNo=(this.selectedIndex+1))).style.display='block'">
          <option value="true" label="有効">有効</option>
          <option value="false" label="無効" selected>無効</option>
        </select>
        <div id="commandExe1" style="display: none;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;コマンド:<input value="say &lt;user_name&gt; has won &lt;money&gt; &ltcurrency_name&gt; and &lt;item_amount&gt; items from slot machine &lt;slot_machine&gt;" type="text" name="Command_Execution__Commands"/>
          <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;↑書き方&lt;コマンド&gt;;&ltコマンド&gt;</div>
        <div id="commandExe2" style="display: block;"></div>
        マネーポット(ストック)設定:
        <script type="text/javascript">var mpstNo=1;</script>
        <select name="Money_Pot_Settings__Enabled" size="1" onchange="document.getElementById('mpst'+mpstNo).style.display='none';document.getElementById('mpst'+(mpstNo=(this.selectedIndex+1))).style.display='block'">
          <option value="true" label="有効" selected>有効</option>
          <option value="false" label="無効">無効</option>
        </select>
        <div id="mpst1" style="display: block;">
        &nbsp;&nbsp;&nbsp;初期ストック:<input value="1000.0" type="text" name="Money_Pot_Settings__Default_Size"/>
        <br>&nbsp;&nbsp;&nbsp;追加ストック:<input value="50.0" type="text" name="Money_Pot_Settings__Pot_Raise"/>
        <div id="mpst2" style="display: none;"></div>
        <br>&nbsp;&nbsp;&nbsp;ハウスカット(差引):
        <script type="text/javascript">var mpsthcNo=1;</script>
        <select name="Money_Pot_Settings__House_Cut__Enabled" size="1" onchange="document.getElementById('mpsthc'+mpsthcNo).style.display='none';document.getElementById('mpsthc'+(mpsthcNo=(this.selectedIndex+1))).style.display='block'">
          <option value="true" label="有効" selected>有効</option>
          <option value="false" label="無効">無効</option>
        </select>
        <div id="mpsthc1" style="display: block;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;割合:<select name="Money_Pot_Settings__House_Cut__Percentage" size="1">
          <option value="true" label="有効" selected>有効</option>
          <option value="false" label="無効">無効</option>
        </select>
        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;量:<input value="10.0" type="text" name="Money_Pot_Settings__House_Cut__Amount"/>
          </div>
        <div id="mpsthc2" style="display: none;"></div>
        <br>&nbsp;&nbsp;&nbsp;コンボ設定:
        <script type="text/javascript">var mpstcsNo=1;</script>
        <select name="Money_Pot_Settings__Combo_Settings__Enabled" size="1" onchange="document.getElementById('mpstcs'+mpstcsNo).style.display='none';document.getElementById('mpstcs'+(mpstcsNo=(this.selectedIndex+1))).style.display='block'">
          <option value="true" label="有効" selected>有効</option>
          <option value="false" label="無効">無効</option>
        </select>
        <div id="mpstcs1" style="display: block;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;コンボ:<input value="279@279@279#MULTIPLY_POT_AND_DISTRIBUTE#2.0" type="text" name="Money_Pot_Settings__Combo_Settings__Combos"/>
        <br />↑複数のコンボを追加する場合「;」で区切ります。
          <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h3>アクション名</h3>
          <ul>
            <li>MULTIPLY_POT_AND_DISTRIBUTE(ポットの金額を倍にして配る)</li><li>ADD_TO_POT_AND_DISTRIBUTE(ポットの金額と指定した金額を追加して配る)</li><li>DISTRIBUTE_POT(ポットの金額を配る)</li><li>DISTRIBUTE_INDEPENDANT_MONEY(ポットとは別に指定した金額を配る)</li></ul>
          </div>
          <div id="mpstcs2" style="display: none;"></div>
        </div>
        <br>
        アイテムポット(ストック)設定:
        <script type="text/javascript">var ipstNo=1;</script>
        <select name="Item_Pot_Settings__Enabled" size="1" onchange="document.getElementById('ipst'+ipstNo).style.display='none';document.getElementById('ipst'+(ipstNo=(this.selectedIndex+1))).style.display='block'">
          <option value="true" label="有効" selected>有効</option>
          <option value="false" label="無効">無効</option>
        </select>
        <div id="ipst1" style="display: block;">
        &nbsp;&nbsp;&nbsp;初期アイテム:<input value="288-5, 264-1, 265-10" type="text" name="Item_Pot_Settings__Default_Items"/>
        <br>&nbsp;&nbsp;&nbsp;追加アイテム:<input value="348-2, 351-2-4" type="text" name="Item_Pot_Settings__Pot_Raise"/>
        <div id="ipst2" style="display: none;"></div>
        <br>&nbsp;&nbsp;&nbsp;ハウスカット(差引):
        <script type="text/javascript">var ipsthcNo=1;</script>
        <select name="Item_Pot_Settings__House_Cut__Enabled" size="1" onchange="document.getElementById('ipsthc'+ipsthcNo).style.display='none';document.getElementById('ipsthc'+(ipsthcNo=(this.selectedIndex+1))).style.display='block'">
          <option value="true" label="有効" selected>有効</option>
          <option value="false" label="無効">無効</option>
        </select>
        <div id="ipsthc1" style="display: block;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;割合:<select name="Item_Pot_Settings__House_Cut__Percentage" size="1">
          <option value="true" label="有効" selected>有効</option>
          <option value="false" label="無効">無効</option>
        </select>
        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;量:<input value="1" type="text" name="Item_Pot_Settings__House_Cut__Amount"/>
          </div>
        <div id="ipsthc2" style="display: none;"></div>
        <br>&nbsp;&nbsp;&nbsp;コンボ設定:
        <script type="text/javascript">var ipstcsNo=1;</script>
        <select name="Item_Pot_Settings__Combo_Settings__Enabled" size="1" onchange="document.getElementById('ipstcs'+ipstcsNo).style.display='none';document.getElementById('ipstcs'+(ipstcsNo=(this.selectedIndex+1))).style.display='block'">
          <option value="true" label="有効" selected>有効</option>
          <option value="false" label="無効">無効</option>
        </select>
        <div id="ipstcs1" style="display: block;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;コンボ:<input value="279@279@279#ADD_TO_POT_AND_DISTRIBUTE#264-3, 267-1, 19-20" type="text" name="Item_Pot_Settings__Combo_Settings__Combos"/>
        <br />↑複数のコンボを追加する場合「;」で区切ります。
          <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h3>アクション名</h3>
          <ul>
            <li>DOUBLE_POT_ITEMS_AND_DISTRIBUTE(ポットのアイテムを倍増して配る)</li><li>ADD_TO_POT_AND_DISTRIBUTE(ポットのアイテムと指定したアイテムを追加して配る)</li><li>DISTRIBUTE_POT(ポットのアイテムを配る)</li><li>DISTRIBUTE_INDEPENDANT_ITEMS(ポットとは別に指定したアイテムを配る)</li></ul>
          </div>
        <div id="ipstcs2" style="display: none;"></div>
        </div>
        <br>
        ファイル名:<input value="generated_slot_machine.yml" type="text" name="slotFileName" placeholder="xxxxx.yml"/>

        <input type="submit" value="ダウンロード" name="sended"/>
      </form>
    </main>
  </body>
</html>
EOD;
}