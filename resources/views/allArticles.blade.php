<x-layout>
  <main class="content">
    <div class="content__title">Tots els articles</div>
    <x-shared.search_bar></x-shared.search_bar>
    <div class="busqueda__resultados">
      {{-- $articles @foreach ($collection as $item)
          <x-article :article="$item"></x-article>
      @endforeach --}}
    </div>
  </main>
</x-layout>