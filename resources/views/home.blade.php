<x-layout>
    <main class="content">
        <h1 class="content__title">Els meus articles</h1>
        <x-shared.search_bar :links="$articles->links('components.shared.pagination')"></x-shared.search_bar>
        <div class="busqueda__resultados"></div>
    </main>
</x-layout>
