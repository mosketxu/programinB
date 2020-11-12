        <div class="card-body py-1">
            <div class="row">
                <div class="col-3">{{$facturaciondetalle->concepto}}</div>
                <div class="col-1">{{$facturaciondetalle->unidades}}</div>
                <div class="col-1">{{$facturaciondetalle->coste}}</div>
                <div class="col-1">{{$facturaciondetalle->iva}}</div>
                <div class="col-1">{{$facturaciondetalle->unidades * $facturaciondetalle->coste * $facturaciondetalle->iva}}</div>
                <div class="col-1">{{$facturaciondetalle->unidades * $facturaciondetalle->coste *  (1+ $facturaciondetalle->iva) }}</div>
                <div class="col-1">{{$facturaciondetalle->subcuenta}}</div>
                <div class="col-1">{{$facturaciondetalle->suplido}}</div>
                <div class="col-1">{{$facturaciondetalle->pagadopor==='1' ? 'Marta' : 'Susana'}}</div>
            </div>
        </div>


