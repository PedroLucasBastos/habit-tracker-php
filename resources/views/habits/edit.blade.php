<x-layout>

    <main class="py-10">
       <h2>
            Ediar Hábito
       </h2>
       <section class="mt-4 bg-white max-w-[600px] mx-auto p-10 pb-6 border-2">
            <form class="flex flex-col" action="{{route('habits.update', $habit->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="flex flex-col gap-2 mb-4">
                            <label for="name">
                                Nome do hábito                
                            </label>

                            <input
                                type="text"
                                name="name"
                                placeholder="Ex: Ler 10 páginas"
                                class="bg-white p-2 border-2 @error('name') border-red-500 @enderror"
                                value="{{ old('name', $habit->name) }}">

                            @error('email')
                                    <p class="text-red-500 text-sm">
                                        {{ $message }}
                                    </p>
                            @enderror  

                        </div>
                        <button
                            type="submit"
                            class="bg-white border-2 p-2 hover:bg-gray-200">
                            Editar Hábito
                        </button>

                </form>
        </section>
        
    </main>

</x-layout>