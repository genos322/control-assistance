<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TPayments extends Model
{
	protected $table='tpayments';
	protected $primaryKey='idPayment';
	protected $keyType='string';
	public $incrementing=false;
	public $timestamps=true;

    public function tEvents()
    {
        return $this->belongsTo('App\Model\TEvents', 'idEvent');
    }

    public function tParticipants()
    {
        return $this->belongsTo('App\Model\TParticipants', 'idParticipant');
    }
}
?>