<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Caja
 *
 * @property int $id
 * @property float $monto
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property int|null $user_id
 *
 * @property User|null $user
 *
 * @package App\Models
 */
class Caja extends Model
{
	use SoftDeletes;
	protected $table = 'caja';

	protected $casts = [
		'monto' => 'float',
		'user_id' => 'int'
	];

	protected $fillable = [
		'monto',
		'user_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
