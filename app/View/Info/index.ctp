
<?php foreach($infos as $info): ?>
  <p>
  <?php 
    echo $info['Info']['id'];
  ?>
</p>
<?php endforeach; ?>
<?php unset($info); ?>