<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "siswa".
 *
 * @property int $id
 * @property string $nama
 * @property string $alamat
 * @property int $id_kelas
 */
class Siswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'siswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'alamat', 'id_kelas', 'tanggal_masuk'], 'required'],
            [['id_kelas'], 'integer'],
            [['nama', 'alamat','gaji'], 'string', 'max' => 128],
            [['tanggal_masuk'], 'date','format'=>'yyyy-mm-dd'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'id_kelas' => 'Id Kelas',
            'tanggal_masuk' => 'Tanggal Masuk',
            'gaji' => 'Gaji',
        ];
    }

    public function getKelas()
    {
        return $this->hasOne(Kelas::className(), ['id' => 'id_kelas']);
    }

    public function getNamaKelas()
    {
        return $this->kelas->nama_kelas;
    }
}
