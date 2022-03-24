<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Venta
 *
 * @property int $id
 * @property string $folio
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property int|null $user_id
 *
 * @property User|null $user
 * @property Collection|Diario[] $diarios
 * @property Collection|TotalVentum[] $total_venta
 *
 * @package App\Models
 */
class Venta extends Model
{
	use SoftDeletes;
	protected $table = 'ventas';

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'folio',
		'user_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function diarios()
	{
		return $this->hasMany(Diario::class);
	}

	public function total_venta()
	{
		return $this->hasMany(TotalVentum::class);
	}
}
