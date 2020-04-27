@extends('frontend.master')

@section('title', 'Compare')

@section('content')
<div class="container-compare">
    <div class="compare-searchbars-container">
        <div class="compare-searchbar-wrapper">
            <div class="spinner-border spinner-border-sm text-secondary-dy"></div>
            <input type="text" name="firstCompareItem" data-item-id="{{ $firstItem != null ? $firstItem->id : '' }}" value="{{ $firstItem != null ? $firstItem->name : '' }}" class="form-control compare-searchbar">
            <div class="compare-search-results-wrapper">
                <div class="compare-search-results"></div>
            </div>
            <span>Type at least 3 characters</span>
        </div>
        <div class="compare-searchbar-wrapper">
            <div class="spinner-border spinner-border-sm text-secondary-dy"></div>
            <input type="text" name="secondCompareItem" data-item-id="{{ $secondItem != null ? $secondItem->id : '' }}" value="{{ $secondItem != null ? $secondItem->name : '' }}" class="form-control compare-searchbar">
            <div class="compare-search-results-wrapper">
                <div class="compare-search-results"></div>
            </div>
            <span>Type at least 3 characters</span>
        </div>
    </div>
    <div class="compared-items-wrapper">
        @include('frontend.partials.compared-items')
    </div>
    <div class="specs-wrapper">
        @include('frontend.partials.compared-items-specs')
    </div>
</div>
@endsection