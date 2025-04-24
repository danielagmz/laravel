<x-layout>
  <main class="content">
    <div class="content__title">Recuperar contrasenya</div>
    <div class="content__body">
        <form action="{{ route('forgotPassword') }}" method="post" class="form article">
            @csrf
            <div class="form__group">
                <label class="form__label" for="email">Introdueix el teu email:</label>
                <input class="form__input" value="{{ old('email') }}" placeholder="patato123@correo.com" type="email" name="email" id="email" required />
            </div>
            @if($errors->any())
                <div class="form-info form-info--error">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            @if(session('success'))
                <div class="form-info form-info--success">
                    {{ session('success') }}
                </div>
            @endif
            <input type="submit" value="Enviar enllaç" class="form__button form__button--mark">
            <hr>
            <div class="content__subtitle limit-p"><i class="fi fi-rr-comment-info "></i> El correu ha de ser el que s'ha utilitzat per crear el compte</div>
        </form>
    </div>
</main>
</x-layout>