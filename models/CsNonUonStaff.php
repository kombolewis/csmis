<?php

namespace app\models;

use Yii;
use yii\db\ActiveQuery;

/**
 * This is the model class for table "csmis.cs_non_uon_staff".
 *
 * @property int $non_uon_staffid
 * @property string $surname
 * @property string $other_names
 * @property string|null $email
 * @property int $org_id
 */
class CsNonUonStaff extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'csmis.cs_non_uon_staff';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['surname', 'other_names', 'org_id'], 'required'],
            [['org_id'], 'default', 'value' => null],
            [['org_id'], 'integer'],
            [['surname', 'other_names'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 25],
            [['org_id'], 'exist', 'skipOnError' => true, 'targetClass' => CsOrganisation::class, 'targetAttribute' => ['org_id' => 'org_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'non_uon_staffid' => 'Non Uon Staffid',
            'surname' => 'Surname',
            'other_names' => 'Other Names',
            'email' => 'Email',
            'org_id' => 'Org ID',
        ];
    }



    /**
     * Get CsOrganisation Table
     *
     * @return ActiveQuery
     */
    public function getOrganisation() :ActiveQuery
    {
        return $this->hasMany(CsOrganisation::class, ['org_id' => 'org_id']);
    }
}
