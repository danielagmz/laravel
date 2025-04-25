<tr class="user_row" data-id="{{ $user->id }}">
    <td class="user_name">
        <div class="user_image">
            <img src="{{ (!$user->avatar) ? asset('assets/cats-nose.webp') : asset('storage/' . $user->avatar ) }}" alt="user">
        </div>
        {{ $user->username }}
    </td>
    <td class="user_created">{{ $user->created_at }}</td>
    <td class="user_updated">{{ $user->updated_at }}</td>
    <td class="user_actions">
        <div class="actions-container">
            <button id="user-{{ $user->id }}" class="action-button action-button--delete-user"><i class="fi fi-rr-trash"></i></button>
        </div>
    </td>
</tr>