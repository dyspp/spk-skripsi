@extends('frontend.master')

@section('title', 'Compare')

@section('content')
<div class="container-compare">
    <div class="compared-items-wrapper">
        <div class="compared-item">
            <div class="compare-searchbar-wrapper">
                <div class="spinner-border spinner-border-sm text-secondary-dy"></div>
                <input type="text" name="firstCompareItem" class="form-control compare-searchbar">
                <div class="compare-search-results-wrapper">
                    <div class="compare-search-results"></div>
                </div>
            </div>
            @if($firstItem != null)
            <img src="{{ asset('images/alternatives/' .$firstItem->image) }}" alt="">
            <p>{{ $firstItem->name }}</p>
            @endif
        </div>
        <div class="compared-item">
            <div class="compare-searchbar-wrapper">
                <div class="spinner-border spinner-border-sm text-secondary-dy"></div>
                <input type="text" name="secondCompareItem" class="form-control compare-searchbar">
                <div class="compare-search-results-wrapper">
                    <div class="compare-search-results"></div>
                </div>
            </div>
            @if($secondItem != null)
            <img src="{{ asset('images/alternatives/' .$secondItem->image) }}" alt="">
            <p>{{ $secondItem->name }}</p>
            @endif
        </div>
    </div>
    <div class="specs-wrapper">
        <div class="spec">
            <h4 class="spec-name">Price</h4>
            <div class="per-item-spec-wrapper">
                <div class="per-item-spec"><p>{{ ($firstItem != null) ? formatPrice($firstItem->price) : "" }}</p></div>
                <div class="per-item-spec"><p>{{ ($secondItem != null) ? formatPrice($secondItem->price) : "" }}</p></div>
            </div>
        </div>
        <div class="spec">
            <h4 class="spec-name">Processor</h4>
            <div class="per-item-spec-wrapper">
                <div class="per-item-spec"><p>{{ ($firstItem != null) ? $firstItem->processor : "" }}</p></div>
                <div class="per-item-spec"><p>{{ ($secondItem != null) ? $secondItem->processor : "" }}</p></div>
            </div>
        </div>
        <div class="spec">
            <h4 class="spec-name">GPU</h4>
            <div class="per-item-spec-wrapper">
                <div class="per-item-spec"><p>{{ ($firstItem != null) ? $firstItem->gpu : "" }}</p></div>
                <div class="per-item-spec"><p>{{ ($secondItem != null) ? $secondItem->gpu : "" }}</p></div>
            </div>
        </div>
        <div class="spec">
            <h4 class="spec-name">Memory (RAM)</h4>
            <div class="per-item-spec-wrapper">
                <div class="per-item-spec"><p>{{ ($firstItem != null) ? $firstItem->ram." GB" : "" }}</p></div>
                <div class="per-item-spec"><p>{{ ($secondItem != null) ? $secondItem->ram." GB" : "" }}</p></div>
            </div>
        </div>
        <div class="spec">
            <h4 class="spec-name">Storage</h4>
            <div class="per-item-spec-wrapper">
                <div class="per-item-spec"><p>{{ ($firstItem != null) ? $firstItem->storage : "" }}</p></div>
                <div class="per-item-spec"><p>{{ ($secondItem != null) ? $secondItem->storage : "" }}</p></div>
            </div>
        </div>
        <div class="spec">
            <h4 class="spec-name">Display</h4>
            <div class="per-item-spec-wrapper">
                <div class="per-item-spec"><p>{{ ($firstItem != null) ? $firstItem->display : "" }}</p></div>
                <div class="per-item-spec"><p>{{ ($secondItem != null) ? $secondItem->display : "" }}</p></div>
            </div>
        </div>
        <div class="spec">
            <h4 class="spec-name">Unit Weight</h4>
            <div class="per-item-spec-wrapper">
                <div class="per-item-spec"><p>{{ ($firstItem != null) ? $firstItem->unit_weight." Kg" : "" }}</p></div>
                <div class="per-item-spec"><p>{{ ($secondItem != null) ? $secondItem->unit_weight." Kg" : "" }}</p></div>
            </div>
        </div>
        <div class="spec">
            <h4 class="spec-name">Connectivity</h4>
            <div class="per-item-spec-wrapper">
                <div class="per-item-spec">
                    @if($firstItem != null)
                    @foreach(stringToList($firstItem->connectivity) as $connectivity)
                        <li>{{ $connectivity }}</li>
                    @endforeach
                    @endif
                </div>
                <div class="per-item-spec">
                    @if($secondItem != null)
                    @foreach(stringToList($secondItem->connectivity) as $connectivity)
                        <li>{{ $connectivity }}</li>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
        <div class="spec">
            <h4 class="spec-name">Ports</h4>
            <div class="per-item-spec-wrapper">
                <div class="per-item-spec">
                    @if($firstItem != null)
                    @foreach(stringToList($firstItem->ports) as $port)
                        <li>{{ $port }}</li>
                    @endforeach
                    @endif
                </div>
                <div class="per-item-spec">
                    @if($secondItem != null)
                    @foreach(stringToList($secondItem->ports) as $port)
                        <li>{{ $port }}</li>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
        <div class="spec">
            <h4 class="spec-name">Features</h4>
            <div class="per-item-spec-wrapper">
                <div class="per-item-spec">
                    @if($firstItem != null)
                    @foreach(stringToList($firstItem->features) as $feature)
                        <li>{{ $feature }}</li>
                    @endforeach
                    @endif
                </div>
                <div class="per-item-spec">
                    @if($secondItem != null)
                    @foreach(stringToList($secondItem->features) as $feature)
                        <li>{{ $feature }}</li>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection