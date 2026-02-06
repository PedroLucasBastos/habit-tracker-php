<header class="bg-white border-botton border-b-2 flex intems-center justify-between p-4">
    {{-- logo --}}
    <div>
        logo
    </div>
    {{-- GitHub e login --}}
    <div>

        @guest
        <a href="{{route ('auth.login')}}" class="text-sm font-semibold border border-blue-500 text-blue-500 px-4 py-2 rounded-lg hover:bg-blue-500 hover:text-white transition">
            Login
        </a>
        @endguest

        {{--Logout--}}
        @auth
        <form action="{{route ('auth.logout')}}" method="POST">
            @csrf
            <button type="submit" class="bg-white p-2 border-2">
                Sair
            </button>

        </form>
        </a>
        @endauth
    </div>
</header>