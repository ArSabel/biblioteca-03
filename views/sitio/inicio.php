<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/*inicio del formulario*/

?>


Hola querido usuario, bienvenido a mi sitio de prueba.
<br/>
Crud.
<br/>
<?php  $formulario=ActiveForm::begin(); ?>
<br/>
<?= $formulario->field($model,'valora'); ?>
<?= $formulario->field($model,'valorb'); ?>

<div class="form-group">

    <?= Html::submitButton('Enviar',['class'=>'btn btn-primary'])?>

    
  
</div>

<?php ActiveForm::end(); ?>
<?php 
if($mensaje){
    echo Html::tag('div', Html::encode($mensaje),['class'=>'alert alert-danger']);
}
?>