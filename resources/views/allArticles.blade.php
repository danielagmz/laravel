<x-layout>
  <main class="content">
    <div class="content__title">Tots els articles</div>
    <x-shared.search_bar :links="$articles->links('components.shared.pagination')"></x-shared.search_bar>
    <div class="busqueda__resultados">
      @foreach ($articles as $article)
          <x-article :article="$article"></x-article>
      @endforeach
    </div>
  </main>
</x-layout>