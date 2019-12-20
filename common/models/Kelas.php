<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kelas".
 *
 * @property int $id
 * @property string $nama_kelas
 */
class Kelas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kelas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_kelas'], 'required'],
            [['nama_kelas'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_kelas' => 'Nama Kelas',
        ];
    }

    public function getSiswa()
    {
        return $this->hasMany(Siswa::className(), ['id_kelas' => 'id']);
    }
    public function getSiswaCount()
    {
        return $this->getSiswa()->count();
    }
}
