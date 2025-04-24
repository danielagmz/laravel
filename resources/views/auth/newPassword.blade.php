<x-layout>
    @vite(['resources/js/showme.js'])
  <main class="content">
    <div class="content__title">Canviar contrasenya</div>
    <div class="content__body">
        <form action="{{ route('password.update') }}" method="post" class="form article">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <input type="hidden" name="email" value="{{ $email }}">
            <div class="form__group">
                <label for="newPassword" class="form__label">Contrasenya nova</label>
                <div class="input__group--pass">
                    <input type="password" id="newPassword" name="password" class="form__input" value="<?= isset($newPassword) ? $newPassword : '' ?>">
                    <i class="fi fi-rr-eye showme"></i>
                </div>
            </div>
            <div class="form__group">
                <label for="verifyPassword" class="form__label">Confirmar contrasenya</label>
                <div class="input__group--pass">
                    <input type="password" id="verifyPassword" name="password_confirmation" class="form__input" value="<?= isset($verifyPassword) ? $verifyPassword : '' ?>">
                    <i class="fi fi-rr-eye showme"></i>
                </div>
            </div>
            @if ($errors->any())
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
            <input type="submit" value="Canviar contrasenya" class="form__button form__button--mark">
        </form>
    </div>
</main>
</x-layout>