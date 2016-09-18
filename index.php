<!--include('include.php');

if($_POST['PHP_SELF'] != null || ""){
	$Form_data = $POST['PHP_SELF'];
    var_dump($Form_data);
}
else{
    null;
}
-->
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
<form name="form" method="post" action="/live/process.php" >
<!--Song name-->
<input placeholder="Song name" name="song_name" type="text" class="validate">
<br>
<!--Assets directory-->
Title asset directory:<br>
<input placeholder="Title directory" name="title_dir" type="text" class="validate"><br>
Jacket asset directory:<br>
<input placeholder="Jacket directory" name="icon_dir" type="text" class="validate"><br>
Audio asset directory:<br>
<input placeholder="Audio directory" name="audio_dir" type="text" class="validate"><br>
<!--Song ID-->
<input placeholder="Song ID" name="song_id" type="text" class="validate">
<br>
<!--Attribute-->
Attribute:<br>
<div class="input-field col s12 m6">
<select class="browser-default" name="attribute">
      <option value="0" disabled selected>Choose your option</option>
      <option value="1" >Smile</option>
      <option value="3" >Cool</option>
      <option value="2" >Pure</option>
</select>
</div><br>
     <table>
        <thead>
          <tr>
              <th data-field="difficulty">Difficulty</th>
              <th data-field="setting_id">Setting ID</th>
              <th data-field="background_id">Background Live</th>
              <th data-field="score_c">Score C</th>
              <th data-field="score_b">Score B</th>
              <th data-field="score_a">Score A</th>
              <th data-field="score_s">Score S</th>
              <th data-field="combo_c">combo C</th>
              <th data-field="combo_b">combo B</th>
              <th data-field="combo_a">combo A</th>
              <th data-field="combo_s">combo S</th>
          </tr>
        </thead>
 <tbody>
          <tr>
            <td>Easy</td>
<td><input placeholder="easy setting ID" name="easy_setting_id" type="text" class="validate"></td>
            <td><div class="input-field col s12 m6">
<select class="browser-default" name="back_live">
      <option value="null" disabled selected>Choose your option</option>
      <option value="1" >TODO</option>
      <option value="2" >TODO</option>
      <option value="3" >TODO</option>
      <option value="4" >TODO</option>
</select>
</div><br></td>
<td><input placeholder="Rank C" name="easy_score_c" type="text" class="validate">
</td>
<td><input placeholder="Rank B" name="easy_score_b" type="text" class="validate">
</td>
<td><input placeholder="Rank A" name="easy_score_a" type="text" class="validate">
</td>
<td><input placeholder="Rank S" name="easy_score_s" type="text" class="validate">
</td>
<td><input placeholder="Rank C" name="easy_combo_c" type="text" class="validate">
</td>
<td><input placeholder="Rank B" name="easy_combo_b" type="text" class="validate">
</td>
<td><input placeholder="Rank A" name="easy_combo_a" type="text" class="validate">
</td>
<td><input placeholder="Rank S" name="easy_combo_s" type="text" class="validate">
</td>
          </tr>
          <tr>
            <td>Normal</td>
            <td><input placeholder="normal setting ID" name="normal_setting_id" type="text" class="validate"></td>
            <td><div class="input-field col s12 m6">
<select class="browser-default" name="back_live">
      <option value="" disabled selected>Choose your option</option>
      <option value="1" >TODO</option>
      <option value="2" >TODO</option>
      <option value="3" >TODO</option>
      <option value="4" >TODO</option>
</select>
</div><br></td>
<td><input placeholder="Rank C" name="normal_score_c" type="text" class="validate">
</td>
<td><input placeholder="Rank B" name="normal_score_b" type="text" class="validate">
</td>
<td><input placeholder="Rank A" name="normal_score_a" type="text" class="validate">
</td>
<td><input placeholder="Rank S" name="normal_score_s" type="text" class="validate">
</td>
<td><input placeholder="Rank C" name="normal_combo_c" type="text" class="validate">
</td>
<td><input placeholder="Rank B" name="normal_combo_b" type="text" class="validate">
</td>
<td><input placeholder="Rank A" name="normal_combo_a" type="text" class="validate">
</td>
<td><input placeholder="Rank S" name="normal_combo_s" type="text" class="validate">
</td>
          </tr>
          <tr>
            <td>Hard</td>
            <td><input placeholder="hard setting ID" name="hard_setting_id" type="text" class="validate"></td>
            <td><div class="input-field col s12 m6">
<select class="browser-default" name="back_live">
      <option value="" disabled selected>Choose your option</option>
      <option value="1" >TODO</option>
      <option value="2" >TODO</option>
      <option value="3" >TODO</option>
      <option value="4" >TODO</option>
</select>
</div><br></td>
<td><input placeholder="Rank C" name="hard_score_c" type="text" class="validate">
</td>
<td><input placeholder="Rank B" name="hard_score_b" type="text" class="validate">
</td>
<td><input placeholder="Rank A" name="hard_score_a" type="text" class="validate">
</td>
<td><input placeholder="Rank S" name="hard_score_s" type="text" class="validate">
</td>
<td><input placeholder="Rank C" name="hard_combo_c" type="text" class="validate">
</td>
<td><input placeholder="Rank B" name="hard_combo_b" type="text" class="validate">
</td>
<td><input placeholder="Rank A" name="hard_combo_a" type="text" class="validate">
</td>
<td><input placeholder="Rank S" name="hard_combo_s" type="text" class="validate">
</td>

          </tr>
          <tr>
            <td>Expert</td>
            <td><input placeholder="expert setting ID" name="expert_setting_id" type="text" class="validate"></td>
            <td><div class="input-field col s12 m6">
<select class="browser-default" name="back_live">
      <option value="" disabled selected>Choose your option</option>
      <option value="1" >TODO</option>
      <option value="2" >TODO</option>
      <option value="3" >TODO</option>
      <option value="4" >TODO</option>
</select>
</div><br></td>
<td><input placeholder="Rank C" name="expert_score_c" type="text" class="validate">
</td>
<td><input placeholder="Rank B" name="expert_score_b" type="text" class="validate">
</td>
<td><input placeholder="Rank A" name="expert_score_a" type="text" class="validate">
</td>
<td><input placeholder="Rank S" name="expert_score_s" type="text" class="validate">
</td>
<td><input placeholder="Rank C" name="expert_combo_c" type="text" class="validate">
</td>
<td><input placeholder="Rank B" name="expert_combo_b" type="text" class="validate">
</td>
<td><input placeholder="Rank A" name="expert_combo_a" type="text" class="validate">
</td>
<td><input placeholder="Rank S" name="expert_combo_s" type="text" class="validate">
</td>
          </tr>
                    <tr>
            <td>Expert (Random)</td>
            <td><input placeholder="random setting ID" name="random_setting_id" type="text" class="validate"></td>
            <td><div class="input-field col s12 m6">
<select class="browser-default" name="back_live">
      <option value="" disabled selected>Choose your option</option>
      <option value="1" >TODO</option>
      <option value="2" >TODO</option>
      <option value="3" >TODO</option>
      <option value="4" >TODO</option>
</select>
</div><br></td>
<td><input placeholder="Rank C" name="random_score_c" type="text" class="validate">
</td>
<td><input placeholder="Rank B" name="random_score_b" type="text" class="validate">
</td>
<td><input placeholder="Rank A" name="random_score_a" type="text" class="validate">
</td>
<td><input placeholder="Rank S" name="random_score_s" type="text" class="validate">
</td>
<td><input placeholder="Rank C" name="random_combo_c" type="text" class="validate">
</td>
<td><input placeholder="Rank B" name="random_combo_b" type="text" class="validate">
</td>
<td><input placeholder="Rank A" name="random_combo_a" type="text" class="validate">
</td>
<td><input placeholder="Rank S" name="random_combo_s" type="text" class="validate">
</td>
          </tr>
                    <tr>
            <td>Master</td>
            <td><input placeholder="master setting ID" name="master_setting_id" type="text" class="validate"></td>
            <td><div class="input-field col s12 m6">
<select class="browser-default" name="back_live">
      <option value="" disabled selected>Choose your option</option>
      <option value="1" >TODO</option>
      <option value="2" >TODO</option>
      <option value="3" >TODO</option>
      <option value="4" >TODO</option>
</select>
</div><br></td>
<td><input placeholder="Rank C" name="master_score_c" type="text" class="validate">
</td>
<td><input placeholder="Rank B" name="master_score_b" type="text" class="validate">
</td>
<td><input placeholder="Rank A" name="master_score_a" type="text" class="validate">
</td>
<td><input placeholder="Rank S" name="master_score_s" type="text" class="validate">
</td>
<td><input placeholder="Rank C" name="master_combo_c" type="text" class="validate">
</td>
<td><input placeholder="Rank B" name="master_combo_b" type="text" class="validate">
</td>
<td><input placeholder="Rank A" name="master_combo_a" type="text" class="validate">
</td>
<td><input placeholder="Rank S" name="master_combo_s" type="text" class="validate">
</td>
          </tr>
        </tbody>
      </table>
<!--Button-->
<div align="center">
<input type="submit"><a class="waves-effect waves-light btn">button</a></input>
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