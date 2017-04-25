<?php
/**
 * Created by PhpStorm.
 * User: Jafar
 * Date: 24/04/2017
 * Time: 9:10
 */
?>

<h2><?php echo $title; ?></h2>

<?php foreach ($persons as $person_item): ?>

    <h3><?php echo $person_item['id']; ?></h3>
    <div class="main">
        <?php echo $person_item['name']; ?>
    </div>

<?php endforeach; ?>
