<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "noticias".
 *
 * @property integer $id
 * @property string $titulo
 * @property string $corpo
 * @property integer $status_noticia
 */
class Noticia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'noticias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status_noticia'], 'integer'],
            [['titulo', 'corpo'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'corpo' => 'Corpo',
            'status_noticia' => 'Status Noticia',
        ];
    }

    public function fields()
    {
        return[
          'id',
          'title'=>'titulo',
          'status'=>function( Noticia $model){
              return ($model->status_noticia === 1) ? 'Ativo' : 'Inativo';
          }
        ];
    }
}
