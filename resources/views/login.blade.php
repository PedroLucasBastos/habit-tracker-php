<x-layout>

    <main class="py-10">
        <h1 class="text-center text-4xl font-bold">
            faça seu login aqui!
        </h1>

        <section class="mt-4">
            <form action="/login" method="POST">
                @csrf

                <div>
                    @error('email')
                    <p class="text-red-500 mt-2">{{ @$message }}</p>
                    @enderror
                </div>

                <input
                    type="email"
                    name="email"
                    placeholder="email@email.com"
                    class="bg-white p-2 border-2">
                <input
                    type="password"
                    name="password"
                    placeholder="********"
                    class="bg-white p-2 border-2">
                <button
                    type="submit"
                    class="bg-white border-2 p-2 hover:bg-gray-200">
                    Entrar
                </button>
            </form>


        </section>
    </main>

</x-layout>