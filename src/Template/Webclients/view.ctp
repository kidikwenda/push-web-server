<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Webclient $webclient
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Webclient'), ['action' => 'edit', $webclient->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Webclient'), ['action' => 'delete', $webclient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $webclient->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Webclients'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Webclient'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="webclients view large-9 medium-8 columns content">
    <h3><?= h($webclient->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($webclient->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($webclient->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Endpoint') ?></h4>
        <?= $this->Text->autoParagraph(h($webclient->endpoint)); ?>
    </div>
    <div class="row">
        <h4><?= __('P256dh') ?></h4>
        <?= $this->Text->autoParagraph(h($webclient->p256dh)); ?>
    </div>
    <div class="row">
        <h4><?= __('Auth') ?></h4>
        <?= $this->Text->autoParagraph(h($webclient->auth)); ?>
    </div>
</div>
