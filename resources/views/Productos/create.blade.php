@vite('resources/css/app.css')
<div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
    @include("navBar")
    <div class="mx-auto max-w-lg text-center">
        <h1 class="text-2xl font-bold sm:text-3xl">Creacion de Producto</h1>
    </div>
    <form action="{{url('/productos')}}" method="post" class="mx-auto mb-0 mt-8 max-w-md space-y-4">
        @csrf
        <div>
            <label for="email" class="sr-only">Nombre de la Tienda</label>

            <div class="relative">
                <input type="text" name="nombre" id="nombre" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm" placeholder="nombre" />
            </div>
        </div>
        <div>
            <label for="password" class="sr-only">Fecha de Apertura</label>

            <div class="relative">
                <input type="date" name="fecha_apertura" id="fecha_apertura" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm" />
            </div>
        </div>
        <div class="flex items-center justify-between">
            <input type="submit" value="Enviar" class="inline-block rounded-lg bg-blue-500 px-5 py-3 text-sm font-medium text-white">
        </div>
    </form>
</div>