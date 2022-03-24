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
        if ($caja) {
            $this->caja_id = $caja->id;
            $this->monto_caja = $caja->monto;
        } else {
            $this->caja_id = null;
            $this->monto_caja = null;
        }

        return view('livewire.caja-component', [
            'montocaja' => $this->monto_caja,
            'fechahoy' => $fechahoy,
        ]);
    }

    public function save()
    {
        $caja = Caja::where('id', $this->caja_id);

        if (!is_null($caja->first())) {
            $caja->update([
                'monto' => $this->monto,
            ]);
        } else {
            Caja::create([
                'monto' => $this->monto,
                'user_id' => auth()->user()->id,
            ]);
        }

        $this->reset('monto');

        $this->alert('success', 'Caja actualizada');
    }
}
