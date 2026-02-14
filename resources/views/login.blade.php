<x-layout>

    <main class="py-10">
       
        <section class="mt-4 bg-white max-w-[600px] mx-auto p-10 border-2">
             <h1 class="font-bold mb-4 text-3xl">
                faça login
            </h1>

            <p>
                Insira seus dados para acessar sua conta
            </p>


            <form class="flex flex-col" action="/login" method="POST">
                @csrf

                <div class="flex flex-col gap-2 mb-4">
                    <label>
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
                    <label>
                        senha                
                    </label>
                    <input
                        type="password"
                        name="password"
                        placeholder="********"
                        class="bg-white p-2 border-2">

                        @error('password')
                            <p class="text-red-500 text-sm">
                                aaaaa
                                {{ $message }}
                            </p>
                       @enderror 

                </div>
                <button
                    type="submit"
                    class="bg-white border-2 p-2 hover:bg-gray-200">
                    Entrar
                </button>
            </form>


        </section>
    </main>

</x-layout>