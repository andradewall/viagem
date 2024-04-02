<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getlocale()) }}"
    x-data="tallstackui_darkTheme()"
    x-bind:class="{ 'dark bg-gray-700': darkTheme, 'bg-sky-50': !darkTheme }">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>laravel</title>

        <!-- fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=JetBrains+Mono:wght@400;600;800&display=swap" rel="stylesheet">

        <!-- styles -->
        <style></style>

        <tallstackui:script />
        @livewireStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased text-sky-950 dark:text-white/50 max-w-screen-lg mx-auto">
        @include('layouts.navbar')
        <x-ts-card header="HOTEL">
            <strong>Hotel 6 de Octubre</strong><br>
            Av. Independencia, 2852<br>
            8 Jun 1400 - 13 Jun 1000<br>
            <a href="https://maps.app.goo.gl/yQqNUhg1TefG21z8A">Maps</a>
        </x-ts-card>
<h1 id="hotel">Hotel</h1>
<p><strong>Hotel 6 de Octubre</strong>
Av. Independencia, 2852
8 Jun 1400 - 13 Jun 1000
<a href="https://maps.app.goo.gl/yQqNUhg1TefG21z8A">Maps</a></p>
<hr>
<h1 id="cafés">Cafés</h1>
<ul>
<li><h4 id="el-gato-negro">El Gato Negro</h4>
  <a href="https://www.tripadvisor.com.br/Restaurant_Review-g312741-d3676783-Reviews-El_Gato_Negro-Buenos_Aires_Capital_Federal_District.html">Ref</a>
  Av. Carrientes, 1669</li>
</ul>
<h1 id=""></h1>
<ul>
<li><h4 id="café-tortoni">Café Tortoni</h4>
  <a href="https://www.tripadvisor.com.br/Restaurant_Review-g312741-d806778-Reviews-Cafe_Tortoni-Buenos_Aires_Capital_Federal_District.html">Ref</a>
  Avenida de Mayo, 825</li>
</ul>
<hr>
<h1 id="misc">Misc</h1>
<ul>
<li><h4 id="puente-de-la-mujer-em-puerto-madero">Puente de la Mujer em Puerto Madero</h4>
  #free #paisagem #puerto-madero #estrutura
  Ponte branca que remete a dois casais dançando tango</li>
</ul>
<h1 id="-1"></h1>
<ul>
<li><h4 id="caminito">Caminito</h4>
  #local #bairro #free #caminito
  Bairro colorido onde tem a loja de alfajor Cachafaz, que possui a estátua do Messi no segundo andar</li>
</ul>
<h1 id="-2"></h1>
<ul>
<li><h4 id="cachafaz-caminito">Cachafaz Caminito</h4>
  #loja #comida #caminito
  Loja de alfajor colorida que tem a estátua do Messi com taça da Copa do Mundo no segundo andar<blockquote>
<p>Vi num video que é considerado o melhor alfajor</p>
</blockquote>
</li>
</ul>
<h1 id="-3"></h1>
<ul>
<li><h4 id="cauce-de-los-fuegos">Cauce de los Fuegos</h4>
  #caro #restaurante #puerto-madero
  Restaurante em Puerto Madero
  Cobra taxa de utilização dos talheres e etc porém oferece pães e frios de entrada em troca<blockquote>
<p>Caro, pessoa do video gastou ARS 99k (BRL 500)</p>
</blockquote>
</li>
</ul>
<h1 id="-4"></h1>
<ul>
<li><h4 id="casa-rosada">Casa Rosada</h4>
  #estrutura #predio
  Parece um prédio histórico todo rosa</li>
</ul>
<h1 id="-5"></h1>
<ul>
<li><h4 id="jardim-japones">Jardim Japones</h4>
  #jardim #paisagem #palermo
  Nome diz tudo</li>
</ul>
<h1 id="-6"></h1>
<ul>
<li><h4 id="feira-de-san-telmo">Feira de San Telmo</h4>
  #free #feira #san-telmo
  Feira de miçangas e antiguidades</li>
</ul>
<h1 id="-7"></h1>
<ul>
<li><h4 id="museu-nacional-de-artes-decorativas">Museu Nacional de Artes Decorativas</h4>
  #museu #free #palermo
  Av. del Libertador 1902, C1425 Cdad. Autónoma de Buenos Aires, Argentina
  Um museu que era uma casa e a cada dia (ou exposição?) mudam os ambientes disponíveis para visitação
  Local meio pequeno então anda pouco</li>
</ul>
<h1 id="-8"></h1>
<ul>
<li><h4 id="museu-de-belas-artes">Museu de Belas Artes</h4>
  #museu #palermo
  Artes internacionais e nacionais
  Meio grande o local então anda um pouco</li>
</ul>
<h1 id="-9"></h1>
<ul>
<li><h4 id="museu-de-ciencias-naturais-bernardino-rivadavia">Museu de Ciencias Naturais Bernardino Rivadavia</h4>
  #museu #palermo #pago #cash
  Museu pique Uma Noite no Museu, mais antigo da Argentina, fósseis de dinossauro da Patagonia e etc, animais empalhados
  Local grande, anda muito</li>
</ul>
<h1 id="-10"></h1>
<ul>
<li><h4 id="mercado-de-las-pulgas">Mercado de Las Pulgas</h4>
  #feira #free #palermo
  Av. Dorrego 1650, 1414 Cdad. Autónoma de Buenos Aires, Argentina
  Feira/mercadão com muitas miçangas, antiguidades e decorações
  Local pequeno, anda pouco</li>
</ul>
<h1 id="-11"></h1>
<ul>
<li><h4 id="plaza-serrano">Plaza Serrano</h4>
  #feira #praça #palermo
  Serrano S/N, Cdad. Autónoma de Buenos Aires, Argentina
  Arte urbana em uma praça com mercado de artesanato nos fins de semana e bares boêmios nas ruas próximas.</li>
</ul>
<h1 id="-12"></h1>
<ul>
<li><h4 id="distrito-arcos">Distrito Arcos</h4>
  #praca #feira #loja #palermo<br>  Shopping ao ar livre com outlets de marcas famosas e restaurantes simples, em antigo viaduto ferroviário.</li>
</ul>
<h1 id="-13"></h1>
<ul>
<li><h4 id="barrio-chino">Barrio Chino</h4>
  #free #bairro
  Bairro asiático</li>
</ul>
<h1 id="-14"></h1>
<ul>
<li><h4 id="ecoparque">Ecoparque</h4>
  #palermo #parque #zoo
  Um parque/zoo focado em ecologia e preservação da natureza
  Animais soltos pelo parque
  Lugar grande e anda bastante, 16 hectares</li>
</ul>
<h1 id="-15"></h1>
<ul>
<li><h4 id="ecobici">Ecobici</h4>
  #app #mobilidade #locomoção #passeio
  App baratinho pra usar as bikes e passear
  Sugestão: passeio por Palermo de bike</li>
</ul>

        @livewireScripts
    </body>
</html>
