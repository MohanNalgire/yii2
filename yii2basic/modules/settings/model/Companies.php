<?php

namespace app\modules\settings\model;

use Yii;

/**
 * This is the model class for table "companies".
 *
 * @property integer $comp_id
 * @property string $company_name
 * @property string $com_address
 */
class Companies extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'companies';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['comp_id', 'company_name', 'com_address'], 'required'],
            [['comp_id'], 'integer'],
            [['company_name', 'com_address'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'comp_id' => 'Comp ID',
            'company_name' => 'Company Name',
            'com_address' => 'Com Address',
        ];
    }
}
