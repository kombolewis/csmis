<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "csmis.cs_required_document".
 *
 * @property int $document_id
 * @property string $document_name
 */
class CsRequiredDocument extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'csmis.cs_required_document';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['document_name'], 'required'],
            [['document_name'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'document_id' => 'Document ID',
            'document_name' => 'Document Name',
        ];
    }
}
