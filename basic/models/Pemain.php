<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dota_player".
 *
 * @property int $Player_ID
 * @property string $Username
 * @property string $E-Mail
 * @property string $Medal
 */
class Pemain extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dota_player';
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
