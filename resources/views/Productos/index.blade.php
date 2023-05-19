@vite('resources/css/app.css')
<div class="mx-auto flex flex-col items-center max-w-screen-xl px-4 mt-16 sm:px-6 lg:px-8">
    @include("navBar")
    <div class="mx-auto max-w-lg text-center">
        <h1 class="text-2xl font-bold sm:text-3xl">Listas de Productos</h1>
    </div>
    <div class="overflow-x-auto p-2 flex justify-center items-center">
        <table class=" divide-y-2 divide-gray-200 bg-white text-sm">
            <thead class="">
                <tr>
                    <th class="px-4 py-2">
                        #
                    </th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                        Name
                    </th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                        Descripcion
                    </th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                        Valor
                    </th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                        Tienda
                    </th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                        Imagen
                    </th>
                </tr>
            </thead>

            <tbody class="">
                @foreach($productos as $p)
                <tr>
                    <td class="px-4 py-2">
                        {{$p->sku}}
                    </td>
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                        {{ $p->nombre }}
                    </td>
                    <td class="whitespace-nowrap px-4 py-2 text-right text-sm">
                        {{$p->descripcion}}
                    </td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $p->valor}}</td>
                    <td class="whitespace-nowrap px-4 py-2 text-right text-sm">
                        {{$p->tienda_nombre}}
                    </td>
                    <td class="whitespace-nowrap px-4 py-2 text-right text-sm">
                        <img src="{{ asset('storage').'/'.$p->imagen }}" alt="" class=" w-10 h-10 border-solid border-2 border-slate-950 rounded-[50%]">
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>