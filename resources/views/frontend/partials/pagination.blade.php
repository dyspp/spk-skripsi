@if ($paginator->hasPages())
    <nav class="pagination shadow-sm">
      {{-- Previous Page Link --}}
      @if ($paginator->onFirstPage())
         <div class="pagination-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
               <span class="pagination-link" aria-hidden="true">Prev</span>
         </div>
      @else
         <div class="pagination-item">
               <a class="pagination-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">Prev</a>
         </div>
      @endif

      {{-- Pagination Elements --}}
      @foreach ($elements as $element)
         {{-- "Three Dots" Separator --}}
         @if (is_string($element))
               <div class="pagination-item disabled" aria-disabled="true"><span class="pagination-link">{{ $element }}</span></div>
         @endif

         {{-- Array Of Links --}}
         @if (is_array($element))
               @foreach ($element as $page => $url)
                  @if ($page == $paginator->currentPage())
                     <div class="pagination-item active" aria-current="page"><span class="pagination-link">{{ $page }}</span></div>
                  @else
                     <div class="pagination-item"><a class="pagination-link" href="{{ $url }}">{{ $page }}</a></div>
                  @endif
               @endforeach
         @endif
      @endforeach

      {{-- Next Page Link --}}
      @if ($paginator->hasMorePages())
         <div class="pagination-item">
               <a class="pagination-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">Next</a>
         </div>
      @else
         <div class="pagination-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
               <span class="pagination-link" aria-hidden="true">Next</span>
         </div>
      @endif
    </nav>
@endif
