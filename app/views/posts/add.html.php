<?php
/**
 * Created by JetBrains PhpStorm.
 * User: matteo
 * Date: 20/01/12
 * Time: 14.00
 *
 * Just for fun...
 */
 
?>

<?php if ($success): ?>
    <p>Post Successfully Saved</p>
<?php endif; ?>

<?=$this->form->create(); ?>
    <?=$this->form->field('title');?>
    <?=$this->form->field('body', array('type' => 'textarea'));?>
    <?=$this->form->submit('Add Post'); ?>
<?=$this->form->end(); ?>