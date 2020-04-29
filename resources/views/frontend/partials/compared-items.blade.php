<div class="compared-item">
    @if($firstItem != null)
    <img src="{{ asset('images/alternatives/' .$firstItem->image) }}" alt="">
    <p>{{ $firstItem->name }}</p>
    @else
    <i class="fas fa-laptop mb-3 mt-3"></i>
    <p>Select laptop to compare.</p>
    @endif
</div>
<div class="compared-item">
    @if($secondItem != null)
    <img src="{{ asset('images/alternatives/' .$secondItem->image) }}" alt="">
    <p>{{ $secondItem->name }}</p>
    @else
    <i class="fas fa-laptop mb-3 mt-3"></i>
    <p>Select laptop to compare.</p>
    @endif
</div>
<div class="compared-item">
    @if($thirdItem != null)
    <img src="{{ asset('images/alternatives/' .$thirdItem->image) }}" alt="">
    <p>{{ $thirdItem->name }}</p>
    @else
    <i class="fas fa-laptop mb-3 mt-3"></i>
    <p>Select laptop to compare.</p>
    @endif
</div>
<div class="compared-item">
    @if($fourthItem != null)
    <img src="{{ asset('images/alternatives/' .$fourthItem->image) }}" alt="">
    <p>{{ $fourthItem->name }}</p>
    @else
    <i class="fas fa-laptop mb-3 mt-3"></i>
    <p>Select laptop to compare.</p>
    @endif
</div>