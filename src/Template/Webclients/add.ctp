<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Webclient $webclient
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Webclients'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="webclients form large-9 medium-8 columns content">
    <?= $this->Form->create($webclient) ?>
    <fieldset>
        <legend><?= __('Add Webclient') ?></legend>
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
