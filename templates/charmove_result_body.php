<div class='NavOuter'>
  <div class='NavInner'>
    <div class='FreeButton' onclick="window.location='character.php?char={NAME}';" style="margin:3px">{L_INVENTORY}</div>
    <div class='FreeButton' onclick="window.location='aas.php?char={NAME}';" style="margin:3px">{L_AAS}</div>
    <div class='FreeButton' onclick="window.location='keys.php?char={NAME}';" style="margin:3px">{L_KEYS}</div>
    <div class='FreeButton' onclick="window.location='flags.php?char={NAME}';" style="margin:3px">{L_FLAGS}</div>
    <div class='FreeButton' onclick="window.location='skills.php?char={NAME}';" style="margin:3px">{L_SKILLS}</div>
    <div class='FreeButton' onclick="window.location='corpse.php?char={NAME}';" style="margin:3px">{L_CORPSE}</div>
    <div class='FreeButton' style="color:606060;margin:3px">{L_FACTION}</div>
    <div class='FreeButton' onclick="window.location='charmove.php?char={NAME}';" style="margin:3px">{L_CHARMOVE}</div>
  </div>
</div>

<div id='container'>
  <div class='FlagOuter'>
    <div class='FlagTitle'>
      <div class='FlagTitleLeft'></div>
      <div class='FlagTitleMid'>{L_CHARACTER_MOVER}</div>
      <div class='FlagTitleRight'></div>
    </div>
    <div class='FlagInner' align='left'>
      <div class='FlagTabBox'>
      <!-- BEGIN results -->
      {results.OUTPUT}<br>
      <!-- END results -->
      </div>
    </div>
  </div>
</div>