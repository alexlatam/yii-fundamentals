<?php 

namespace app\models;

use yii\base\Model;


class FormularioForm extends Model
{

    public $valor_uno;
    public $valor_dos;

    // Reglas de validación de los campos del formulario
    // en este caso de las propiedades valor_uno y valor_dos
    public function rules(): array
    {
        return [
            [['valor_uno', 'valor_dos'], 'required'],
            [['valor_uno', 'valor_dos'], 'integer'],
            // [['valor_uno', 'valor_dos'], 'compare', 'compareAttribute' => 'valor_dos', 'operator' => '!=', 'type' => 'number', 'message' => 'Los valores deben ser diferentes'],
            // [['valor_uno', 'valor_dos'], 'compare', 'compareAttribute' => 'valor_dos', 'operator' => '>', 'type' => 'number', 'message' => 'El valor uno debe ser menor que el valor dos'],
        ];
    }

}