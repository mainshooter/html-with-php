<form method="post">
  <div>Thing to type</div>
  <input type="text" name="thing" value="">
  <br>
  <input type="submit" name="go" value="Do!">
</form>

<?php
function checkInput($data) {
  // This funcion checks the input
  $data = htmlspecialchars($data);

  return ($data);
}
  if (ISSET($_POST['thing'])) {
    echo checkInput($_POST['thing']);

  }

?>
