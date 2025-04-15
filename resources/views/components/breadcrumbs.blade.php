<nav class="text-sm text-gray-500 mb-4" aria-label="Breadcrumb">
    <ol class="list-none p-0 inline-flex space-x-2">
        @foreach ($items as $item)
            <li class="inline-flex items-center">
                @if (!$loop->last)
                    <a href="{{ $item['url'] }}" class=" text-blue-700 hover:underline">
                        {{ $item['label'] }}
                    </a>
                    <svg class="w-4 h-4 mx-2 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                    </svg>
                @else
                    <span class="text-gray-700">{{ $item['label'] }}</span>
                @endif
            </li>
        @endforeach
    </ol>
</nav>
