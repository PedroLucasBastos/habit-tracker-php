use Carbon\Carbon;

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
                {{ date('d/m/Y') }}
            </h2>

            <ul class="flex flex-col gap-2 mt-2">


                @forelse ($habits as $items)

                <li class="habit-shadow-lg p-2 bg-habit-bg">
                    <form 
                    class="flex gap-2 items-center" 
                    METHOD="POST" 
                    id="form-{{ $items->id }}"
                    action="{{ route('habits.toggle', $items->id) }}">
                        @csrf
                        <input 
                        type="checkbox" 
                        class="w-5 h-5" {{ $items->is_completed ? 'checked' : '' }} 
                        {{ $items->wasCompletedToday() ? 'checked' : '' }}
                        onchange="document.getElementById('form-{{ $items->id }}').submit()"
                        >
                        <p class="font-bold text-lg">
                           {{ $items->name }}
                            
                        </p>  

                    </form>   
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