<?php

namespace app\models;

use Yii;
use yii\base\Model;

class WorkerForm extends Model
{
    public $email;
    public $fullname;
    public $old;
    public $experience;
    public $photo_link;
    public $average_salary;



    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [[ 'email',  'fullname', 'old', 'experience', 'photo_link', 'average_salary'], 'required'],
            ['fullname', 'string', 'max' => 150],
            ['photo_link', 'string', 'max' => 50],
            ['email', 'email'],
            [['old'], 'integer', 'max' => 1000000000000],
        ];
    }
}
