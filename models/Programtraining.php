<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "programtraining".
 *
 * @property string $IdTra
 * @property string $NamaTraining
 * @property string $Budget_Rupiah
 */
class Programtraining extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'programtraining';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IdTra', 'NamaTraining', 'Budget_Rupiah'], 'required'],
            [['IdTra', 'NamaTraining', 'Budget_Rupiah'], 'string', 'max' => 20],
            [['IdTra'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdTra' => 'Id Tra',
            'NamaTraining' => 'Nama Training',
            'Budget_Rupiah' => 'Budget Rupiah',
        ];
    }
}
