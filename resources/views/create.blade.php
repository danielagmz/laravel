<x-layout>
<main class="content">
    <div class="content__title">El teu nou article</div>
    <div class="content__body">
        <form class="form article">
            <div class="form__group">
                <label for="title" class="form__label">Titol</label>
                <input id="title" type="text" name="title" class="form__input" placeholder="Hi havia una vegada..." value="">
            </div>
            <div class="form__group">
                <label for="content" class="form__label">Contingut</label>
                <textarea id="content" name="content" class="form__textarea" maxlength="2504" placeholder="Un article gloriós...'"></textarea>
            </div>
            <input type="submit" value="Insertar" class="form__button form__button--mark">
        </form>
    </div>
</main>
</x-layout>