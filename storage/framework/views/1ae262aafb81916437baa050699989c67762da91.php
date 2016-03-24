<?php foreach($cmds as $c): ?>
<ul>ID : <?php echo e($c->id); ?></ul>
<li>ID Du Client : <?php echo e($c->id_client); ?></li>
<li>code_type : <?php echo e($c->code_type); ?></li>
<li>Dossier: <?php echo e($c->dossier); ?></li>
<?php endforeach; ?>