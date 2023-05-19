@vite('resources/css/app.css')
<div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
    @include("navBar")
    <div class="mx-auto max-w-lg text-center">
        <h1 class="text-2xl font-bold sm:text-3xl">Creación de Producto</h1>
    </div>
    <form action="{{url('/productos')}}" method="post" enctype="multipart/form-data" class="mx-auto mb-0 mt-8 max-w-md space-y-4">
        @csrf
        <div>
            <label for="email" class="sr-only">Nombre</label>

            <div class="relative">
                <input type="text" name="nombre" id="nombre" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm" placeholder="Nombre" />
            </div>
        </div>
        <div>
            <label for="password" class="sr-only">Código de Referencía</label>

            <div class="relative">
                <input type="text" name="sku" id="sku" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm" placeholder="Código de Referencia" />
            </div>
        </div>
        <div>
            <label for="password" class="sr-only">Descripción</label>

            <div class="relative">
                <input type="text" name="descripcion" id="descripcion" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm" placeholder="Descripción" />
            </div>
        </div>
        <div>
            <label for="password" class="sr-only">valor</label>

            <div class="relative">
                <input type="number" name="valor" id="valor" class="w-full rounded-lg border-gray-200 py-4 pr-2 pl-4 pe-12 text-sm shadow-sm" placeholder="Valor" />
            </div>
        </div>
        <div>
            <div class="relative">

                <label for="tienda_id" class="sr-only">Seleccione un Tienda</label>
                <select id="tienda_id" name="tienda_id" class="block p-4 pe-12 w-full text-sm text-gray-500 bg-transparent shadow-sm border-0 border-b-2 border-gray-200 rounded-lg dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200">
                    <option selected>Elige una Tienda</option>
                    @foreach($tienda as $t)
                    <option value="{{$t->id}}">{{$t->nombre}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-500 border-dashed rounded-md">
            <div class="space-y-1 text-center">
                <svg class="mx-auto h-12 w-12 text-gray-800" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div class="flex text-sm justify-center items-center text-gray-600">
                    <label for="imagen" class="relative cursor-pointer p-1 bg-blue-500 rounded-md font-medium text-white hover:text-gray-200 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-gray-500">
                        <span class="">Sube un archivo</span>
                        <input id="imagen" name="imagen" type="file" class="sr-only">
                    </label>
                    <p class="pl-1 text-gray-800">o arrastra y suelta</p>
                </div>
                <p class="text-xs text-gray-800">
                    PNG, JPG, GIF hasta 10MB
                </p>
            </div>
        </div>
        <div class="flex items-center justify-between mb-7">
            <input type="submit" value="Enviar" class="inline-block rounded-lg bg-blue-500 px-5 py-3 text-sm font-medium text-white">
        </div>
    </form>
    <script>
        export default {
            props: ['productos']
        }
    </script>
</div>