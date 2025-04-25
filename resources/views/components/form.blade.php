@if($type == 'delete')
    <form action="{{ route('deleting.post', ['id' => $article->id]) }}" method="post" class="form article">
        @csrf
        <div class="form__group">
            <label for="title" class="form__label">Titol</label>
            <input disabled type="text" id="title" name="title" class="form__input" value="{{ $article->title ?? '' }}">
        </div>
        <div class="form__group">
            <label for="content" class="form__label">Contingut</label>
            <textarea disabled name="content" id="content" class="form__textarea" required maxlength="200">{{$article->content ?? ''}}</textarea>
        </div>
        <div id="responseContainer" class="response-container">
            @if(session('success'))
                <div class="form-info form-info--success">
                    {{ session('success') }}
                </div>
            @endif
            @if($errors->any())
                <div class="form-info form-info--error">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        </div>
        @if(session('success'))
            <a href="{{ route('home') }}" class="form__button form__button--mark">Tornar</a>
        @endif
        <input type="submit" value="Esborrar" class="form__button form__button--mark" id="deleteBtn">
    </form>
@elseif ($type == 'update')
    <form action="{{ route('updating.post', ['id' => $article->id]) }}" method="post" class="form article">
        @csrf
        <div class="form__group">
            <label for="title" class="form__label">Titol</label>
            <input type="text" id="title" name="title" class="form__input" value="{{ $article->title ?? '' }}">
        </div>
        <div class="form__group">
            <label for="content" class="form__label">Contingut</label>
            <textarea name="content" id="content" class="form__textarea" maxlength="200">{{$article->content ?? '' }}</textarea>
        </div>
        <div id="responseContainer" class="response-container">
            @if(session('success'))
                <div class="form-info form-info--success">
                    {{ session('success') }}
                </div>
                
            @endif
            @if($errors->any())
                <div class="form-info form-info--error">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        </div>
        @if(session('success'))
            <a href="{{ route('home') }}" class="form__button form__button--mark">Tornar</a>
        @endif
        <input type="submit" value="Modificar" class="form__button form__button--mark">
    </form>

    @elseif ($type == 'read')
        <div class="content__title">{{ $article->title ?? 'LLegint l\'article' }}</div>
        <div class="content__body reading__body">
                <p class="article__content">{{ $article->content ?? '' }}</p>
        </div>
@endif
