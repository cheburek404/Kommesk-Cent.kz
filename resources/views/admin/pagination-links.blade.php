@if ($paginator->hasPages())
    <div class="container">
        <div class="pages">
            @if ($paginator->onFirstPage())
                <button class="btn disabled">Previous</button>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev"><button class="btn">Previous</button></a>
            @endif


            @foreach ($elements as $element)
                {{--@if (is_string($element))
                    <button class="btn btn-secondary disabled">{{ $element }}</button>
                @endif--}}

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <button class="btn element active">{{ $page }}</button>
                        @else
                            <a href="{{ $url }}"><button class="btn">{{ $page }}</button></a>
                        @endif
                    @endforeach
                @endif
            @endforeach


            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next"><button class="btn next">Next</button></a>
            @else
                <button class="btn next disabled">Next</button>
            @endif
        </div>
    </div>
@endif
