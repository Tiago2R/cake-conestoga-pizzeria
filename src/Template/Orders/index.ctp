<h1>Conestoga Pizzeria Orders</h1>
<table>
    <tr>
        <th>Id</th>
        <th>User ID</th>
        <th>Size</th>
        <th>Crust Type</th>
        <th>Toppings</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we iterate through our $orders query object, printing out order info -->

    <?php foreach ($orders as $orders): ?>
    <tr>
        <td>
            <?= $this->Html->link($orders->id, ['action' => 'view', $orders->id]) ?>
        </td>
        <td><?= $orders->user_id ?></td>
        <td><?= $orders->size ?></td>
        <td><?= $orders->crust_type ?></td>
        <td><?= $orders->toppings ?></td>
        <td>
            <?= $orders->created->format(DATE_RFC850) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>