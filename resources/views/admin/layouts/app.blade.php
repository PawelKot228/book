@extends('admin.layouts.base')

@section('body')

    <section class="relative flex h-96 min-h-full items-start justify-center overflow-y-hidden border bg-gray-50 dark:border-zinc-900 dark:bg-zinc-700">
        <sidebar>
            <livewire:admin.navigation/>
        </sidebar>

        <main class="w-full ml-60">
            @yield('content')
        </main>
    </section>


    @isset($slot)
        {{ $slot }}
    @endisset
@endsection
