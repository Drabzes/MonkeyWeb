<?php
/**
 * Created by PhpStorm.
 * User: Jafar
 * Date: 24/04/2017
 * Time: 10:50
 */
?>


<?php foreach ($person as $person_item): ?>


    <form id="registerDate" method="post" action="data_submitted">
    <div class="main">
        <input type="text" name="u_id" value="<?php echo $person_item['id']; ?> " readonly> <br>
        <input type="text" name="u_name" value="<?php echo $person_item['name']; ?>">
    </div>
    <button type=submit> Update Database </button>
    </form>

<?php endforeach; ?>