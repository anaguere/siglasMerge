    <select name="prestamo_archivo[solicitante][funcionario_id]" id="archivo_solicitante_funcionario_id">
      <?php foreach ($funcionarios as $funcionario) { ?>
      <option value="<?php echo $funcionario->getId()?>" <?php if($funcionario->getId() == $funcionario_selected) echo "selected"; ?>>
            <?php echo $funcionario->getCtnombre(); ?> /
            <?php echo $funcionario->getPrimer_nombre(); ?>
            <?php echo $funcionario->getSegundo_nombre(); ?>,
            <?php echo $funcionario->getPrimer_apellido(); ?>
            <?php echo $funcionario->getSegundo_apellido(); ?>
      </option>
      <?php } ?>
    </select>
    <div class='partial_new_view partial'><a href="#" onclick="javascript: fn_agregar(); return false;">Guardar y agregar otro</a></div>