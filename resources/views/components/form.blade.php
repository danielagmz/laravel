@if($type == 'delete')
    <form action="" method="post" class="form article">
        <div class="form__group">
            <label for="title" class="form__label">Titol</label>
            <input disabled type="text" id="title" name="title" class="form__input" value="<?= isset($title) ? $title: '' ?>">
        </div>
        <div class="form__group">
            <label for="content" class="form__label">Contingut</label>
            <textarea disabled name="content" id="content" class="form__textarea" required maxlength="200"></textarea>
        </div>
        <div id="responseContainer" class="response-container"></div>
        <input type="submit" value="Esborrar" class="form__button form__button--mark" id="deleteBtn">
    </form>
@elseif ($type == 'update')
    <form action="" method="post" class="form article">
        <div class="form__group">
            <label for="title" class="form__label">Titol</label>
            <input type="text" id="title" name="title" class="form__input" value="">
        </div>
        <div class="form__group">
            <label for="content" class="form__label">Contingut</label>
            <textarea name="content" id="content" class="form__textarea" maxlength="200"></textarea>
        </div>
        <div id="responseContainer" class="response-container"></div>
        <input type="submit" value="Modificar" class="form__button form__button--mark">
    </form>
@endif
