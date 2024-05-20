<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    @foreach ($coords as $coord)
        <div>
            <p> {{$coord->nombre_beneficiario}} </p>
        </div>
    @endforeach
</div>
