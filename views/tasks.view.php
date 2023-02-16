
<?php require('partials/head.php')?>

<h1>Kõik ülesanded</h1>
<h2>Sisesta ülesanne</h2>
<form method="POST" action="/task">
    <input name="description" type="text">
    <input type="submit" value="Salvesta">
</form>
    
    <h3>Minu ülesanded</h3>

    <ul>
       <?php foreach ($tasks as $task): ?>
            <li>
                <?php if ($task->is_complete ): ?>
                    <strike>    
                <?php endif; ?>    

                <?= $task->description; ?>
                
                <?php if ($task->is_complete ): ?>
                    </strike>
                <?php endif; ?> 
            </li>
        <?php endforeach; ?>
    </ul>

<h3>Submit</h3>
<form method="POST" action="/names">
    <input name="name" type="text">
    <button type="submit">Submit</button>
</form>




<?php require('partials/footer.php')?>