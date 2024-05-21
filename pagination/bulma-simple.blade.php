@if ($paginator->hasPages())
    <nav class="pagination is-centered" role="navigation" aria-label="pagination">

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="pagination-previous is-disabled">{!! __('pagination.previous') !!}</a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="pagination-previous">{!! __('pagination.previous') !!}</a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="pagination-next">{!! __('pagination.next') !!}</a>
        @else
            <a class="pagination-next is-disabled">{!! __('pagination.next') !!}</a>
        @endif

    </nav>
@endif
