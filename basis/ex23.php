<?php $names = ['Robert', 'Adam', 'Magda']; ?>

<?php if (!$names): ?>
  <b>Pusta lista</b>
<?php else: ?>
  <ul>
  <?php foreach ($names as $name):?>
    <li><?= $name ?></li> 
  <?php endforeach; ?>
  </ul>
<?php endif; ?>
