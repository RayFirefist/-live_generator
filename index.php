<?php

if($_POST['PHP_SELF'] != null || ""){
	$Form_data = $POST['PHP_SELF'];
    var_dump($Form_data);
}
else{
    null;
}



?>
<html>
<head>
<title>Unit generator for SQLite database</title>

<!-- Credits: Materialize website: materializecss.com -->

<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
</head>

<body>
<form name="form" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" >
<!--Song name-->
<input placeholder="Song name" id="song_name" type="text" class="validate">
<br>
<!--Song ID-->
<input placeholder="Song ID" id="song_id" type="text" class="validate">
<br>
<!--Attribute-->
Attribute:<br>
<div class="input-field col s12 m6">
<select class="browser-default" name="attribute">
      <option value="" disabled selected>Choose your option</option>
      <option value="1" >Smile</option>
      <option value="3" >Cool</option>
      <option value="2" >Pure</option>
</select>
</div><br>
<!--Easy song-->
Easy Song:<br>
<!--Setting ID-->
<input placeholder="Easy setting ID" id="easy_setting_id" type="text" class="validate">
<br>
<!--Score Rank (C -> S)-->
Score Rank:<br>
<input placeholder="Rank C" id="easy_score_c" type="text" class="validate">
<br>
<input placeholder="Rank B" id="easy_score_b" type="text" class="validate">
<br>
<input placeholder="Rank A" id="easy_score_a" type="text" class="validate">
<br>
<input placeholder="Rank S" id="easy_score_s" type="text" class="validate">
<br>
<!--Combo Rank (C -> S)-->
Combo Rank:<br>
<input placeholder="Rank C" id="easy_combo_c" type="text" class="validate">
<br>
<input placeholder="Rank B" id="easy_combo_b" type="text" class="validate">
<br>
<input placeholder="Rank A" id="easy_combo_a" type="text" class="validate">
<br>
<input placeholder="Rank S" id="easy_combo_s" type="text" class="validate">
<br>
<!--Background Live-->
<!TODO>
Background Live:<br>
<div class="input-field col s12 m6">
<select class="browser-default" name="back_live">
      <option value="" disabled selected>Choose your option</option>
      <option value="1" >TODO</option>
      <option value="2" >TODO</option>
      <option value="3" >TODO</option>
      <option value="4" >TODO</option>
</select>
</div><br>
<!--Button-->
<div align="center">
<a class="waves-effect waves-light btn">button</a>
</div><br>
</form>
</body>
<script>
  $(document).ready(function() {
    $('select').material_select();
  });
    $(document).ready(function() {
    Materialize.updateTextFields();
  });
        
</script>
</html>