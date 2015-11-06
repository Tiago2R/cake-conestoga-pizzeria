<div class="users form">
<?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?= $this->Form->input('username') ?>
        <?= $this->Form->input('password') ?>
        <?= $this->Form->input('role', [
            'options' => ['admin' => 'Admin', 'customer' => 'Customer']
        ]) ?>
        <?= $this->Form->input('name') ?>
        <?= $this->Form->input('address') ?>
        <?= $this->Form->input('postal_code') ?>
        <?= $this->Form->input('city') ?>
        <?= $this->Form->input('province') ?>
        <?= $this->Form->input('telephone') ?>
        <?= $this->Form->input('email') ?>
   </fieldset>
<?= $this->Form->button(__('Submit')); ?>
<?= $this->Form->end() ?>
</div>