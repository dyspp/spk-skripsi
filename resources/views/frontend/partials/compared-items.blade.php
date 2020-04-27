<div class="compared-item">
    @if($firstItem != null)
    <img src="{{ asset('images/alternatives/' .$firstItem->image) }}" alt="">
    <p>{{ $firstItem->name }}</p>
    @else
    <strong>Please choose an item first. ;)</strong>
    @endif
</div>
<div class="compared-item">
    @if($secondItem != null)
    <img src="{{ asset('images/alternatives/' .$secondItem->image) }}" alt="">
    <p>{{ $secondItem->name }}</p>
    @else
    <strong>Please choose an item first. ;)</strong>
    @endif
</div>