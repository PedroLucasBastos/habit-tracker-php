<x-layout>

    <main class="py-10">
        
        <h1 class="text-center text-4xl font-bold">
            Dashboard
        </h1>
        <p class="text-center mt-4">
            Bem-vindo ao seu painel de controle! {{ auth()->user()->name }}
        </p>
        <div>
            <h2 class="text-xl mt-4">
                Meus Hábitos
            </h2>

            <ul class="flex flex-col gap-2 mt-2">
                @forelse ($habits as $items)
                <li>
                    <div class="flex gap-2 items-center">
                        <p class="font-bold">
                            - {{ $items->name }}
                            <span class="text-sm text-gray-500">
                                {{$items->habitLogs()->count()}} registros
                            </span>
                        </p>     
                    </div>   
                </li>
                @empty
                <p>
                    Você ainda não tem hábitos registrados.
                </p>
                <a href="#" class="bg-white p-2 border-2 ">
                    Adicionar um hábito
                </a>
                @endforelse

            </ul>

        </div>
    </main>

</x-layout>