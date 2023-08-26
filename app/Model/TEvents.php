<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TEvents extends Model
{
	protected $table='tevents';
	protected $primaryKey='idEvent';
	protected $keyType='string';
	public $incrementing=false;
	public $timestamps=true;
    
    public function tparticipants():HasMany
    {
        return $this->HasMany(TParticipants::class, 'idEvent');
    }
}
?>