@vite('resources/css/app.css')
<div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
    @include("navBar")
    <div class="mx-auto max-w-lg text-center">
        <h1 class="text-2xl font-bold sm:text-3xl">Listas de Tiendas</h1>

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
                        Date of Birth
                    </th>
                </tr>
            </thead>

            <tbody class="">
                @foreach($tienda as $t)
                <tr>
                    <td class="px-4 py-2">
                        {{$t->id}}
                    </td>
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                        {{ $t->nombre }}
                    </td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $t->fecha_apertura }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class=" flex justify-center items-center p-2 w-full">
        <a href="{{url('/tienda/create')}}" class="rounded-lg bg-blue-500 m-5 px-5 py-3 text-sm font-medium text-white">Agregar Tienda</a>

    </div>
    <script>
        export default {
            props: ['tienda']
        }
    </script>
</div>