<aside
    {{ $attributes->merge([
        'class' =>
            'fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0',
        'aria-expanded' => 'false',
    ]) }}>

    {{-- Logo --}}
    <div class="h-19">
        <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden"
            sidenav-close></i>
        <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="{{ route('dashboard') }}">
            <img src="./assets/img/logo-iks.png"
                class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8" alt="main_logo" />
            <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Infinindotech</span>
        </a>
    </div>
    {{-- End Logo --}}

    <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent " />

    {{-- Menu --}}
    <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
        <ul class="flex flex-col pl-0 mb-0">
            @php
                $user = Auth::user();
                $sections = [];
            @endphp
            @foreach (config('components.sidebar') as $item)
                @if (
                    (isset($item['permission']) && $item['permission'] && $user && $user->can($item['permission'])) ||
                        (!isset($item['permission']) || !$item['permission']))
                    @if (isset($item['section']) && !in_array($item['section'], $sections))
                        @php $sections[] = $item['section']; @endphp
                        <li class="w-full mt-4">
                            <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase opacity-60">
                                {{ $item['section'] }}
                            </h6>
                        </li>
                    @endif
                    <li class="mt-0.5 w-full">
                        <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors
                            {{ request()->routeIs($item['route']) ? 'bg-blue-500/13 font-semibold text-slate-700 rounded-lg' : '' }}"
                            href="{{ route($item['route']) }}">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <i class="relative top-0 text-sm leading-normal text-blue-500 {{ $item['icon'] }}"></i>
                            </div>
                            <span
                                class="ml-1 duration-300 opacity-100 pointer-events-none ease">{{ $item['label'] }}</span>
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
    {{-- End Menu --}}
</aside>
