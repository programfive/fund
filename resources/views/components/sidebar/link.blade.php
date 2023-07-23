@props([
    'isActive' => false,
    'title' => '',
    'collapsible' => false
])

@php
    $isActiveClasses =  $isActive ? 'text-white bg-indigo-500 shadow-lg hover:bg-indigo-600' : 'text-gray-500 hover:text-gray-700 hover:bg-gray-100 ';

    $classes = 'flex-shrink-0 outline-none  flex items-center gap-2 p-2 transition-colors rounded-md overflow-hidden ' . $isActiveClasses;

    if($collapsible) $classes .= ' w-full';
@endphp

@if ($collapsible)
    <button type="button" {{ $attributes->merge(['class' => $classes]) }} >
        @if ($icon ?? false)
   
            {{ $icon }}
        @endif

        <span
            class="text-base font-medium whitespace-nowrap"
            x-show="isSidebarOpen "
        >
            {{ $title }}
        </span>

        <span
            x-show="isSidebarOpen "
            aria-hidden="true"
            class="relative block ml-auto w-6 h-6"
        >
            <span
                :class="open ? '-rotate-45' : 'rotate-45'"
                class="absolute right-[9px] bg-white mt-[-5px] h-2 w-[2px] top-1/2 transition-all duration-200"
            ></span>

            <span
                :class="open ? 'rotate-45' : '-rotate-45'"
                class="absolute left-[9px] bg-white mt-[-5px] h-2 w-[2px] top-1/2 transition-all duration-200"
            ></span>
        </span>
    </button>
@else
    <a {{ $attributes->merge(['class' => $classes]) }}>
        @if ($icon ?? false)
            {{ $icon }}

        @endif

        <span
            class="text-base font-medium"
            x-show="isSidebarOpen "
        >
            {{ $title }}
        </span>
    </a>
@endif
