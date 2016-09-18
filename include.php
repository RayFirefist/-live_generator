<?php
include('var_check.php'); //Variable check. If something null it returns an error and deny the elaboration of SQL code
include('live_song_m.php'); // Song name, title and sound assets directory
include('live_setting_m.php'); // Setting ID, Attribute, Rank (C -> S) for Score and Combo, Background assets
include('live_difficulty_id.php'); // live_difficulty_id and Clear (C -> S)
include('live_goal_m.php'); // Goal for Rank from live (like Score S = 1 Loveca)
?>