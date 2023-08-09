<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TUsers extends Model
{
	protected $table='tusers';
	protected $primaryKey='idUser';
	protected $keyType='string';
	public $incrementing=false;
	public $timestamps=true;
}
?>