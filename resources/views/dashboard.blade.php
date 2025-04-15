<x-layout>
  <main class="content settings">
    <div class="settings-banner">
    </div>
    <div class="settings-body--bento">
        <form class=" settings-body__element profile" action="index.php?action=update_info" method="post">
            <div class="profile__info">
                <div class="profile__info-group">
                    <label class="profile__label content__title" for="username"><i class="fi fi-rr-circle-user"></i> Usuari</label>
                    <input class="profile__input" type="text" value="" name="username" id="username">
                </div>
                <div class="profile__info-group">
                    <label class="profile__label content__title" for="email"><i class="fi fi-rr-at"></i> Email</label>
                    @if (!isset($_SESSION['SocialProvider']))
                        <input class="profile__input" type="email" value="" name="email" id="email">
                    @endif
                    @if (isset($_SESSION['SocialProvider']))
                        <input class="profile__input disabled--opacity" type="email" value="" name="email" id="email" readonly>
                    @endif
                </div>
            </div>

            <div class="profile__bio">
                <label class="profile__label content__title" for="bio"><i class="fi fi-rr-info"></i> Descripció</label>
                <textarea
                    class="profile__textarea bio__textarea"
                    name="bio"
                    id="bio"
                    placeholder="Escriu una cosa interessant sobre tu.."></textarea>

            </div>
            <div class="profile__actions">
                <input type="submit" value="Guardar" class="form__button settings__button settings__button--save">
            </div>
        </form>
        <div class="settings-body__element customize">
            <h1 class="settings-body__element-title customize__title content__title"><i class="fi fi-rr-palette"></i> Personalitzar</h1>
            <div class="customize__buttons">
                <button class="form__button settings__button edit-avatar__button"><i class="fi fi-rr-pen-square"></i> Editar imatge</button>
                <button class="form__button settings__button edit-banner__button"><i class="fi fi-rr-pen-square"></i> Editar portada</button>
            </div>
        </div>
        <div class="settings-body__element change-password text__align--center <?= isset($_SESSION['SocialProvider']) ? 'disabled disabled--opacity' : '' ?>">
            @if (!isset($_SESSION['SocialProvider']))
                <h1 class="settings-body__element-title change-password__title content__title"><i class="fi fi-rr-password-lock"></i> Canviar contrasenya</h1>
                <button class="form__button settings__button change-password__button">Canviar contrasenya</button>
            @endif
            @if (isset($_SESSION['SocialProvider']))
                <div class="settings-body__element-title change-password__title content__title"><i class="fi fi-rr-password-lock"></i> t'has logat amb una compte social</div>
                <button class="form__button settings__button change-password__button">No pots canviar la contrasenya</button>
            @endif
        </div>
        <div class="settings-body__element delete-account text__align--center">
            <h1 class="settings-body__element-title delete-account__title content__title"><i class="fi fi-rr-user-xmark"></i> Eliminar compte</h1>
            @if (!isset($_SESSION['SocialProvider']))
                <button id="delete-account" class="form__button settings__button settings__button--red delete-account__button">Eliminar compte</button>
            @endif
            @if (isset($_SESSION['SocialProvider']))
                <button class="form__button settings__button settings__button--red delete-SocialUser__button"
                    onclick="location.href='mailto:admin@dgamez.cat?subject=Consulta sobre la eliminació del compte&body=Hola, necessito ajuda amb la meva compte...'">
                    Contacta amb l'admin
                </button>
            @endif
        </div>
    </div>
</main>
</x-layout>