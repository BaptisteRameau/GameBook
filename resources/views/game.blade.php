@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <div class="game-details border-b border-gray-800 pb-12 flex">
            <div class="flex-none">
                <img src="https://cdna.artstation.com/p/assets/images/images/036/947/866/large/ismael-fofana-valorant-game-poster-design.jpg?1619051884" alt="game-cover" class="w-48">
            </div>
            <div class="ml-12 mr-64">
                <h2 class="font-semibold text-4xl">VALORANT</h2>
                <div class="text-gray-400">
                    <span>FPS, Online</span>
                    &middot;
                    <span>Riot Games</span>
                    &middot
                    <span>PC</span>
                </div>

                <div class="flex flex-wrap items-center mt-8">
                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-gray-800 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">90%</div>
                        </div>
                        <div class="ml-4 text-xs">
                            Member <br> Score
                        </div>
                        <div class="flex items-center ml-12">
                            <div class="w-16 h-16 bg-gray-800 rounded-full">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">95%</div>
                            </div>
                            <div class="ml-4 text-xs">
                                Critic <br> Score
                            </div>
                        </div>
                        <div class="flex items-center space-x-4 ml-12">
                            <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center ml-8">
                                <a href="#" class="hover:text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="w-5 h-5 fill-current"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M248 8C111.03 8 0 119.03 0 256s111.03 248 248 248 248-111.03 248-248S384.97 8 248 8zm160 215.5v6.93c0 5.87-3.32 11.24-8.57 13.86l-15.39 7.7a15.485 15.485 0 0 1-15.53-.97l-18.21-12.14a15.52 15.52 0 0 0-13.5-1.81l-2.65.88c-9.7 3.23-13.66 14.79-7.99 23.3l13.24 19.86c2.87 4.31 7.71 6.9 12.89 6.9h8.21c8.56 0 15.5 6.94 15.5 15.5v11.34c0 3.35-1.09 6.62-3.1 9.3l-18.74 24.98c-1.42 1.9-2.39 4.1-2.83 6.43l-4.3 22.83c-.62 3.29-2.29 6.29-4.76 8.56a159.608 159.608 0 0 0-25 29.16l-13.03 19.55a27.756 27.756 0 0 1-23.09 12.36c-10.51 0-20.12-5.94-24.82-15.34a78.902 78.902 0 0 1-8.33-35.29V367.5c0-8.56-6.94-15.5-15.5-15.5h-25.88c-14.49 0-28.38-5.76-38.63-16a54.659 54.659 0 0 1-16-38.63v-14.06c0-17.19 8.1-33.38 21.85-43.7l27.58-20.69a54.663 54.663 0 0 1 32.78-10.93h.89c8.48 0 16.85 1.97 24.43 5.77l14.72 7.36c3.68 1.84 7.93 2.14 11.83.84l47.31-15.77c6.33-2.11 10.6-8.03 10.6-14.7 0-8.56-6.94-15.5-15.5-15.5h-10.09c-4.11 0-8.05-1.63-10.96-4.54l-6.92-6.92a15.493 15.493 0 0 0-10.96-4.54H199.5c-8.56 0-15.5-6.94-15.5-15.5v-4.4c0-7.11 4.84-13.31 11.74-15.04l14.45-3.61c3.74-.94 7-3.23 9.14-6.44l8.08-12.11c2.87-4.31 7.71-6.9 12.89-6.9h24.21c8.56 0 15.5-6.94 15.5-15.5v-21.7C359.23 71.63 422.86 131.02 441.93 208H423.5c-8.56 0-15.5 6.94-15.5 15.5z"/></svg>
                                </a>
                            </div>
                            <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                                <a href="#" class="hover:text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-5 h-5 fill-current"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                                </a>
                            </div>
                            <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                                <a href="#" class="hover:text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5 fill-current"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>
                                </a>
                            </div>
                            <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                                <a href="#" class="hover:text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-5 h-5 fill-current"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <p class="mt-12">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus, cumque quia? Obcaecati dolorum optio impedit mollitia quas ipsum, nobis et unde est, beatae ducimus iste, libero animi tempora id magnam.
                    </p>

                    <div class="mt-12">
                        <button class="flex bg-blue-500 text-white font-semibold px-4 py-4 hover:bg-blue-600
                        rounded transition ease-in-out duration-150">
                            <span class="ml-2">
                                Play Trailer
                            </span>
                        </button>
                    </div>
                </div>

            </div>
        </div>

        <div class="images-container border-b border-gray-800 pb-12 mt-8">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Images</h2>
            <div class="grid grid-cols-3 gap-12 mt-8">
                <div>
                    <a href="#">
                        <img src="https://www.journaldugeek.com/content/uploads/2022/01/template-jdg-2022-01-10t122520-146.jpg" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150 w-96 h-70">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/bltea3dd93cc82f3b59/63484defe9d2c541844df655/VALORANT_2022_EP5-3_Article_Banner_1920x1080_MB01.jpg?auto=webp&disable=upscale&height=504" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150 w-96 h-70">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="https://i0.wp.com/hwp.com.tr/wp-content/uploads/2020/04/valorant-ranks.jpeg?resize=505%2C350&ssl=1" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150 w-96 h-60">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="https://static.mensup.fr/22/2022/10/photo_article/760881/298870/1200-L-valorant-dvoile-harbor-le-vingtime-agent.jpg" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150 w-96 h-70">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="https://jeu-bayrou.com/wp-content/uploads/2021/09/Meilleurs-parametres-Valorant-pour-un-meilleur-FPS.jpg" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150 w-96 h-70">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="https://www.moyens.net/wp-content/uploads/2022/01/1642321015_Mises-a-jour-de-VALORANT-en-melee-a-venir-dans.jpg" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150 w-96 h-70">
                    </a>
                </div>
            </div>
        </div>

        <div class="similar-games-container mt-8">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Similar Games</h2>
            <div class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 pb-16">
                <div class="game mt-8 mx-auto lg:mx-0">
                    <div class="mx-auto lg:mx-0 relative inline-block">
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
                <div class="game mt-8 mx-auto lg:mx-0">
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
                <div class="game mt-8 mx-auto lg:mx-0">
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
                <div class="game mt-8 mx-auto lg:mx-0">
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
                <div class="game mt-8 mx-auto lg:mx-0">
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
                <div class="game mt-8 mx-auto lg:mx-0">
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
            </div>
        </div>
    </div>
@endsection
