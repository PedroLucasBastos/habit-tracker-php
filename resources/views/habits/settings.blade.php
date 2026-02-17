<x-layout>

    <main class="py-10 min-h[calc(100vh-160px)]">

        <x-navbar/>
               
        @session('success')
            <div class="flex">
                <p class="bg-green-200 border-2 border-green-700 text-green-800 p-3 block mt-4 max-w-[200px]">
                    {{ session('success') }}
                </p>
            </div>
        @endsession

        <div>
            <h2 class="text-lg mt-8 mb-2 font-bold">
                Configurações de hábitos
            </h2>

            <ul class="flex flex-col gap-2 mt-2">
                @forelse ($habits as $items)
                <li class="habit-shadow-lg p-2 bg-habit-bg">
                    <div class="flex gap-2 items-center">
                        
                        <p class="font-bold text-lg">
                           {{ $items->name }}
                            
                        </p>  

                        <a href="{{ route('habits.edit', $items) }}" class="cursor-pointer bg-blue-500 text-white p-1 hover:opacity-20">
                                <x-icons.edit />
                        </a>
                        
                        <form action="{{ route('habits.destroy', $items) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="cursor-pointer bg-red-500 text-white p-1 hover:opacity-20">
                                 <x-icons.trash />
                            </button>

                    </div>   
                </li>
                @empty
                <p>
                    Você ainda não tem hábitos registrados.
                </p>
                <a href="{{ route('habits.create') }}" class="bg-white p-2 border-2 ">
                    Adicionar um hábito
                </a>
                @endforelse

            </ul>

        </div>
    </main>

</x-layout>

