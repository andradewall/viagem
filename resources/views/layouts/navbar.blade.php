<nav class="flex justify-between py-8">
    <a href="{{ route('home') }}" class="text-3xl">
        Nath & Walse
    </a>

    <a href="{{ route('destinations') }}">
        Destinos
    </a>

    <a href="{{ route('tags') }}">
        Tags
    </a>

    <a href="{{ route('categories') }}">
        Categorias
    </a>

    <x-ts-theme-switch only-icons />
</nav>
