

<div class="max-w-2xl bg-white rounded shadow p-6">
    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="grid grid-cols-2 gap-4 mb-4">
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">Código</label>
                <input type="text" name="codigo" value="" class="w-full border rounded px-3 py-2" required>
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">Nombre</label>
                <input type="text" name="nombre" value="" class="w-full border rounded px-3 py-2" required>
            </div>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-semibold text-gray-700 mb-1">Descripción</label>
            <textarea name="descripcion" rows="3" class="w-full border rounded px-3 py-2"></textarea>
        </div>

        <div class="flex gap-3">
            <a href="{{ route('inventario') }}" class="flex-1 bg-gray-200 text-gray-700 py-2 rounded text-center">Cancelar</a>
            <button type="submit" class="flex-1 bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Actualizar</button>
        </div>
    </form>
</div>