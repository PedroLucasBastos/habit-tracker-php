<x-layout>

    <main class="py-10">
       
        <section class="mt-4 bg-white max-w-[600px] mx-auto p-10 pb-6 habit-shadow">
             <h1 class="font-bold mb-4 text-3xl">
                faça login
            </h1>

            <p>
                Insira seus dados para acessar sua conta
            </p>


            <form class="flex flex-col" action="{{ route('auth.login') }}" method="POST">
                @csrf

                <div class="flex flex-col gap-2 mb-4">
                    <label>
                        email                
                    </label>

                    <input
                        type="email"
                        name="email"
                        placeholder="email@email.com"
                        class="bg-white p-2 habit-shadow
                       @error('email')
                            <p class="text-red-500 text-sm">
                                {{ $message }}
                            </p>
                       @enderror  

                </div>
                <div class="flex flex-col gap-2 mb-4">
                    <label>
                        senha                
                    </label>
                    <input
                        type="password"
                        name="password"
                        placeholder="********"
                        class="bg-white p-2 habit-shadow">

                        @error('password')
                            <p class="text-red-500 text-sm">
                                
                                {{ $message }}
                            </p>
                       @enderror 

                </div>
                <button
                    type="submit"
                    class="bg-habit-orange habit-shadow-lg p-2 habit-btn">
                    Entrar
                </button>
            </form>
            <p class="text-center mt-2">
                Não tem uma conta? <a href="{{ route('site.register') }}" class="underline hover:opacity-50 transition">Registrar-se</a>
            </p>

        </section>
    </main>

</x-layout>