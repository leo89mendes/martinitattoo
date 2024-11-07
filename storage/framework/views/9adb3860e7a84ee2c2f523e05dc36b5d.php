<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8" />

        <meta name="application-name" content="<?php echo e(config('app.name')); ?>" />
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="title" content="Martini Tattoo">
        <meta name="keywords" content="Tatuagem, Tatuagem de animais, Tattoo, Tattoo Brooklin, Hangar Tatto">
        <meta name="description" content="Martini Tatto, tatuando a mais de 15 anos.">
        <meta name="author" content="Guilherme Martini">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Martini Tattoo">
        <meta property="og:description" content="A mais de 15 anos fazendo todos os tipos de tatuagem.">
        <meta property="og:url" content="https://www.martinitattoo.com">
        <meta property="og:image" content="<?php echo e(asset('storage/assets/img/theme.jpg')); ?>">
        <title>Martini Tattoo</title>

        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>

        <?php echo \Filament\Support\Facades\FilamentAsset::renderStyles() ?>
        <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    </head>

    <body class="antialiased">
        <div class="container bg-cover bg-center h-screen w-full" style="background-image: url('storage/assets/img/bg.jpg')">
            <div class="flex justify-center flex-col items-center h-full">
                <h2 class="text-white bg-black font-bold p-4 mt-4 text-3xl text-center">Em Breve, nosso novo site, aguardem.</h2>
                <h3 class="text-white bg-black font-bold p-4 mt-4 text-3xl text-center">Visite nosso instagram: <a class=" hover:text-[#4caf50]" href="https://instagram.com/martinitattoo" target="_blank">@martinitattoo</a></h3>
                <h3 class="text-white font-bold p-4 mt-4 text-3xl text-center">
                    <a target="_blank" href="https://wa.me/11999722054">    
                        <img alt="Fale conosco" width="65" src="<?php echo e(asset('storage/assets/img/whatsapp.png')); ?>"/>
                    </a>
                </h3>
            </div>
        </div>

        <?php echo \Filament\Support\Facades\FilamentAsset::renderScripts() ?>
        <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
    </body>
</html>
<?php /**PATH /var/www/html/resources/views/errors/503.blade.php ENDPATH**/ ?>