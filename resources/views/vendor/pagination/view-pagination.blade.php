<div class="row">
    <div class="col-lg-12 text-center">
        @if ($paginator->hasPages())
        <div class="pagination-wrap">
            <ul>
                @if ($paginator->onFirstPage())
                <li><a href="" tabindex="-1">Prev</a></li>
                @else
                <li><a href="{{ $paginator->previousPageUrl() }}">Previous</a></li>
                @endif
                @foreach ($elements as $element)
                @if (is_string($element))
                <li><a   href="">{{ $element }}</a></li>
                @endif
                @if (is_array($element))
                @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                <li><a class="active" href="">{{ $page }}</a></li>
                @else
                <li><a href="{{ $url }}">{{ $page }}</a></li>
                @endif
                @endforeach
                @endif
                @endforeach
                @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">Next</a></li>
                @else
                <li> <a href="">Next</a> </li>
                @endif
            </ul>
        </div>
        @endif
    </div>
</div>
