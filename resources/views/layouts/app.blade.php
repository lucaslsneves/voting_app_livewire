<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Voting App</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans bg-gray-background text-gray-900 text-sm">
       <header class="flex items-center justify-between px-8 px-4">
            <a href="#"><img src="{{asset("img/logo.svg")}}"/></a>
            <div class="flex items-center">
                @if (Route::has('login'))
                    <div class="px-6 py-4">
                        @auth
                       <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a class="text-gray-900 underline cursor-pointer"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                        @else
                            <a href="{{ route('login') }}" class="text-gray-900 underline cursor-pointer">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-gray-900 underline cursor-pointer">Register</a>
                            @endif
                        @endauth
                    </div>
                 @endif
                 <a href="">
                    <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp" alt="avatar" class="w-10 h-10 rounded-full"/>
                </a>
            </div>
       </header>
       <main class="container mx-auto max-w-custom flex">
        <div class="w-70 mr-5">
            Add idea form goes here
            </div>

            <div class="w-175">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Vitae tempore et blanditiis necessitatibus ut praesentium esse odio commodi magnam voluptatem corporis nam, natus eius libero 
            voluptates molestiae animi adipisci velit culpa maxime? Nihil possimus quia ipsam reprehenderit, placeat voluptatibus. 
            Sapiente quas dolorum velit ullam non magnam! Voluptate, distinctio, quis qui velit nostrum dolore est pariatur ex cumque quia sed.
             Dignissimos necessitatibus quod esse voluptatum voluptatibus sed quia non cupiditate omnis doloribus dolores officiis aut pariatur, 
             ad illo earum magnam consectetur in nisi architecto mollitia molestiae. Odit nesciunt sint fugiat cupiditate, vitae officia minus et
              ratione libero dignissimos aliquam earum impedit provident pariatur possimus quod blanditiis cum cumque nam, ab exercitationem? 
              Ea provident dolore expedita, nostrum tempora architecto adipisci. Doloribus dicta qui soluta assumenda cumque officiis provident, 
              iure expedita obcaecati neque voluptatum iste alias blanditiis in recusandae dolore? Sed, laboriosam quas necessitatibus ipsam 
              reprehenderit harum assumenda suscipit quasi exercitationem beatae neque obcaecati porro quae hic reiciendis totam accusantium a
              ccusamus impedit officiis quam, sapiente, eligendi cupiditate delectus. Debitis explicabo ullam suscipit sint animi tempore excepturi,
               inventore iure molestiae temporibus quidem eos, nostrum eveniet obcaecati nobis doloribus fugiat
             assumenda officiis omnis praesentium fuga? Quis doloremque quidem tempore, culpa illo assumenda. Magnam, odit maiores.
            </div>
       </main>
    </body>
</html>
