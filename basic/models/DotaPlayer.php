<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Dota_Player".
 *
 * @property int $Player_ID
 * @property string $Username
 * @property string $E-Mail
 * @property string $Medal
 */
class DotaPlayer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Dota_Player';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Player_ID', 'Username', 'E-Mail', 'Medal'], 'required'],
            [['Player_ID'], 'integer'],
            [['Username', 'Medal'], 'string', 'max' => 20],
            [['E-Mail'], 'string', 'max' => 25],
            [['Player_ID'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Player_ID' => 'Player  ID',
            'Username' => 'Username',
            'E-Mail' => 'E  Mail',
            'Medal' => 'Medal',
        ];
    }
}
