{{--
|--------------------------------------------------------------------------
| Core Navbar Component
|--------------------------------------------------------------------------
|
| Usage example:
| <x-core.navbar
|     :breadcrumb="[
|         ['label' => 'Home', 'url' => route('home')],
|         ['label' => 'Dashboard']
|     ]"
|     title="Dashboard"
|     :show-search="true"
|     :menus="[
|         ['icon' => 'fa fa-user', 'label' => 'Sign In', 'url' => route('login')],
|         ['icon' => 'fa fa-cog', 'url' => '#'],
|     ]"
| >
|     <!-- Optional slot: Extra menu/right-side content -->
|     <li>
|         <a href="#"><i class="fa fa-bell"></i></a>
|     </li>
| </x-core.navbar>
|
| Props:
| - breadcrumb (array) : List of ['label' => string, 'url' => string|null]
| - title (string)     : Page or section title (optional)
| - showSearch (bool)  : Show search input? (default: false)
| - menus (array)      : Right-side menus, each ['icon', 'label', 'url', 'liClass', 'aClass', 'iconClass', 'labelClass']
| - slot               : For custom content (notifications, dropdowns, etc)
|
--}}

@props([
    'breadcrumb' => [],
    'title' => '',
    'menus' => [], // array of [ 'icon' => '', 'label' => '', 'url' => '', ... ]
])

<nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start sticky top-[1%] backdrop-saturate-200 backdrop-blur-2xl bg-[hsla(0,0%,100%,0.8)] shadow-blur z-110"
    {{ $attributes->merge(['navbar-main' => '', 'navbar-scroll' => 'true']) }}>
    <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
        <nav>
            <!-- breadcrumb -->
            <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                @foreach ($breadcrumb as $idx => $bc)
                    <li class="text-sm leading-normal">
                        @if (isset($bc['url']) && $bc['url'])
                            <a class="opacity-50" href="{{ $bc['url'] }}">{{ $bc['label'] }}</a>
                        @else
                            <span
                                class="pl-2 capitalize leading-normal {{ $idx > 0 ? 'before:float-left before:pr-2' : '' }}"
                                aria-current="page">/ {{ $bc['label'] }}</span>
                        @endif
                    </li>
                @endforeach
            </ol>
            @if ($title)
                <h6 class="mb-0 font-bold capitalize">{{ $title }}</h6>
            @endif
        </nav>

        <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
            {{-- Menu --}}
            <ul class="flex items-center md:ml-auto md:pr-4">
                @foreach ($menus as $menu)
                    <li class="flex items-center {{ $menu['liClass'] ?? '' }}">
                        <a href="{{ $menu['url'] ?? '#' }}"
                            class="{{ $menu['aClass'] ?? 'block px-0 py-2 text-sm font-semibold transition-all ease-nav-brand' }}">
                            @if (isset($menu['icon']) && $menu['icon'])
                                <i class="{{ $menu['icon'] }} {{ $menu['iconClass'] ?? '' }} sm:mr-1"></i>
                            @endif
                            @if (isset($menu['label']) && $menu['label'])
                                <span
                                    class="{{ $menu['labelClass'] ?? 'hidden sm:inline' }}">{{ $menu['label'] }}</span>
                            @endif
                        </a>
                    </li>
                @endforeach
                {{-- Slot for extra right-side content --}}
                {{ $slot }}
            </ul>
            {{-- End Menu --}}
        </div>
    </div>
</nav>
