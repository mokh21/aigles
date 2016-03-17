<?php echo Form::model($produit, ['method' => 'PATCH', 'action' => ['ProduitsController@update', $produit->id]]); ?>


<html> Prix </html>
<?php echo Form::number('prix');; ?>

<html> <br><br> </html>

<html> Surface </html>
<?php echo Form::number('surface');; ?>

<html> <br><br> </html>

<html> Type </html>
<?php echo Form::text('type');; ?>

<html> <br><br> </html>

<html> Localité </html>
<?php echo Form::text('localite');; ?>

<html> <br><br> </html>

<html> Description </html>
<?php echo Form::text('description');; ?>

<html> <br><br> </html>

<html> Code du Produit </html>
<?php echo Form::text('code_p');; ?>

<html> <br><br> </html>

<html> Url De L'image </html>
<?php echo Form::text('image');; ?>

<html> <br><br> </html>

<html> Url Du Visite Virtuelle </html>
<?php echo Form::text('visite_virtuelle');; ?>

<html> <br><br> </html>

<?php echo Form::submit('modifier');; ?>



<?php echo Form::close(); ?>


<?php if($errors->any()): ?>
<ul class="alert alert-danger">
<?php foreach($errors->all() as $error): ?>
<li> <?php echo e($error); ?> </li>
<?php endforeach; ?>
</ul>
<?php endif; ?>