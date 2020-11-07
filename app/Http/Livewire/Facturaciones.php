<?php

namespace App\Http\Livewire;

use App\{Facturacion,Empresa};
use Livewire\Component;
use Livewire\WithPagination;

class Facturaciones extends Component
{

    // public $facturaciones;
    public $filtroEmpresa;
    public $filtroAnyo;
    public $filtroMes;
    public $empresas;
    public $filtroConta;

    use WithPagination;

    protected $paginationTheme= 'bootstrap';

    public function mount()
    {
        // $this->facturaciones=Facturacion::all();
        $this->filtroEmpresa='';
        $this->filtroAnyo='2020';
        $this->filtroMes='';
        $this->filtroConta='';
        // $this->empresas=Empresa::all();

    }

    public function render()
    {
        $facturaciones=Facturacion::with('empresa')->with('condpago')
            ->when($this->filtroAnyo != '',function ($query){
                $query->whereYear('fechafactura',$this->filtroAnyo);
                })
            ->when($this->filtroMes != '' ,function ($query){
                $query->whereMonth('fechafactura',$this->filtroMes);
                })
            ->where('contabilizado',$this->filtroConta)
            ->when($this->filtroEmpresa !='', function($query){
                $query->whereHas('empresa',function($query2){
                    $query2->where('empresa','like','%'.$this->filtroEmpresa.'%');
                });
            })
            ->paginate();
        // ->when($this->searchCategory != '',function ($query){
        //     $query->where('category_id','like',$this->searchCategory);
        // })
        // ->paginate(10);

        // dd($facturaciones);


//         $q->whereDay('created_at', '=', date('d'));
// $q->whereMonth('created_at', '=', date('m'));
// $q->whereYear('created_at', '=', date('Y'));

        return view('livewire.facturaciones',[
            'facturaciones'=>$facturaciones
        ]);
    }

    public function updatingFiltroEmpresa()
    {
        $this->resetPage();
    }
    public function updatingFiltroAnyo()
    {
        $this->resetPage();
    }
    public function updatingFiltroMes()
    {
        $this->resetPage();
    }


}
