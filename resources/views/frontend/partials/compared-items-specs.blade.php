<div class="spec">
    <h4 class="spec-name">Price</h4>
    <div class="per-item-spec-wrapper">
        <div class="per-item-spec"><p>{{ ($firstItem != null) ? formatPrice($firstItem->price) : "" }}</p></div>
        <div class="per-item-spec"><p>{{ ($secondItem != null) ? formatPrice($secondItem->price) : "" }}</p></div>
        <div class="per-item-spec"><p>{{ ($thirdItem != null) ? formatPrice($thirdItem->price) : "" }}</p></div>
        <div class="per-item-spec"><p>{{ ($fourthItem != null) ? formatPrice($fourthItem->price) : "" }}</p></div>
    </div>
</div>
<div class="spec">
    <h4 class="spec-name">Processor</h4>
    <div class="per-item-spec-wrapper">
        <div class="per-item-spec"><p>{{ ($firstItem != null) ? $firstItem->processor : "" }}</p></div>
        <div class="per-item-spec"><p>{{ ($secondItem != null) ? $secondItem->processor : "" }}</p></div>
        <div class="per-item-spec"><p>{{ ($thirdItem != null) ? $thirdItem->processor : "" }}</p></div>
        <div class="per-item-spec"><p>{{ ($fourthItem != null) ? $fourthItem->processor : "" }}</p></div>
    </div>
</div>
<div class="spec">
    <h4 class="spec-name">GPU</h4>
    <div class="per-item-spec-wrapper">
        <div class="per-item-spec"><p>{{ ($firstItem != null) ? $firstItem->gpu : "" }}</p></div>
        <div class="per-item-spec"><p>{{ ($secondItem != null) ? $secondItem->gpu : "" }}</p></div>
        <div class="per-item-spec"><p>{{ ($thirdItem != null) ? $thirdItem->gpu : "" }}</p></div>
        <div class="per-item-spec"><p>{{ ($fourthItem != null) ? $fourthItem->gpu : "" }}</p></div>
    </div>
</div>
<div class="spec">
    <h4 class="spec-name">Memory (RAM)</h4>
    <div class="per-item-spec-wrapper">
        <div class="per-item-spec"><p>{{ ($firstItem != null) ? $firstItem->ram." GB" : "" }}</p></div>
        <div class="per-item-spec"><p>{{ ($secondItem != null) ? $secondItem->ram." GB" : "" }}</p></div>
        <div class="per-item-spec"><p>{{ ($thirdItem != null) ? $thirdItem->ram." GB" : "" }}</p></div>
        <div class="per-item-spec"><p>{{ ($fourthItem != null) ? $fourthItem->ram." GB" : "" }}</p></div>
    </div>
</div>
<div class="spec">
    <h4 class="spec-name">Storage</h4>
    <div class="per-item-spec-wrapper">
        <div class="per-item-spec"><p>{{ ($firstItem != null) ? $firstItem->storage : "" }}</p></div>
        <div class="per-item-spec"><p>{{ ($secondItem != null) ? $secondItem->storage : "" }}</p></div>
        <div class="per-item-spec"><p>{{ ($thirdItem != null) ? $thirdItem->storage : "" }}</p></div>
        <div class="per-item-spec"><p>{{ ($fourthItem != null) ? $fourthItem->storage : "" }}</p></div>
    </div>
</div>
<div class="spec">
    <h4 class="spec-name">Display</h4>
    <div class="per-item-spec-wrapper">
        <div class="per-item-spec"><p>{{ ($firstItem != null) ? $firstItem->display : "" }}</p></div>
        <div class="per-item-spec"><p>{{ ($secondItem != null) ? $secondItem->display : "" }}</p></div>
        <div class="per-item-spec"><p>{{ ($thirdItem != null) ? $thirdItem->display : "" }}</p></div>
        <div class="per-item-spec"><p>{{ ($fourthItem != null) ? $fourthItem->display : "" }}</p></div>
    </div>
</div>
<div class="spec">
    <h4 class="spec-name">Unit Weight</h4>
    <div class="per-item-spec-wrapper">
        <div class="per-item-spec"><p>{{ ($firstItem != null) ? $firstItem->unit_weight." Kg" : "" }}</p></div>
        <div class="per-item-spec"><p>{{ ($secondItem != null) ? $secondItem->unit_weight." Kg" : "" }}</p></div>
        <div class="per-item-spec"><p>{{ ($thirdItem != null) ? $thirdItem->unit_weight." Kg" : "" }}</p></div>
        <div class="per-item-spec"><p>{{ ($fourthItem != null) ? $fourthItem->unit_weight." Kg" : "" }}</p></div>
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
        <div class="per-item-spec">
            @if($thirdItem != null)
                @foreach(stringToList($thirdItem->connectivity) as $connectivity)
                    <li>{{ $connectivity }}</li>
                @endforeach
            @endif
        </div>
        <div class="per-item-spec">
            @if($fourthItem != null)
                @foreach(stringToList($fourthItem->connectivity) as $connectivity)
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
        <div class="per-item-spec">
            @if($thirdItem != null)
                @foreach(stringToList($thirdItem->ports) as $port)
                    <li>{{ $port }}</li>
                @endforeach
            @endif
        </div>
        <div class="per-item-spec">
            @if($fourthItem != null)
                @foreach(stringToList($fourthItem->ports) as $port)
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
        <div class="per-item-spec">
            @if($thirdItem != null)
                @foreach(stringToList($thirdItem->features) as $feature)
                    <li>{{ $feature }}</li>
                @endforeach
            @endif
        </div>
        <div class="per-item-spec">
            @if($fourthItem != null)
                @foreach(stringToList($fourthItem->features) as $feature)
                    <li>{{ $feature }}</li>
                @endforeach
            @endif
        </div>
    </div>
</div>