<x-layout>

    <main class="py-10">
       
        <section class="mt-4 bg-white max-w-[600px] mx-auto p-10 pb-6 border-2">
             <h1 class="font-bold mb-4 text-3xl">
                Registrar-se
            </h1>

            <p>
                Preencha os campos abaixo para criar sua conta
            </p>


            <form class="flex flex-col" action="{{ route('auth.register') }}" method="POST">
                @csrf

                <div class="flex flex-col gap-2 mb-4">
                    <label for="name">
                        Nome                
                    </label>

                    <input
                        type="text"
                        name="name"
                        placeholder="Seu nome"
                        class="bg-white p-2 border-2 @error('name') border-red-500 @enderror">

                       @error('name')
                            <p class="text-red-500 text-sm">
                                {{ $message }}
                            </p>
                       @enderror  

                </div>

                <div class="flex flex-col gap-2 mb-4">
                    <label for="email">
                        email                
                    </label>

                    <input
                        type="email"
                        name="email"
                        placeholder="email@email.com"
                        class="bg-white p-2 border-2 @error('email') border-red-500 @enderror">

                       @error('email')
                            <p class="text-red-500 text-sm">
                                {{ $message }}
                            </p>
                       @enderror  

                </div>
                <div class="flex flex-col gap-2 mb-4">
                    <label for="password">
                        senha                
                    </label>
                    <input
                        type="password"
                        name="password"
                        placeholder="********"
                        class="bg-white p-2 border-2">

                        @error('password')
                            <p class="text-red-500 text-sm">
                                
                                {{ $message }}
                            </p>
                       @enderror 

                </div>
                <div class="flex flex-col gap-2 mb-4">
                    <label for="password_confirmation">
                        Repita sua senha                
                    </label>
                    <input
                        type="password"
                        name="password_confirmation"
                        placeholder="********"
                        class="bg-white p-2 border-2">

                        @error('password')
                            <p class="text-red-500 text-sm">
                                
                                {{ $message }}
                            </p>
                       @enderror 

                </div>

                <button
                    type="submit"
                    class="bg-white border-2 p-2 hover:bg-gray-200">
                    Cadastrar
                </button>
            </form>
            <p class="text-center mt-2">
                Já tem uma conta? <a href="{{ route('site.login') }}" class="underline hover:opacity-50 transition">Faça login</a>
            </p>

        </section>
    </main>

</x-layout>