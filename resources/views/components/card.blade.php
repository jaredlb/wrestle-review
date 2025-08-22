<div class="w-96 rounded-lg border border-black bg-white shadow hover:cursor-pointer" onclick="window.location.href='{{ $href }}'">
    <div class="flex justify-between px-2 pt-2">
        <div class="font-bold text-xl">
            {{ $title }}
        </div>
        <div class="text-xs text-gray-400">
            Published: {{ $date }}
        </div>
    </div>
    <div class="text-xs text-gray-400 px-2 pt-1">
        {{ $tinytext }}
    </div>
    <div class="text-wrap text-sm overflow-auto pt-4 px-2 pb-2">
        {{ $subtext }}
    </div>
</div>
