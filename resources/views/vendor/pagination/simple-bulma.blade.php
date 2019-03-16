@if ($paginator->hasPages())
    <nav class="pagination is-centered" role="navigation" aria-label="pagination">

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="pagination-previous" disabled>Previous</a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="pagination-previous">Previous</a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="pagination-next">Next page</a>
        @else
            <a class="pagination-next" disabled>Next page</a>
        @endif

    </nav>
@endif
