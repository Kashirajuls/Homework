 <?php
 require_once 'core/init.php';
 include "header.php"; 
 include "menu.php";
 $userInsert = DB::getInstance()->update('users', 3, array(
  'password' => 'newpassword',
  'name' => 'Dale Barrett'

  ));
?>

<p class="title">Registration</p>
<div class="reg">
<form action="Handle.php" method="post"><br>
  <label for="name">Your Name</label><br>
  <input id="name" name="name" type="text" /><br>
  <label for="email">Your Email</label><br>
  <input id="email" name="email" type="text" /><br>
      <label for="comment">Title & Text</label><br>
      <input id="email" name="email" type="text" />
      <textarea id="comment" name="comment" rows="4" cols="50">
      </textarea>
      <br><br>
  <button id="submit" name="submit" type="submit">Send Email</button>
</form>
</div>
 
<script>
$( document.body ).click(function () {
  if ($("div:first").is(":hidden" ))
  {
    $( "div" ).slideDown( "slow" );
  }
  else {$( "div" ).stop()}
});
</script>

<?php
include "footer.php";                 // (3) Include the footer
?>