<?php

namespace app\modules\apiv1\models;



class Horariomateria extends \app\models\Horariomateria
{
    public function fields(){
        return ['id','id_materia','id_reserva','fh_desde','fh_hasta'];
    }
}