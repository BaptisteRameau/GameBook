@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Popular Games</h2>
        <div class="popular-games text-sm grid grid-cols-6 gap-12 border-b border-gray-800 pb-16">
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="https://cdna.artstation.com/p/assets/images/images/036/947/866/large/ismael-fofana-valorant-game-poster-design.jpg?1619051884" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150 w-48 h-60">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">VALORANT</a>
                <div class="text-gray-400 mt-1">PC</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="https://global-img.gamergen.com/cs-go-counter-strike-global-offensive-cover-jaquette_0280031B00789937.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150 w-48 h-60">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            95%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Counter Strike : Global Offensive</a>
                <div class="text-gray-400 mt-1">PC</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="https://i.pinimg.com/474x/37/09/e5/3709e5fc07c93f1d39a98826cf000748--rockets-gaming.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150 w-48 h-60">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">ROCKET LEAGUE</a>
                <div class="text-gray-400 mt-1">Nintendo Switch</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="https://www.mobygames.com/images/covers/l/607886-star-wars-jedi-fallen-order-xbox-one-front-cover.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150 w-48 h-60">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            65%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">STAR WARS - Jedi Fallen Order</a>
                <div class="text-gray-400 mt-1">Playstation 5</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="https://cdn.cdkeys.com/500x706/media/catalog/product/f/i/fifa-22-pc-game-origin-cover_14_.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150 w-48 h-60">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            87%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">ANIMAL CROSSING</a>
                <div class="text-gray-400 mt-1">Nintendo DS</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="https://images.nintendolife.com/games/wiiu/lego_movie_videogame/cover_large.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150 w-48 h-60">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            40%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">LEGO MOVIE</a>
                <div class="text-gray-400 mt-1">WII U</div>
            </div>
            <!-- LIGNE 2 -->
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="https://i.pinimg.com/474x/37/09/e5/3709e5fc07c93f1d39a98826cf000748--rockets-gaming.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150 w-48 h-60">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">ROCKET LEAGUE</a>
                <div class="text-gray-400 mt-1">Nintendo Switch</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="https://cdn.cdkeys.com/500x706/media/catalog/product/f/i/fifa-22-pc-game-origin-cover_14_.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150 w-48 h-60">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            87%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">ANIMAL CROSSING</a>
                <div class="text-gray-400 mt-1">Nintendo DS</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="https://cdna.artstation.com/p/assets/images/images/036/947/866/large/ismael-fofana-valorant-game-poster-design.jpg?1619051884" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150 w-48 h-60">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">VALORANT</a>
                <div class="text-gray-400 mt-1">PC</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="https://images.nintendolife.com/games/wiiu/lego_movie_videogame/cover_large.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150 w-48 h-60">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            40%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">LEGO MOVIE</a>
                <div class="text-gray-400 mt-1">WII U</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="https://global-img.gamergen.com/cs-go-counter-strike-global-offensive-cover-jaquette_0280031B00789937.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150 w-48 h-60">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            95%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Counter Strike : Global Offensive</a>
                <div class="text-gray-400 mt-1">PC</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="https://www.mobygames.com/images/covers/l/607886-star-wars-jedi-fallen-order-xbox-one-front-cover.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150 w-48 h-60">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            65%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">STAR WARS - Jedi Fallen Order</a>
                <div class="text-gray-400 mt-1">Playstation 5</div>
            </div>
        </div>
        <div class="flex my-10">
            <div class="recently-viewed w-3/4 mr-32">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recently Reviewed</h2>
                <div class="recently-reviewed-container space-y-12 mt-8">
                    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="https://www.mobygames.com/images/covers/l/607886-star-wars-jedi-fallen-order-xbox-one-front-cover.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150 w-48 h-60">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right:-20px; bottom:-20px">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">
                                    65%
                                </div>
                            </div>
                        </div>
                        <div class="ml-12">
                            <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">STAR WARS - Jedi Fallen Order</a>
                            <div class="text-gray-400 mt-1">Playstation 5</div>
                            <div class="mt-6 text-gray-400">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat enim, ab veritatis doloribus dolore totam id dignissimos excepturi neque vel consectetur aperiam nihil nam assumenda! Earum distinctio deserunt modi ab!
                            </div>
                        </div>
                    </div>
                    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="https://cdna.artstation.com/p/assets/images/images/036/947/866/large/ismael-fofana-valorant-game-poster-design.jpg?1619051884" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150 w-48 h-60">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right:-20px; bottom:-20px">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">
                                    80%
                                </div>
                            </div>
                        </div>
                        <div class="ml-12">
                            <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">VALORANT</a>
                            <div class="text-gray-400 mt-1">PC</div>
                            <div class="mt-6 text-gray-400">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat enim, ab veritatis doloribus dolore totam id dignissimos excepturi neque vel consectetur aperiam nihil nam assumenda! Earum distinctio deserunt modi ab!
                            </div>
                        </div>
                    </div>
                    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="https://i.pinimg.com/474x/37/09/e5/3709e5fc07c93f1d39a98826cf000748--rockets-gaming.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150 w-48 h-60">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right:-20px; bottom:-20px">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">
                                    80%
                                </div>
                            </div>
                        </div>
                        <div class="ml-12">
                            <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">ROCKET LEAGUE</a>
                            <div class="text-gray-400 mt-1">Nintendo Switch</div>
                            <div class="mt-6 text-gray-400">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat enim, ab veritatis doloribus dolore totam id dignissimos excepturi neque vel consectetur aperiam nihil nam assumenda! Earum distinctio deserunt modi ab!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="most-anticipated w-1/4">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Most Anticipated</h2>
                <div class="most-anticipated-container space-y-10 mt-8">
                    <div class="game flex">
                        <a href="#">
                            <img src="https://cdkeyprices.com/images/games/5633431/the-forest-desktop-logo-all.jpg" alt="game cover" class="w-16 hover:opacity-75 transition ease-out duration-150"/>
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">The Forest</a>
                            <div class="text-gray-400 text-sm mt-1">
                                Oct 25, 2022
                            </div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img src="https://static.posters.cz/image/750/affiches-et-posters/call-of-duty-mw3-cover-i11163.jpg" alt="game cover" class="w-16 hover:opacity-75 transition ease-out duration-150"/>
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Call of Duty MW3</a>
                            <div class="text-gray-400 text-sm mt-1">
                                Sep 12, 2023
                            </div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img src="https://www.mobygames.com/images/covers/l/547879-dirt-rally-2-0-windows-apps-front-cover.png" alt="game cover" class="w-16 hover:opacity-75 transition ease-out duration-150"/>
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Dirt Rally 2</a>
                            <div class="text-gray-400 text-sm mt-1">
                                Mar 02, 2023
                            </div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img src="https://upload.wikimedia.org/wikipedia/en/5/50/Super_Smash_Bros._Ultimate.jpg" alt="game cover" class="w-16 hover:opacity-75 transition ease-out duration-150"/>
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Super Smash Bros Ultimate</a>
                            <div class="text-gray-400 text-sm mt-1">
                                Jun 15, 2023
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold mt-16">Coming Soon</h2>
                <div class="most-anticipated-container space-y-10 mt-8">
                    <div class="game flex">
                        <a href="#">
                            <img src="https://cdkeyprices.com/images/games/5633431/the-forest-desktop-logo-all.jpg" alt="game cover" class="w-16 hover:opacity-75 transition ease-out duration-150"/>
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">The Forest</a>
                            <div class="text-gray-400 text-sm mt-1">
                                Oct 25, 2022
                            </div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img src="https://static.posters.cz/image/750/affiches-et-posters/call-of-duty-mw3-cover-i11163.jpg" alt="game cover" class="w-16 hover:opacity-75 transition ease-out duration-150"/>
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Call of Duty MW3</a>
                            <div class="text-gray-400 text-sm mt-1">
                                Sep 12, 2023
                            </div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img src="https://www.mobygames.com/images/covers/l/547879-dirt-rally-2-0-windows-apps-front-cover.png" alt="game cover" class="w-16 hover:opacity-75 transition ease-out duration-150"/>
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Dirt Rally 2</a>
                            <div class="text-gray-400 text-sm mt-1">
                                Mar 02, 2023
                            </div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img src="https://upload.wikimedia.org/wikipedia/en/5/50/Super_Smash_Bros._Ultimate.jpg" alt="game cover" class="w-16 hover:opacity-75 transition ease-out duration-150"/>
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Super Smash Bros Ultimate</a>
                            <div class="text-gray-400 text-sm mt-1">
                                Jun 15, 2023
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
