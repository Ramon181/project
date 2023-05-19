<header aria-label="Site Header" class="border-b border-gray-100">
    <div class="mx-auto flex h-16 max-w-screen-2xl items-center justify-between sm:px-6 lg:px-8">

        <div class="flex flex-1 items-center justify-end gap-8">
            <nav aria-label="Site Nav" class="hidden lg:flex lg:gap-4 lg:text-xs lg:font-bold lg:uppercase lg:tracking-wide lg:text-gray-500">
                <a href="{{url('/')}}" class="block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-blue-700">
                    Inicio
                </a>

                <a href="{{url('/productos')}}" class="block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-blue-700">
                   Lista de Productos
                </a>
                <a href="{{url('/productos/create')}}" class="block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-blue-700">
                    Crear Producto
                </a>
                <a href="{{url('/tienda')}}" class="block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-blue-700">
                    Lista de Tiendas
                </a>
            </nav>
        </div>
    </div>
</header>