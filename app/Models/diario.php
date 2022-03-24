<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Diario
 *
 * @property int $id
 * @property string $producto
 * @property float $cantidad
 * @property float $monto
 * @property string $tipo_pago
 * @property int $tipo_venta
 * @property int|null $venta_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property int|null $user_id
 *
 * @property User|null $user
 * @property Venta|null $venta
 *
 * @package App\Models
 */
class Diario extends Model
{
	use SoftDeletes;
	protected $table = 'diarios';

	protected $casts = [
		'cantidad' => 'float',
		'monto' => 'float',
		'tipo_venta' => 'int',
		'venta_id' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'producto',
		'cantidad',
		'monto',
		'tipo_pago',
		'tipo_venta',
		'venta_id',
		'user_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function venta()
	{
		return $this->belongsTo(Venta::class);
	}
}
