<x-layout>

    <main class="py-10">
        
        <h1 class="text-center text-4xl font-bold">
            Dashboard
        </h1>
        <p class="text-center mt-4">
            Bem-vindo ao seu painel de controle! {{ auth()->user()->name }}
        </p>

        <a href="{{ route('habit.create') }}" class="bg-white p-2 font-bold border-2">
            Cadastrar Hábito
        </a>

               
        @session('success')
            <div class="flex">
                <p class="bg-green-200 border-2 border-green-700 text-green-800 p-3 block mt-4 max-w-[200px]">
                    {{ session('success') }}
                </p>
            </div>
        @endsession

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
                <a href="{{ route('habit.create') }}" class="bg-white p-2 border-2 ">
                    Adicionar um hábito
                </a>
                @endforelse

            </ul>

        </div>
    </main>

</x-layout>