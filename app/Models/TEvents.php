<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TEvents extends Model
{
	protected $table='tevents';
	protected $primaryKey='idEvent';
	protected $keyType='string';
	public $incrementing=false;
	public $timestamps=true;
    
    public function tparticipants()
    {
        return $this->belongsTo('App\Model\TParticipants', 'idEvent');
    }
}
?>