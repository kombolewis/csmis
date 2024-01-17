<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "csmis.cs_organisation".
 *
 * @property int $org_id
 * @property string $organisation
 */
class CsOrganisation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'csmis.cs_organisation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['organisation'], 'required'],
            [['organisation'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'org_id' => 'Org ID',
            'organisation' => 'Organisation',
        ];
    }
}
