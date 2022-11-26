<div class='NavOuter'> 
  <div class='NavInner'> 
    <div class='FreeButton' style="color:#606060;">{L_INVENTORY}</div>
    <div class='FreeButton' onclick="window.location='aas.php?char={FIRST_NAME}';">{L_AAS}</div> 
    <div class='FreeButton' onclick="window.location='keys.php?char={FIRST_NAME}';">{L_KEYS}</div>
    <div class='FreeButton' onclick="window.location='flags.php?char={FIRST_NAME}';">{L_FLAGS}</div> 
    <div class='FreeButton' onclick="window.location='skills.php?char={FIRST_NAME}';">{L_SKILLS}</div> 
    <div class='FreeButton' onclick="window.location='corpse.php?char={FIRST_NAME}';">{L_CORPSE}</div> 
    <div class='FreeButton' onclick="window.location='factions.php?char={FIRST_NAME}';">{L_FACTION}</div> 
    <div class='FreeButton' onclick="window.location='charmove.php?char={FIRST_NAME}';">{L_CHARMOVE}</div> 
    <div class='FreeButton' onclick="window.external.AddFavorite(location.href, document.title);">{L_BOOKMARK}</div> 
  </div> 
</div> 

<div id="container">
  <div>
  <!-- BEGIN bags --> 
  <div class='BagOuter bagrow{bags.ROWS}' id='bag{bags.SLOT}'> 
    <div class='BagTitle'> 
      <div class='BagTitleLeft'></div> 
      <div class='BagTitleMid'>{L_CONTAINER}</div> 
      <div class='BagTitleRight'></div> 
    </div> 
      
    <!-- BEGIN bagslots --> 
    <div class='Slot bagslotloc{bags.bagslots.BS_SLOT} slotimage'></div> 
    <!-- END bagslots --> 
    <!-- BEGIN bagitems --> 
    <div onclick="display(0, {bags.bagitems.BI_SLOT}, 'slot');" class='Slot bagslotloc{bags.bagitems.BI_RELATIVE_SLOT}' style='background-image: url(images/items/item_{bags.bagitems.BI_ICON}.png);'></div> 
    <!-- END bagitems --> 

    <div class='Button bagbuttonrow{bags.ROWS}' onclick="document.getElementById('bag{bags.SLOT}').style.display = 'none';">{L_DONE}</div> 
  </div> 
  <!-- END bags --> 
  <div id="inventory-wrapper">
    <div class='IventoryOuter{HIGHLIGHT_GM}'> 
      <div class='IventoryTitle'> 
        <div class='IventoryTitleLeft'></div> 
        <div class='IventoryTitleMid'>{L_HEADER_INVENTORY}</div> 
        <div class='IventoryTitleRight'></div> 
      </div> 
      <div class='InventoryInner'> 
      
        <div class='InventoryStats2'> 
          <table class='StatTable'> 
            <tr> 
              <td nowrap> 
                {L_REGEN}<br>{L_FT}<br>{L_ATK}<br>{L_DS}<br>{L_HASTE}
              </td> 
              <td>{REGEN} / {REGEN_cap}<br>{FT} / {FT_cap}<br>{ATK_item} / {ATK_item_cap}<br>{DS}<br>{HASTE}%
              </td>
            </tr> 
          </table> 
        </div> 

        <div class='InventoryStats'> 
          <table class='StatTable'> 
            <tr><td colspan='2' class="player-name">{FIRST_NAME} {LAST_NAME}</td></tr> 
            <tr><td colspan='2' style='height: 3px'></td></tr> 
            <tr><td colspan='2' class="player-race">{RACE}</td></tr> 
            <tr><td colspan='2' style='height: 3px'></td></tr> 
            <tr><td colspan='2'>
                <span class="player-level">{LEVEL}</span> 
                <span class="player-class">{CLASS}</span><br>
                <span class="player-deity">{DEITY}</span>
                </td>
            </tr> 
            <tr><td colspan='2' style='height: 3px'></td></tr> 
            <tr> 
              <td>{L_HP}<br>{L_MANA}<br>{L_ENDR}<br>{L_AC}<br>{L_ATK}</td> 
              <td width='100%'>
                  <span class="player-hp">{HP}</span><br>
                  <span class="player-mana">{MANA}</span><br>
                  <span class="player-end">{ENDR}</span><br>
                  <span class="player-ac">{AC}</span><br>
                  <span class="player-atk">{ATK}</span>
              </td> 
            </tr> 
            <tr><td class='Divider' colspan='2'></td></tr> 
            <tr> 
              <td>{L_STR}<br>{L_STA}<br>{L_AGI}<br>{L_DEX}</td> 
                <td width='100%'>
                    <span class="player-str"><font color='#00FF00'>{STR}</font></span> / <span>{STR_cap}</span><br>
                    <span class="player-sta"><font color='#00FF00'>{STA}</font></span> / <span>{STA_cap}</span><br>
                    <span class="player-agi"><font color='#00FF00'>{AGI}</font></span> / <span>{AGI_cap}</span><br>
                    <span class="player-dex"><font color='#00FF00'>{DEX}</font></span> / <span>{DEX_cap}</span></font>
                </td>
            </tr> 
            <tr><td class='Divider' colspan='2'></td></tr> 
            <tr> 
              <td>{L_WIS}<br>{L_INT}<br>{L_CHA}</td> 
                <td width='100%'>
                    <span class="player-wis"><font color='#00FF00'>{WIS}</font></span> / <span>{WIS_cap}</span><br>
                    <span class="player-int"><font color='#00FF00'>{INT}</font></span> / <span>{INT_cap}</span><br>
                    <span class="player-cha"><font color='#00FF00'>{CHA}</font></span> / <span>{CHA_cap}</span></font>
                </td> 
            </tr> 
            <tr><td class='Divider' colspan='2'></td></tr> 
            <tr> 
              <td>{L_POISON}<br>{L_MAGIC}<br>{L_DISEASE}<br>{L_FIRE}<br>{L_COLD}</td>
                <td>
                    <span class="player-pr"><font color='#00FF00'>{POISON}</font></span> / <span>{POISON_cap}</span><br>
                    <span class="player-mr"><font color='#00FF00'>{MAGIC}</font></span> / <span>{MAGIC_cap}</span><br>
                    <span class="player-dr"><font color='#00FF00'>{DISEASE}</font></span> / <span>{DISEASE_cap}</span><br>
                    <span class="player-fr"><font color='#00FF00'>{FIRE}</font></span> / <span>{FIRE_cap}</span><br>
                    <span class="player-cr"><font color='#00FF00'>{COLD}</font></span> / <span>{COLD_cap}</span></font>
                </td> 
            </tr> 
            <tr><td class='Divider' colspan='2'></td></tr> 
            <tr> 
              <td>{L_WEIGHT}</td> 
              <td nowrap>{WEIGHT} / {STR}</td> 
            </tr>
            <tr><td class='Divider' colspan='2'></td></tr>
            <tr>
              <td>{L_BIRTHDAY}</td>
            </tr>
            <tr>
              <td colspan='2'>{BIRTHDAY}</td>
            </tr>
          </table> 
        </div>  

        <div class='InventoryMonogram'><img src='images/monograms/{CLASS_NUM}.gif'></div> 

        <div class='Coin' style='top: 116px;left: 317px;'><table class='StatTable'><tr><td align='left'><img src='images/pp.gif'></td><td align='center' width='100%'>{pp}</td></tr></table></div> 
        <div class='Coin' style='top: 144px;left: 317px;'><table class='StatTable'><tr><td align='left'><img src='images/gp.gif'></td><td align='center' width='100%'>{gp}</td></tr></table></div> 
        <div class='Coin' style='top: 172px;left: 317px;'><table class='StatTable'><tr><td align='left'><img src='images/sp.gif'></td><td align='center' width='100%'>{sp}</td></tr></table></div> 
        <div class='Coin' style='top: 200px;left: 317px;'><table class='StatTable'><tr><td align='left'><img src='images/cp.gif'></td><td align='center' width='100%'>{cp}</td></tr></table></div> 

        <div class='Slot slotloc0 slotimage0'></div> 
        <div class='Slot slotloc1 slotimage1'></div> 
        <div class='Slot slotloc2 slotimage2'></div> 
        <div class='Slot slotloc3 slotimage3'></div> 
        <div class='Slot slotloc4 slotimage4'></div> 
        <div class='Slot slotloc5 slotimage5'></div> 
        <div class='Slot slotloc6 slotimage6'></div> 
        <div class='Slot slotloc7 slotimage7'></div> 
        <div class='Slot slotloc8 slotimage8'></div> 
        <div class='Slot slotloc9 slotimage9'></div> 
        <div class='Slot slotloc10 slotimage10'></div> 
        <div class='Slot slotloc11 slotimage11'></div> 
        <div class='Slot slotloc12 slotimage12'></div> 
        <div class='Slot slotloc13 slotimage13'></div> 
        <div class='Slot slotloc14 slotimage14'></div> 
        <div class='Slot slotloc15 slotimage15'></div> 
        <div class='Slot slotloc16 slotimage16'></div> 
        <div class='Slot slotloc17 slotimage17'></div> 
        <div class='Slot slotloc18 slotimage18'></div> 
        <div class='Slot slotloc19 slotimage19'></div> 
        <div class='Slot slotloc20 slotimage20'></div> 
        <div class='Slot slotloc21 slotimage21'></div> 
        <div class='Slot slotloc22 slotimage'></div> 
        <div class='Slot slotloc23 slotimage'></div> 
        <div class='Slot slotloc24 slotimage'></div> 
        <div class='Slot slotloc25 slotimage'></div> 
        <div class='Slot slotloc26 slotimage'></div> 
        <div class='Slot slotloc27 slotimage'></div> 
        <div class='Slot slotloc28 slotimage'></div> 
        <div class='Slot slotloc29 slotimage'></div> 
        <div class='Slot slotloc9999 slotimage9999'></div> 


        <!-- BEGIN invitem --> 
        <div
          onmouseover="display(0, {invitem.SLOT}, 'slot'); if ({invitem.ISBAG}) display(0, {invitem.SLOT}, 'bag');"
          class='Slot slotloc{invitem.SLOT}'
          style='background-image: url(images/items/item_{invitem.ICON}.png);'>
        </div>
        <!-- END invitem --> 
      </div> 
    </div> 
  </div>
  <div id="bank-wrapper">
    <div class='BankOuter'> 
      <div class='BankTitle'> 
        <div class='BankTitleLeft'></div> 
        <div class='BankTitleMid'>{L_HEADER_BANK}</div> 
        <div class='BankTitleRight'></div> 
      </div> 
      <div class='Slot slotloc2000 slotimage'></div> 
      <div class='Slot slotloc2001 slotimage'></div> 
      <div class='Slot slotloc2002 slotimage'></div> 
      <div class='Slot slotloc2003 slotimage'></div> 
      <div class='Slot slotloc2004 slotimage'></div> 
      <div class='Slot slotloc2005 slotimage'></div> 
      <div class='Slot slotloc2006 slotimage'></div> 
      <div class='Slot slotloc2007 slotimage'></div> 
      <div class='Slot slotloc2008 slotimage'></div> 
      <div class='Slot slotloc2009 slotimage'></div> 
      <div class='Slot slotloc2010 slotimage'></div> 
      <div class='Slot slotloc2011 slotimage'></div> 
      <div class='Slot slotloc2012 slotimage'></div> 
      <div class='Slot slotloc2013 slotimage'></div> 
      <div class='Slot slotloc2014 slotimage'></div> 
      <div class='Slot slotloc2015 slotimage'></div> 
      <div class='Slot slotloc2016 slotimage'></div> 
      <div class='Slot slotloc2017 slotimage'></div> 
      <div class='Slot slotloc2018 slotimage'></div> 
      <div class='Slot slotloc2019 slotimage'></div> 
      <div class='Slot slotloc2020 slotimage'></div> 
      <div class='Slot slotloc2021 slotimage'></div> 
      <div class='Slot slotloc2022 slotimage'></div> 
      <div class='Slot slotloc2023 slotimage'></div> 

      <!-- BEGIN bankitem --> 
      <div onclick="display(0, {bankitem.SLOT}, 'slot'); if ({bankitem.ISBAG}) display(0, {bankitem.SLOT}, 'bag');" class='Slot slotloc{bankitem.SLOT}' style='background-image: url(images/items/item_{bankitem.ICON}.png);'></div> 
      <!-- END bankitem --> 
      

      <div class='Coin' style='top: 200px;left: 6px;'><table class='StatTable'><tr><td align='left'><img src='images/pp.gif'></td><td align='center' width='100%'>{bpp}</td></tr></table></div> 
      <div class='Coin' style='top: 228px;left: 6px;'><table class='StatTable'><tr><td align='left'><img src='images/gp.gif'></td><td align='center' width='100%'>{bgp}</td></tr></table></div> 
      <div class='Coin' style='top: 256px;left: 6px;'><table class='StatTable'><tr><td align='left'><img src='images/sp.gif'></td><td align='center' width='100%'>{bsp}</td></tr></table></div> 
      <div class='Coin' style='top: 284px;left: 6px;'><table class='StatTable'><tr><td align='left'><img src='images/cp.gif'></td><td align='center' width='100%'>{bcp}</td></tr></table></div> 

    </div> 
  </div>
  <div id="tooltip-wrapper">
    <!-- BEGIN item --> 
    <div class='ItemOuter' id='slot{item.SLOT}' style='display:none;'> 
      <div class='ItemTitle'> 
        <div class='ItemTitleLeft'></div> 
        <div class='ItemTitleMid'><a href='http://www.takproject.net/allaclone/item.php?id={item.ID}' target='_blank'>{item.NAME}</a></div>
        <div class='ItemTitleRight'></div> 
      </div> 
      <div class='ItemInner' style='text-align:left;'>        
        {item.HTML} 
        <!-- BEGIN augment --> 
        <center> 
          <br> 
          <table class='AugTable'> 
            <tr> 
              <td align='center'> 
                <a href='http://www.takproject.net/allaclone/item.php?id={item.augment.AUG_ID}' target='_blank'>{item.augment.AUG_NAME}</a>
              </td> 
            </tr> 
            <tr> 
              <td align='left'> 
                {item.augment.AUG_HTML} 
              </td> 
            </tr> 
          </table> 
        </center> 
        <!-- END augment --> 
      </div> 
    </div> 
    <!-- END item --> 
  </div>
</div>