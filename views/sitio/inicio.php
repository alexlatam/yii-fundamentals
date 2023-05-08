<?php 

// Path: views\sitio\inicio.php
// Incorpora el uso de la clase Html de Yii2, lo que agrega el layout de la página
use yii\helpers\Html; 
// Incorpora el uso de la clase ActiveForm de Yii2
// Permite el uso de los métodos de la clase ActiveForm[para formularios], como por ejemplo el método begin()
use yii\widgets\ActiveForm;

?>

HOLA Contenido de inicio.php!

<!-- Muestra el mensaje recibido desde el controlador -->
<?php 
if (isset($mensaje)) {
    echo Html::tag('div', HTML::encode($mensaje), ['class' => 'alert alert-success']);
}
 ?>

<?php  $formulario = ActiveForm::begin(); ?>

<!-- Agrega el campo valor_uno del modelo y crea un campo de formulario(input) -->
<?= $formulario->field($model, 'valor_uno') ?>

<!-- Agrega el campo valor_dos del modelo y crea un campo de formulario(input) -->
<?= $formulario->field($model, 'valor_dos') ?>

<!-- Agrega un botón de submit -->
<?= Html::submitButton('Enviar formulario', ['class' => 'btn btn-primary']) ?>

<?php
// Cierra el formulario
ActiveForm::end();
?>