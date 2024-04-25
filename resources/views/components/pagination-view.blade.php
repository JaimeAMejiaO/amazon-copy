<div>
    @if ($paginator->hasPages())
        <nav aria-label="Page navigation">
            <ul class="pagination mb-0">
                <li class="page-item {{ $paginator->onFirstPage() ? ' disabled' : '' }}">
                    <a class="page-link btn" wire:click="previousPage" wire:loading.attr="disabled" rel="prev">
                        <i class="fa-solid fa-chevron-left"></i>
                    </a>
                </li>
                @foreach ($elements as $element)
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            <li class="page-item {{ $page == $paginator->currentPage() ? ' active' : '' }}">
                                <a class="page-link {{ $page == $paginator->currentPage() ? ' btn btn-primary color' : '' }}" wire:click="gotoPage({{ $page }})" wire:loading.attr="disabled">{{ $page }}</a>
                            </li>
                        @endforeach
                    @endif
                @endforeach
                <li class="page-item {{ $paginator->hasMorePages() ? '' : ' disabled' }}">
                    <a class="page-link btn" wire:click="nextPage" wire:loading.attr="disabled" rel="next">
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                </li>
            </ul>
        </nav>
    @endif
</div>