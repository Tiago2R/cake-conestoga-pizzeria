<h1>Conestoga Pizzeria Orders</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Postal Code</th>
        <th>City</th>
        <th>Province</th>
        <th>Telephone</th>
        <th>Email</th>
    </tr>

    <!-- Here is where we iterate through our $users query object, printing out user info -->

    <?php foreach ($users as $users): ?>
    <tr>
        <td><?= $users->id ?></td>
        <td>
            <?= $this->Html->link($users->name, ['action' => 'view', $users->id]) ?>
        </td>
        <td><?= $users->address ?></td>
        <td><?= $users->postal_code ?></td>
        <td><?= $users->city ?></td>
        <td><?= $users->province ?></td>
        <td><?= $users->telephone ?></td>
        <td><?= $users->email ?></td>
    </tr>
    <?php endforeach; ?>
</table>