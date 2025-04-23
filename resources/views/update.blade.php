<x-layout>
  @vite(['resources/js/update.js'])
  <main class="content update">
    <div class="content__title"> Selecciona l'article per modificar</div>
    <x-shared.search_bar :links="$articles->links('components.shared.pagination')"></x-shared.search_bar>
    <div class="busqueda__resultados">
      @foreach ($articles as $article)
          <x-article :article="$article"></x-article>
      @endforeach
    </div>
  </main>
</x-layout>