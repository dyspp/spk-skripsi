@extends('admin.dashboards.master')

@section('title', 'SAW Method')

@section('content')
<h3>Alternative Ranks</h3>

<ul>
@foreach($alternativeRanks as $alternativeRank)
   <li><strong>{{ $alternativeRank->rank }}</strong> - {{ $alternativeRank->alternative }} = <strong>{{ $alternativeRank->final_score }}</strong></li>
@endforeach
</ul>
@endsection('content')