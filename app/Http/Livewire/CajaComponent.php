<?php

namespace App\Http\Livewire;

use App\Models\Caja;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class CajaComponent extends Component
{
    use LivewireAlert;

    public $caja, $monto, $caja_id, $date;

    public function render()
    {
        $carbon = new \Carbon\Carbon();
        $date = $carbon->now();
        $fechahoy = date_format($date, 'd/m/Y');

        $caja = Caja::select('id', 'monto')->whereDate('created_at', $date)->first();
        $this->caja_id = $caja->id;
        $this->monto_caja = $caja->monto;

        return view('livewire.caja-component', [
            'montocaja' => $this->monto_caja,
            'fechahoy' => $fechahoy,
        ]);
    }

    public function save()
    {
        $caja = Caja::where('id', $this->caja_id)->update(['monto' => $this->monto]);
        $this->alert('success', 'Caja actualizada');
    }
}
