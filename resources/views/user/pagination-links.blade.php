@if ($paginator->hasPages())
    <div class="container">
        <div class="pages">
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next"><button class="button">Load more</button></a>
            @else
                <button class="button disabled">Load more</button>
            @endif
        </div>
    </div>
@endif
