<article tabindex="0" class="article" data-id="{{ $article?->id }}"> 
    <div class="article__header">
        <div class="article__icon"></div>
        <div class="article__title">{{ $article?->title }}</div>
    </div>
    <p class="article__body">{{  substr($article?->content, 0, 200) }}...</p>
    <div class="article__footer">
        <span class="article__created"><i class="fi fi-rr-add-document icon"></i>{{ $article?->created_at }}</span>

        @if (Auth::user()?->id)
        <span class="article__updated"><i class="fi fi-rr-edit icon"></i>{{ $article?->updated_at }}</span>
        @else
        <span class="article__author"><i class="fi fi-rr-user icon"></i>{{ $article?->author?->username ?? 'eliminat' }}</span>
        @endif
    </div>  
</article>