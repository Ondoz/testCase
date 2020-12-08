@if ($paginator->hasPages())

<div class="card card-custom">
    <div class="card-body py-7">
        <div class="d-flex justify-content-between align-items-center flex-wrap">
            <div class="d-flex flex-wrap mr-3">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    {{-- <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1 disable">
                        <i class="ki ki-bold-double-arrow-back icon-xs"></i>
                    </a> --}}
                    @else
                    <a href="{{ $paginator->previousPageUrl() }}" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                        <i class="ki ki-bold-arrow-back icon-xs"></i>
                    </a>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <a href="javascript();" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">{{ $element }}</a>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <a href="javascript();" class="btn btn-icon btn-sm border-0 btn-hover-primary active mr-2 my-1">{{$page}}</a>
                            @else
                                <a href="{{$url}}" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">{{$page}}</a>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                        <i class="ki ki-bold-arrow-next icon-xs"></i>
                    </a>
                @else
                    {{-- <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1 disabled">
                        <i class="ki ki-bold-double-arrow-next icon-xs"></i>
                    </a> --}}
                @endif
                <div class="d-flex align-items-center">
                    <span class="text-muted">Displaying {{ $paginator->firstItem() }} to {{ $paginator->lastItem() }} of {{ $paginator->total() }} records</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
