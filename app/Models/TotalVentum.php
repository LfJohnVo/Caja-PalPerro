<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TotalVentum
 *
 * @property int $id
 * @property string $total_venta
 * @property int|null $venta_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @property Venta|null $venta
 *
 * @package App\Models
 */
class TotalVentum extends Model
{
	use SoftDeletes;
	protected $table = 'total_venta';

	protected $casts = [
		'venta_id' => 'int'
	];

	protected $fillable = [
		'total_venta',
		'venta_id'
	];

	public function venta()
	{
		return $this->belongsTo(Venta::class);
	}
}
