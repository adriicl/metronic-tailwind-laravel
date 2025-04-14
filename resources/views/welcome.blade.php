<x-default-layout>
    <!-- Container -->
    <div class="container-fixed">
        <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
            <div class="flex flex-col justify-center gap-2">
                <h1 class="text-xl font-medium leading-none text-gray-900">
                    Dashboard
                </h1>
            </div>
            <div class="flex items-center gap-2.5">
                <a class="btn btn-sm btn-light" href="{{ route('user-profile') }}">
                    View Profile
                </a>
            </div>
        </div>
    </div>
</x-default-layout>