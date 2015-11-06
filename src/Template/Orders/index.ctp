<h1>Conestoga Pizzeria Orders</h1>
<p><?= $this->Html->link('Add Order', ['action' => 'add']) ?></p>
<table>
    <h3>Current Orders</h3>
    <tr>
        <th>Id</th>
        <th>Status</th>
        <th>User ID</th>
        <th>Size</th>
        <th>Crust Type</th>
        <th>Toppings</th>
        <th>Created</th>
        <th>Action</th>
    </tr>

    <!-- Here is where we iterate through our $orders query object, printing out order info -->

    <?php foreach ($orders as $order): 
    if ($order->status == "Current") {?>
    <tr>
        <td>
            <?= $this->Html->link($order->id, ['action' => 'view', $order->id]) ?>
        </td>
        <td><?= $order->status ?></td>
        <td><?= $order->user_id ?></td>
        <td><?= $order->size ?></td>
        <td><?= $order->crust_type ?></td>
        <td><?= $order->toppings ?></td>
        <td>
            <?= $order->created->format(DATE_RFC850) ?>
        </td>
        <td>
            <?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $order->id],
                ['confirm' => 'Are you sure?'])
            ?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $order->id]) ?>
            <?= $this->Html->link('Move', ['action' => 'move', $order->id]) ?>
        </td>
    </tr>
    <?php } endforeach; ?>

</table>

<table>
    <h3>Past Orders</h3>
    <tr>
        <th>Id</th>
        <th>Status</th>
        <th>User ID</th>
        <th>Size</th>
        <th>Crust Type</th>
        <th>Toppings</th>
        <th>Created</th>
        <th>Action</th>
    </tr>

    <!-- Here is where we iterate through our $orders query object, printing out order info -->

    <?php foreach ($orders as $order): 
    if ($order->status == "Past") {?>
    <tr>
        <td>
            <?= $this->Html->link($order->id, ['action' => 'view', $order->id]) ?>
        </td>
        <td><?= $order->status ?></td>
        <td><?= $order->user_id ?></td>
        <td><?= $order->size ?></td>
        <td><?= $order->crust_type ?></td>
        <td><?= $order->toppings ?></td>
        <td>
            <?= $order->created->format(DATE_RFC850) ?>
        </td>
        <td>
            <?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $order->id],
                ['confirm' => 'Are you sure?'])
            ?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $order->id]) ?>
        </td>
    </tr>
    <?php } endforeach; ?>
    
</table>

