<h1>Edit Order</h1>
<?php
    echo $this->Form->create($order);
    //echo $this->Form->input('user_id');
    echo $this->Form->input('size');
    echo $this->Form->input('crust_type');
    echo $this->Form->input('toppings');
    echo $this->Form->button(__('Save Order'));
    echo $this->Form->end();
?>