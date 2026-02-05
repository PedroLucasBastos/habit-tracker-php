<x-layout>

    <main class="py-10">
        <h1 class="text-center text-4xl font-bold">
            Veja seus habitos ganharem vida!
        </h1>

        @auth
        <p class="text-center mt-4">
            Você está logado como {{ auth()->user()->name }}
        </p>
        @endauth
    </main>

</x-layout>