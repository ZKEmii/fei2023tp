<?php

namespace app\modules\apiv1\models;



class Reservaaula extends \app\models\Reservaaula
{
    public function fields(){
        return ['id','id_aula','fh_desde','fh_hasta','observacion'];
    }
}