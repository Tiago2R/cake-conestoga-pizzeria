<h1>Order Moved<h1>
<p>User ID: <?= h($orders->user_id) ?></p>
<p>Size: <?= h($orders->size) ?></p>
<p>Crust Type: <?= h($orders->crust_type) ?></p>
<p>Toppings: <?= h($orders->toppings) ?></p>
<p>Date: <?= $orders->created->format(DATE_RFC850) ?></p>