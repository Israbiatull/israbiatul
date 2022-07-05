<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "karyawan".
 *
 * @property string $NIK
 * @property string $Nama
 * @property string $Alamat
 * @property string $tglLahir
 */
class Karyawan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'karyawan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NIK', 'Nama', 'Alamat', 'tglLahir'], 'required'],
            [['tglLahir'], 'safe'],
            [['NIK'], 'string', 'max' => 5],
            [['Nama', 'Alamat'], 'string', 'max' => 20],
            [['NIK'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'NIK' => 'Nik',
            'Nama' => 'Nama',
            'Alamat' => 'Alamat',
            'tglLahir' => 'Tgl Lahir',
        ];
    }
}
