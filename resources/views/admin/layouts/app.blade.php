@extends('admin.layouts.base')

@section('body')
    <aside
        class="fixed top-0 bottom-0 left-0 w-52 lg:w-64 z-40 text-center text-white shadow-xl rounded-r-2xl bg-violet-50">
        <div class="flex flex-col h-full w-full  overflow-hidden">
            <div class="flex items-center gap-4 justify-center h-20 px-4 shadow-md">
                <a href="{{ route('admin.home') }}">
                    <x-logo class="w-8 text-cyan-500"/>
                </a>
                <a href="{{ route('admin.home') }}">
                    <h1 class="text-2xl uppercase text-indigo-500">{{ config('app.name') }}</h1>
                </a>
            </div>
            <nav>
                <livewire:admin.navigation/>
            </nav>
        </div>

    </aside>

    <main class="ml-64 relative">
        <div class="navbar bg-violet-50 rounded-bl-box fixed top-0 right-0 w-min shadow-inner">
            {{--            <div class="flex-1 px-2 lg:flex-none">--}}
            {{--                <a class="text-lg font-bold">daisyUI</a>--}}
            {{--            </div>--}}
            <div class="flex justify-end flex-1 px-2">
                <div class="flex items-stretch">
                    <div class="dropdown dropdown-end">
                        <label tabindex="0" class="btn btn-ghost rounded-btn">Account</label>
                        <ul tabindex="0" class="menu dropdown-content p-2 shadow bg-base-100 rounded-box w-52 mt-4">
                            <li><a href="{{ route('admin.myProfile') }}">{{ __('admin.label.my_profile') }}</a></li>
                            <li>
                                <a href="{{ route('admin.logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                >
                                    {{ __('admin.label.logout') }}
                                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                                          style="display: none;"
                                    >
                                        @csrf
                                    </form>
                                </a>


                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div>
            @yield('content')
        </div>
    </main>

    @isset($slot)
        {{ $slot }}
    @endisset
@endsection
