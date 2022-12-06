<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "personal".
 *
 * @property int $id_personal
 * @property string $nama_lengkap
 * @property string $nama_panggilan
 * @property string $jenis_kelamin
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $agama
 * @property string $pendidikan
 * @property string $alamat
 * @property string $no_hp
 * @property string $email
 *
 * @property Pegawai[] $pegawais
 */
class Personal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'personal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_lengkap', 'nama_panggilan', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'agama', 'pendidikan', 'alamat', 'no_hp', 'email'], 'required'],
            [['tanggal_lahir'], 'safe'],
            [['nama_lengkap', 'nama_panggilan', 'jenis_kelamin', 'tempat_lahir', 'agama', 'pendidikan', 'alamat', 'no_hp', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_personal' => 'Id Personal',
            'nama_lengkap' => 'Nama Lengkap',
            'nama_panggilan' => 'Nama Panggilan',
            'jenis_kelamin' => 'Jenis Kelamin',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'agama' => 'Agama',
            'pendidikan' => 'Pendidikan',
            'alamat' => 'Alamat',
            'no_hp' => 'No Hp',
            'email' => 'Email',
        ];
    }

    /**
     * Gets query for [[Pegawais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPegawais()
    {
        return $this->hasMany(Pegawai::class, ['id_personal' => 'id_personal']);
    }
}
