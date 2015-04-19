<?php
  include('../src/Character.php');

  $gc = new Character();
  $gc2 = new Character();


?>
<pre>
  <?php
    var_dump($gc->stats->str->mod);
    //var_dump($gc2);
  ?>
</pre>