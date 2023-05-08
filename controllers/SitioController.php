<?php

namespace app\controllers;

use app\models\EntryForm;
use app\models\FormularioForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

class SitioController extends Controller
{

    public function actionSay($message = 'Hola desde el controlador')
    {
        return $this->render('say', ['message' => $message]);
    }


    public function actionEntry()
    {
        $model = new EntryForm;

        // Al enviar el modelo del formulario, se valida y se muestra el resultado
        // Se valida si el modelo ha sido enviado la data via POST y si es válido[haciendo match con las reglas indicadas en el modelo]
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // validar los datos recibidos en el modelo

            // aquí haz algo significativo con el modelo ...

            return $this->render('entry-confirm', ['model' => $model]);
        } 
            // la página es mostrada inicialmente o hay algún error de validación
            return $this->render('entry', ['model' => $model]);
        
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionInicio()
    {
        $model = new FormularioForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // validar los datos recibidos en el modelo
            $message = 'Los datos han sido recibidos correctamente. El resultado es: ' . ($model->valor_uno + $model->valor_dos);

            // aquí haz algo significativo con el modelo ...

            return $this->render('inicio', ['mensaje' => $message, 'model' => $model]);
        } 

        // Al enviar el modelo del formulario, se valida y se muestra el resultado
        return $this->render('inicio', ['model' => $model]);
    }
}
