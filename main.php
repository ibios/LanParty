<?php
 include_once "header_footer.php";

function main_html()
{
  html_header();
  
?>

<div class="col-xs-3">
  <div class="form-group">

<?php
    foreach (get_tournament_info()[0]->tournament as $key => $value) {
      // relevant: name, id, description, tournament_type, state, participants_count, teams,game_name, full_challonge_url
      if($key == "name") echo "$key: <input class='form-control' disabled value='$value'>";
      if($key == "id")echo "$key: <input class='form-control' disabled value='$value'>";
      if($key == "description")
      {
        $value = str_replace("<p>", "", $value);
        $value = str_replace("</p>", "", $value);
        echo "$key: <input class='form-control' disabled value='$value'>";
      }
      if($key == "tournament_type") echo "$key: <input class='form-control' disabled value='$value'>";
      if($key == "state") echo "$key: <input class='form-control' disabled value='$value'>";
      if($key == "participants_count") echo "$key: <input class='form-control' disabled value='$value'>";
      if($key == "teams") echo "$key: <input class='form-control' disabled value='$value'>";
      if($key == "game_name") echo "$key: <input class='form-control' disabled value='$value'>";
      if($key == "full_challonge_url") echo "$key: <input class='form-control' disabled value='$value'>";
    }
    ?>
  </div>
</div>
<?php
  html_footer();
}