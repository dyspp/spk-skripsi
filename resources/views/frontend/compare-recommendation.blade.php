@extends('frontend.master')

@section('title', 'Recommendation Compare Result')

@section('content')
<div class="container-compare">
    <button class="btn btn-outline-primary mb-2" style="max-width: fit-content;" id="closeButton"><i class="fas fa-times mr-2"></i>Close</button>
    @if(isset($noResult))
        <div class="alert alert-info" style="width: 100%; text-align: center;">
            <strong>Nothing to compare.</strong>
        </div>
    @else
        <div class="compared-items-wrapper">
            @if($firstItem != null)
                <div class="compared-item rec">
                    <img src="{{ asset('images/alternatives/' .$firstItem->image) }}" alt="">
                    <p>{{ $firstItem->name }}</p>
                </div>
            @endif
            @if($secondItem != null)
                <div class="compared-item rec">
                    <img src="{{ asset('images/alternatives/' .$secondItem->image) }}" alt="">
                    <p>{{ $secondItem->name }}</p>
                </div>
            @endif
            @if($thirdItem != null)
                <div class="compared-item rec">
                    <img src="{{ asset('images/alternatives/' .$thirdItem->image) }}" alt="">
                    <p>{{ $thirdItem->name }}</p>
                </div>
            @endif
            @if($fourthItem != null)
                <div class="compared-item rec">
                    <img src="{{ asset('images/alternatives/' .$fourthItem->image) }}" alt="">
                    <p>{{ $fourthItem->name }}</p>
                </div>
            @endif
        </div>
        <div class="specs-wrapper">
            {{-- Price --}}
            <div class="spec">
                <h4 class="spec-name">Price</h4>
                <div class="per-item-spec-wrapper">
                    @if($firstItem != null) <div class="per-item-spec rec"><p>{{ formatPrice($firstItem->price) }}</p></div> @endif
                    @if($secondItem != null) <div class="per-item-spec rec"><p>{{ formatPrice($secondItem->price) }}</p></div> @endif
                    @if($thirdItem != null) <div class="per-item-spec rec"><p>{{ formatPrice($thirdItem->price) }}</p></div> @endif
                    @if($fourthItem != null) <div class="per-item-spec rec"><p>{{ formatPrice($fourthItem->price) }}</p></div> @endif
                </div>
            </div>
            {{-- Processor --}}
            <div class="spec">
                <h4 class="spec-name">Processor</h4>
                <div class="per-item-spec-wrapper">
                    @if($firstItem != null) <div class="per-item-spec rec"><p>{{ $firstItem->processor }}</p></div> @endif
                    @if($secondItem != null) <div class="per-item-spec rec"><p>{{ $secondItem->processor }}</p></div> @endif
                    @if($thirdItem != null) <div class="per-item-spec rec"><p>{{ $thirdItem->processor }}</p></div> @endif
                    @if($fourthItem != null) <div class="per-item-spec rec"><p>{{ $fourthItem->processor }}</p></div> @endif
                </div>
            </div>
            {{-- GPU --}}
            <div class="spec">
                <h4 class="spec-name">GPU</h4>
                <div class="per-item-spec-wrapper">
                    @if($firstItem !=null) <div class="per-item-spec rec"><p>{{ $firstItem->gpu }}</p></div> @endif
                    @if($secondItem !=null) <div class="per-item-spec rec"><p>{{ $secondItem->gpu }}</p></div> @endif
                    @if($thirdItem !=null) <div class="per-item-spec rec"><p>{{ $thirdItem->gpu }}</p></div> @endif
                    @if($fourthItem !=null) <div class="per-item-spec rec"><p>{{ $fourthItem->gpu }}</p></div> @endif
                </div>
            </div>
            {{-- Memory (RAM) --}}
            <div class="spec">
                <h4 class="spec-name">Memory (RAM)</h4>
                <div class="per-item-spec-wrapper">
                    @if($firstItem != null) <div class="per-item-spec rec"><p>{{ $firstItem->ram." GB" }}</p></div> @endif
                    @if($secondItem != null) <div class="per-item-spec rec"><p>{{ $secondItem->ram." GB" }}</p></div> @endif
                    @if($thirdItem != null) <div class="per-item-spec rec"><p>{{ $thirdItem->ram." GB" }}</p></div> @endif
                    @if($fourthItem != null) <div class="per-item-spec rec"><p>{{ $fourthItem->ram." GB" }}</p></div> @endif
                </div>
            </div>
            {{-- Storage --}}
            <div class="spec">
                <h4 class="spec-name">Storage</h4>
                <div class="per-item-spec-wrapper">
                    @if($firstItem != null) <div class="per-item-spec rec"><p>{{ $firstItem->storage }}</p></div> @endif
                    @if($secondItem != null) <div class="per-item-spec rec"><p>{{ $secondItem->storage }}</p></div> @endif
                    @if($thirdItem != null) <div class="per-item-spec rec"><p>{{ $thirdItem->storage }}</p></div> @endif
                    @if($fourthItem != null) <div class="per-item-spec rec"><p>{{ $fourthItem->storage }}</p></div> @endif
                </div>
            </div>
            {{-- Display --}}
            <div class="spec">
                <h4 class="spec-name">Display</h4>
                <div class="per-item-spec-wrapper">
                    @if($firstItem != null) <div class="per-item-spec rec"><p>{{ $firstItem->display }}</p></div> @endif
                    @if($secondItem != null) <div class="per-item-spec rec"><p>{{ $secondItem->display }}</p></div> @endif
                    @if($thirdItem != null) <div class="per-item-spec rec"><p>{{ $thirdItem->display }}</p></div> @endif
                    @if($fourthItem != null) <div class="per-item-spec rec"><p>{{ $fourthItem->display }}</p></div> @endif
                </div>
            </div>
            {{-- Unit Weight --}}
            <div class="spec">
                <h4 class="spec-name">Unit Weight</h4>
                <div class="per-item-spec-wrapper">
                    @if($firstItem != null)<div class="per-item-spec rec"><p>{{ $firstItem->unit_weight." Kg" }}</p></div> @endif
                    @if($secondItem != null)<div class="per-item-spec rec"><p>{{ $secondItem->unit_weight." Kg" }}</p></div> @endif
                    @if($thirdItem != null)<div class="per-item-spec rec"><p>{{ $thirdItem->unit_weight." Kg" }}</p></div> @endif
                    @if($fourthItem != null)<div class="per-item-spec rec"><p>{{ $fourthItem->unit_weight." Kg" }}</p></div> @endif
                </div>
            </div>
            {{-- Connectivity --}}
            <div class="spec">
                <h4 class="spec-name">Connectivity</h4>
                <div class="per-item-spec-wrapper">
                    @if($firstItem != null)
                        <div class="per-item-spec rec">
                            @foreach(stringToList($firstItem->connectivity) as $connectivity)
                                <li>{{ $connectivity }}</li>
                            @endforeach
                        </div>
                    @endif
                    @if($secondItem != null)
                        <div class="per-item-spec rec">
                            @foreach(stringToList($secondItem->connectivity) as $connectivity)
                                <li>{{ $connectivity }}</li>
                            @endforeach
                        </div>
                    @endif
                    @if($thirdItem != null)
                        <div class="per-item-spec rec">
                            @foreach(stringToList($thirdItem->connectivity) as $connectivity)
                                <li>{{ $connectivity }}</li>
                            @endforeach
                        </div>
                    @endif
                    @if($fourthItem != null)
                        <div class="per-item-spec rec">
                            @foreach(stringToList($fourthItem->connectivity) as $connectivity)
                                <li>{{ $connectivity }}</li>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
            {{-- Ports --}}
            <div class="spec">
                <h4 class="spec-name">Ports</h4>
                <div class="per-item-spec-wrapper">
                    @if($firstItem != null)
                        <div class="per-item-spec rec">
                            @foreach(stringToList($firstItem->ports) as $port)
                                <li>{{ $port }}</li>
                            @endforeach
                        </div>
                    @endif
                    @if($secondItem != null)
                        <div class="per-item-spec rec">
                            @foreach(stringToList($secondItem->ports) as $port)
                                <li>{{ $port }}</li>
                            @endforeach
                        </div>
                    @endif
                    @if($thirdItem != null)
                        <div class="per-item-spec rec">
                            @foreach(stringToList($thirdItem->ports) as $port)
                                <li>{{ $port }}</li>
                            @endforeach
                        </div>
                    @endif
                    @if($fourthItem != null)
                        <div class="per-item-spec rec">
                            @foreach(stringToList($fourthItem->ports) as $port)
                                <li>{{ $port }}</li>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
            {{-- Features --}}
            <div class="spec">
                <h4 class="spec-name">Features</h4>
                <div class="per-item-spec-wrapper">
                    @if($firstItem != null)
                        <div class="per-item-spec rec">
                            @foreach(stringToList($firstItem->features) as $feature)
                                <li>{{ $feature }}</li>
                            @endforeach
                        </div>
                    @endif
                    @if($secondItem != null)
                        <div class="per-item-spec rec">
                            @foreach(stringToList($secondItem->features) as $feature)
                                <li>{{ $feature }}</li>
                            @endforeach
                        </div>
                    @endif
                    @if($thirdItem != null)
                        <div class="per-item-spec rec">
                            @foreach(stringToList($thirdItem->features) as $feature)
                                <li>{{ $feature }}</li>
                            @endforeach
                        </div>
                    @endif
                    @if($fourthItem != null)
                        <div class="per-item-spec rec">
                            @foreach(stringToList($fourthItem->features) as $feature)
                                <li>{{ $feature }}</li>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @endif
</div>
@endsection