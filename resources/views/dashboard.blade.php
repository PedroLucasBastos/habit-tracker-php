<x-layout>

    <main class="py-10">
        <h1 class="text-center text-4xl font-bold">
            Dashboard
        </h1>
        <p class="text-center mt-4">
            Bem-vindo ao seu painel de controle! {{ auth()->user()->name }}
    </main>

</x-layout>