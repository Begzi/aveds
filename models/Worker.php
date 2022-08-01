<?php


namespace app\models;


use yii\db\ActiveRecord;

class Worker extends ActiveRecord
{
    public static function tableName()
    {   
        return 'worker';
    }
    
}