<?php

namespace app\models;

/**
 * This is the model class for table "units".
 *
 * @property string $id
 * @property string $name
 * @property string $japanese_name
 * @property string $icon
 * @property string $link_seesaw
 * @property string $link_gc
 * @property string $rarity
 * @property string $gender
 * @property integer $dmm
 * @property integer $nutaku
 * @property integer $special_cg
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Cg[] $cgs
 * @property TagUnit[] $tagUnits
 */
class Unit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'units';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'japanese_name', 'icon', 'rarity', 'gender', 'dmm', 'nutaku', 'special_cg'], 'required'],
            [['rarity', 'gender'], 'string'],
            [['dmm', 'nutaku', 'special_cg'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 25],
            [['japanese_name'], 'string', 'max' => 45],
            [['icon'], 'string', 'max' => 255],
            [['link_seesaw', 'link_gc'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'japanese_name' => 'Japanese Name',
            'icon' => 'Icon',
            'link_seesaw' => 'Link Seesaw',
            'link_gc' => 'Link Gc',
            'rarity' => 'Rarity',
            'gender' => 'Gender',
            'dmm' => 'Dmm',
            'nutaku' => 'Nutaku',
            'special_cg' => 'Special Cg',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCgs()
    {
        return $this->hasMany(Cg::className(), ['unit_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTagUnits()
    {
        return $this->hasMany(TagUnit::className(), ['unit_id' => 'id']);
    }
}
