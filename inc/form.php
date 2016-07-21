
   
   <form method="POST" action="<?= $form->encode($_SERVER['PHP_SELF']) ?>">
    
    <table>
    <?php if ($errors) { ?>
        <tr>
            <td>You need to correct the following errors:</td>
            <td><ul>
                <?php foreach ($errors as $error) { ?>
                    <li><?= $form->encode($error) ?></li>
                <?php } ?>
            </ul></td>
    <?php }  ?>

    <tr>
        <td>Name:</td>
        <td><?= $form->input('text', ['name' => 'name']) ?></td>
    </tr>
    <tr>
        <td>Type:</td>
        <td><?= $form->input('text', ['name' => 'type']) ?></td>
    </tr>

    <tr>
        <tr>
        <td>CP:</td>
        <td><?= $form->input('text', ['name' => 'cp']) ?></td>
    </tr>

    <tr><td colspan="2" align="center">
        <?= $form->input('submit',['name' => 'save','value' => 'Update Pokedex']) ?>
    </td></tr>

</table>
</form>

