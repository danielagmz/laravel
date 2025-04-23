<x-layout>
    @vite(['resources/js/dialog.js'])
    
    <dialog class="dialog dialog__delete-user">
        <div class="dialog__content">
            <button class="dialog__close"><i class="fi fi-rr-cross"></i></button>
            <div class="content__body">
                <form id="deleteUserForm" method="post" class="form article" enctype="multipart/form-data">
                    @csrf
                    <div class="content__title">Estas segur?</div>
                    <input type="hidden" id="user-id" name="user-id" class="form__input">
                    <div id="deleteUserResponse" class="response-container"></div>
                    <input type="submit" value="Eliminar compte" id="delete-account"
                        class="form__button banner__button banner__button--red delete-account__button"></input>
                </form>
            </div>
    </dialog>
    <main class="content">
        <div class="content__title">Gestió d'usuaris</div>
        <x-shared.search_bar :links="$users->links('components.shared.pagination')"></x-shared.search_bar>
        <div class="content__body--table article">
            <table class="user-table">
                <thead>
                    <tr class="user-table__header">
                        <th><i class="fi fi-rr-user"></i> Usuari</th>
                        <th><i class="fi fi-rr-user-add"></i> Creació</th>
                        <th><i class="fi fi-rr-user-pen"></i> Actualització</th>
                    </tr>
                </thead>
                <tbody> 
                    @foreach ($users as $user) 
                    <x-user-l-item :user="$user"></x-user-l-item> 
                    @endforeach 
                </tbody>
            </table>
        </div>
    </main>
</x-layout>
