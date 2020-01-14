<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mobileclient $mobileclient
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mobileclient'), ['action' => 'edit', $mobileclient->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mobileclient'), ['action' => 'delete', $mobileclient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mobileclient->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mobileclients'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mobileclient'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mobileclients view large-9 medium-8 columns content">
    <h3><?= h($mobileclient->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mobileclient->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($mobileclient->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Endpoint') ?></h4>
        <?= $this->Text->autoParagraph(h($mobileclient->endpoint)); ?>
    </div>
    <div class="row">
        <h4><?= __('P256dh') ?></h4>
        <?= $this->Text->autoParagraph(h($mobileclient->p256dh)); ?>
    </div>
    <div class="row">
        <h4><?= __('Auth') ?></h4>
        <?= $this->Text->autoParagraph(h($mobileclient->auth)); ?>
    </div>
</div>
