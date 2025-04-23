<x-layout>
    <main class="content">
        <h1 class="content__title">Els meus articles</h1>
        <x-shared.search_bar :links="$articles->links('components.shared.pagination')"></x-shared.search_bar>
        <div class="busqueda__resultados">
            @if ($articles->isEmpty())
                <article class="article disabled">
                    <div class="article__header">
                        <div class="article__t">
                            No tens cap article 😞
                        </div>
                    </div>
                </article>
            @elseif ($articles->isNotEmpty())
                @foreach ($articles as $article)
                    <x-article :article="$article"></x-article>
                @endforeach
            @endif
        </div>
    </main>
</x-layout>
