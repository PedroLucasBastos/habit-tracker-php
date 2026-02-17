<header class="bg-white border-botton border-b-2 flex intems-center justify-between p-4">
    {{-- logo --}}
    <a href="{{ route('habits.index') }}" class="habit-btn habit-shadow-lg px-2 py-1 bg-habit-orange">
        HT
    </a>
    {{-- GitHub e login --}}
    <div>

        @guest
            <div class="flex gap-2">
                <a href="{{route ('auth.login')}}" class="bg-habit-orange habit-shadow-lg p-2 habit-btn">
                    Logar
                </a>
                <a href="{{route ('auth.register')}}" class="bg-white habit-shadow-lg p-2 habit-btn">
                    Cadastrar-se
                </a>
            </div>
        @endguest

        {{--Logout--}}
        @auth
        <form 
        action="{{route ('auth.logout')}}" 
        method="POST">
            @csrf
            <button type="submit" class="habit-shadow-lg habit-btn p-2 border-2">
                Sair
            </button>

        </form>
        </a>
        @endauth
    </div>
</header>