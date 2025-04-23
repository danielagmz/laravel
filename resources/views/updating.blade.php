<x-layout>
  <main class="content">
    <div class="content__title"> Modificant <?= isset($title) ? $title : 'l\'article' ?></div>
    <div class="content__body">
      <x-form :article="$article" type="update"></x-form>
    </div>
  </main>
</x-layout>