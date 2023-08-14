<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TParticipants extends Model
{
	protected $table='tparticipants';
	protected $primaryKey='idParticipant';
	protected $keyType='string';
	public $incrementing=false;
	public $timestamps=true;

    public function tEvents()
    {
        return $this->belongsTo(TEvents::class, 'idEvent');
    }

    public function tPayments()
    {
        return $this->belongsTo(TPayments::class, 'idParticipant');
    }

}
?>