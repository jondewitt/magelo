<div class='NavOuter'>
  <div class='NavInner'>
    <div class='FreeButton' onclick="window.location='character.php?char={NAME}';">{L_INVENTORY}</div>
    <div class='FreeButton' onclick="window.location='aas.php?char={NAME}';">{L_AAS}</div>
    <div class='FreeButton' onclick="window.location='keys.php?char={NAME}';">{L_KEYS}</div>
    <div class='FreeButton' onclick="window.location='flags.php?char={NAME}';">{L_FLAGS}</div>
    <div class='FreeButton' onclick="window.location='skills.php?char={NAME}';">{L_SKILLS}</div>
    <div class='FreeButton' onclick="window.location='corpse.php?char={NAME}';">{L_CORPSE}</div>
    <div class='FreeButton' onclick="window.location='factions.php?char={NAME}';">{L_FACTION}</div>
    <div class='FreeButton' onclick="window.location='charmove.php?char={NAME}';">{L_CHARMOVE}</div>
  </div>
</div>

<div id='container'>
  <div class='FlagOuter'>
    <div class='FlagTitle'>
      <div class='FlagTitleLeft'></div>
      <div class='FlagTitleMid'>{L_ALTERNATE_ABILITIES} - {NAME}</div>
      <div class='FlagTitleRight'></div>
    </div>
    <div class='FlagInner'>
      <table class='StatTable' style='width:625px;'>
        <tr>
          <!-- BEGIN tabs -->
          <td align='center' nowrap><a style='color:#{tabs.COLOR};' id='link{tabs.ID}' onclick="display(0,{tabs.ID},'tab'); color({tabs.ID});">{tabs.TEXT}</a></td>
          <!-- END tabs -->
        </tr>
      </table>
      <br>
      <table class='StatTable' style='width:625px;'>
        <tr>
          <td>
            <!-- BEGIN boxes -->
            <div id='tab{boxes.ID}' class='FlagTabBox' style='display: {boxes.DISPLAY};'>
              <table class='StatTable' height='100%'>
                <tr>
                  <td class='ColumnHead' style='padding: 0px 3px 4px 30px;'>{L_TITLE}</td>
                  <td class='ColumnHead' style='padding: 0px 15px 4px 30px;' align='center'>{L_CUR_MAX}</td>
                  <td class='ColumnHead' style='padding: 0px 30px 4px 15px;' align='center'>{L_COST}</td>
                </tr>
                <!-- BEGIN aas -->
                <tr onMouseOver="this.style.background = '#7b714a'" onMouseOut ="this.style.background = 'none'">
                  <td style='padding: 1px 3px 0px 30px;color:{boxes.aas.COLOR};'>{boxes.aas.NAME}</td>
                  <td style='padding: 1px 15px 0px 30px;color:{boxes.aas.COLOR};' align='center'>{boxes.aas.CUR}/{boxes.aas.MAX}</td>
                  <td style='padding: 1px 30px 0px 15px;color:{boxes.aas.COLOR};' align='center'>{boxes.aas.COST}</td>
                </tr> 
                <!-- END aas -->        
              </table>
            </div>
            <!-- END boxes -->
          </td>
          <td align='center' width='150px' valign='top'>
            <br><br><br>
            <table class='StatTable' style='width:90%;'>
              <tr><td align='left' nowrap>{L_AA_POINTS}:</td><td align='right' nowrap>{AA_POINTS}</td></tr>
              <tr><td align='left' nowrap>{L_POINTS_SPENT}:</td><td align='right' nowrap>{POINTS_SPENT}</td></tr>
            </table>
          </td>
        </tr>
      </table>
      <br><center><div class='FreeButton' onclick="window.location='character.php?char={NAME}';">{L_DONE}</div></center>
    </div>
  </div>
</div>