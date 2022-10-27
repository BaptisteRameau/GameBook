<div wire:init="loadPopularGames" class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800 pb-16">
    @forelse ($popularGames as $game)
        <div class="game mt-8 mx-auto lg:mx-0">
            <div class="mx-auto lg:mx-0 relative inline-block">
                <a href="{{ route('games.show', $game['slug']) }}">
                    <img src="{{ $game['coverImageUrl'] }}" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150 h-64 w-48">
                </a>
                @if ($game['aggregated_rating'])
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            {{ $game['aggregated_rating'] }}
                        </div>
                    </div>
                @endif
            </div>
            <a href="{{ route('games.show', $game['slug']) }}" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">{{ $game['name'] }}</a>
            <div class="text-gray-400 mt-1">
                {{ $game['platforms'] }}
            </div>
        </div>
    @empty
        @foreach (range(1, 12) as $game)
            <div class="game mt-8">
                <div class="relative inline-block">
                    <div class="bg-gray-800 w-44 h-56"></div>
                </div>
                <div class="block text-transparent text-lg bg-gray-700 rounded leading-tight mt-4">Title goes here</div>
                <div class="text-transparent bg-gray-700 rounded inline-block mt-3">PC, PS4</div>
            </div>
        @endforeach

    @endforelse
</div>
