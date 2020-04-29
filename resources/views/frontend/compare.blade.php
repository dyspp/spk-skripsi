@extends('frontend.master')

@section('title', 'Compare')

@section('content')
<div class="container-compare">
    <div class="compare-header">
        <h3><i class="fas fa-info-circle mr-2"></i>You can select up to <span>four</span> laptops to compare.</h3>
        <hr>
    </div>
    <div class="compare-searchbars-container">
        <div class="compare-searchbar-wrapper">
            <div class="spinner-border spinner-border-sm text-secondary-dy"></div>
            <input type="text" name="firstCompareItem" data-item-id="{{ $firstItem != null ? $firstItem->id : '' }}" value="{{ $firstItem != null ? $firstItem->name : '' }}" class="form-control compare-searchbar" placeholder="Search laptop">
            <div class="compare-search-results-wrapper">
                <div class="compare-search-results"></div>
            </div>
        </div>
        <div class="compare-searchbar-wrapper">
            <div class="spinner-border spinner-border-sm text-secondary-dy"></div>
            <input type="text" name="secondCompareItem" data-item-id="{{ $secondItem != null ? $secondItem->id : '' }}" value="{{ $secondItem != null ? $secondItem->name : '' }}" class="form-control compare-searchbar" placeholder="Search laptop">
            <div class="compare-search-results-wrapper">
                <div class="compare-search-results"></div>
            </div>
        </div>
        <div class="compare-searchbar-wrapper">
            <div class="spinner-border spinner-border-sm text-secondary-dy"></div>
            <input type="text" name="thirdCompareItem" data-item-id="{{ $thirdItem != null ? $thirdItem->id : '' }}" value="{{ $thirdItem != null ? $thirdItem->name : '' }}" class="form-control compare-searchbar" placeholder="Search laptop">
            <div class="compare-search-results-wrapper">
                <div class="compare-search-results"></div>
            </div>
        </div>
        <div class="compare-searchbar-wrapper">
            <div class="spinner-border spinner-border-sm text-secondary-dy"></div>
            <input type="text" name="fourthCompareItem" data-item-id="{{ $fourthItem != null ? $fourthItem->id : '' }}" value="{{ $fourthItem != null ? $fourthItem->name : '' }}" class="form-control compare-searchbar" placeholder="Search laptop">
            <div class="compare-search-results-wrapper">
                <div class="compare-search-results"></div>
            </div>
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