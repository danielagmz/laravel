<x-layout>
    <main class="content">
        <div class="content__title">El teu nou article</div>
        <div class="content__body">
            <form class="form article" action="{{ route('create') }}" method="POST">
                @csrf
                <div class="form__group">
                    <label for="title" class="form__label">Titol</label>
                    <input id="title" type="text" name="title" class="form__input"
                        placeholder="Hi havia una vegada..." value="{{ old('title') }}">
                </div>
                <div class="form__group">
                    <label for="content" class="form__label">Contingut</label>
                    <textarea id="content" name="content" class="form__textarea" maxlength="2504" placeholder="Un article gloriós...'">{{ old('content') }}</textarea>
                </div>
                <div id="responseContainer" class="response-container">
                    @if(session('success'))
                        <div class="form-info form-info--success">
                            {{ session('success') }}
                        </div>
                    @endif

                </div>
                <input type="submit" value="Insertar" class="form__button form__button--mark">
            </form>
        </div>
    </main>
</x-layout>
