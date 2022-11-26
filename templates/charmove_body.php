<script type="text/javascript">
  var arrInput = new Array(0);
  var arrNameValue = new Array(0);
  var arrLoginValue = new Array(0);
  var arrZoneValue = new Array(0);


  function addInput() {
    arrInput.push(arrInput.length);
    arrNameValue.push("");
    arrLoginValue.push("");
    arrZoneValue.push("");
    display();
  }

  function display() {
    document.getElementById('inputboxes').innerHTML = "";
    var id = "";
    var i = "";
    var login = "";
    var name = "";
    var zone = "";
    var selectBox = "";
    for (id = 0; id < arrInput.length; id++) {
      login = arrLoginValue[id];
      name = arrNameValue[id];
      zone = arrZoneValue[id];
      document.getElementById('inputboxes').innerHTML += "{L_LOGIN}: <input type='text' id='login" + id + "' class='SigBuilder' name='login[]'  onChange='javascript:saveLogin(" + id + ",this.value)'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\
                                                        {L_CHARNAME}: <input type='text'  id='name" + id + "' class='SigBuilder' name='name[]'  onChange='javascript:saveName(" + id + ",this.value)'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\
    							{L_ZONE}: <select id='zone" + id + "' class='SigBuilder' name='zone[]' onChange='javascript:saveZone(" + id + ",this.value)'>\
    							<!-- BEGIN zones --> <option value = '{zones.VALUE}' > {zones.VALUE} < /option>\ <!--END zones-- ></select><br>";					
    }
    for (id = 0; id < arrInput.length; id++) {
      login = arrLoginValue[id];
      name = arrNameValue[id];
      zone = arrZoneValue[id];
      document.getElementById('login' + id).value = login;
      document.getElementById('name' + id).value = name;
      selectBox = document.getElementById('zone' + id);
      for (i = 0; i < selectBox.options.length; i++) {
        if (selectBox.options[i].value == zone) {
          selectBox.options[i].selected = "1";
        }
      }
    }
  }

  function saveLogin(intId, strValue) {
    arrLoginValue[intId] = strValue;
  }

  function saveName(intId, strValue) {
    arrNameValue[intId] = strValue;
  }

  function saveZone(intId, strValue) {
    arrZoneValue[intId] = strValue;
  }

  arrInput.push(arrInput.length);
  arrNameValue.push("{CHARNAME}");
  arrLoginValue.push("");
  arrLoginValue.push("");
  display();
</script>

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
    <div class='FreeButton' onclick="window.external.AddFavorite(location.href, document.title);" style="margin:3px">{L_BOOKMARK}</div>
  </div>
</div>

<div id='container'>
  <div class='FlagOuter'>
    <div class='FlagTitle'>
      <div class='FlagTitleLeft'></div>
      <div class='FlagTitleMid'>{L_CHARACTER_MOVER}</div>
      <div class='FlagTitleRight'></div>
    </div>
    <div class='FlagInner'>
      <form name='charmoveform' method='GET' action='charmove.php'>
        <br>
        <table class='StatTable' style='width:auto'>
          <tr>
            <td valign='bottom' align='right'>
              <div id='inputboxes' style="float: right;"></div>
            </td>
            <td valign='bottom' align='left'>
              &nbsp;&nbsp;&nbsp;<a href=# onclick="addInput();">[{L_ADD_CHARACTER}]</a>
            </td>
          </tr>
        </table>
        <br>
        <div class='FreeButton' onclick="document.charmoveform.submit();">{L_MOVE}</div>
      </form>
    </div>
  </div>
</div>