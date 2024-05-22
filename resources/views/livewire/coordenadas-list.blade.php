<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    @foreach ($coords as $coord)
        <div class="p-4 mb-4 border rounded-lg 
            @if ($coord->cortado == 0)
                border-green-500 bg-green-50
            @else
                border-red-500 bg-red-50
            @endif">
            <p class="text-lg font-semibold 
                @if ($coord->cortado == 0)
                    text-green-700
                @else
                    text-red-700
                @endif">
                Nombre del Beneficiario: {{$coord->nombre_beneficiario}}
            </p>
            <p class="text-sm 
                @if ($coord->cortado == 0)
                    text-green-700
                @else
                    text-red-700
                @endif">
                Código Unidad Vecinal: {{$coord->codigo_unidad_vecinal}}
            </p>
            <p class="text-sm 
                @if ($coord->cortado == 0)
                    text-green-700
                @else
                    text-red-700
                @endif">
                Cantidad de Facturas: {{$coord->cantidad_facturas}}
            </p>
            <p class="text-sm 
                @if ($coord->cortado == 0)
                    text-green-700
                @else
                    text-red-700
                @endif">
                UMZ: {{$coord->UMZ}}
            </p>
            <p class="text-sm 
                @if ($coord->cortado == 0)
                    text-green-700
                @else
                    text-red-700
                @endif">
                Código de Factura: {{$coord->codigo_factura}}
            </p>
            <p class="text-sm 
                @if ($coord->cortado == 0)
                    text-green-700
                @else
                    text-red-700
                @endif">
                Importe de la Factura: {{$coord->importe_factura}}
            </p>
        </div>
    @endforeach
</div>
