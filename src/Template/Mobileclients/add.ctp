<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mobileclient $mobileclient
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Mobileclients'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mobileclients form large-9 medium-8 columns content">
    <?= $this->Form->create($mobileclient) ?>
    <fieldset>
        <legend><?= __('Add Mobileclient') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('endpoint');
            echo $this->Form->control('p256dh');
            echo $this->Form->control('auth');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
