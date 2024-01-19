<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
            <ul class="row dashnav">
            @if(null!==($adminMenus = adminMenus()))
            @foreach($adminMenus as $key=>$menu)
            @if(null!==($menu))
            @foreach($menu as $ke=>$men)
            <li class="col-lg-3 col-md-4 col-6"> <a href="{{array_values($men)[1]}}" class="waves-effect waves-light shadow-xl"><i data-feather="{{@$men['icon']}}"></i><span> {{__($ke)}} </span></a> </li>
            @endforeach
            @endif
            @endforeach
            @endif
</ul>
        </div>
    </div>
</x-admin-layout>
