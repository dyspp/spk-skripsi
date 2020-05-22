@extends('admin.master')

@section('title', 'Dashboard')

@section('content')
@include('admin.partials.alert-messages')
<div class="row mb-3">
    <div class="col-12">
        <div class="card shadow-sm mb-0">
            <div class="card-body">
                <h2 class="m-0">Welcome to the Dashboard!</h2>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card dashboard-card shadow-sm">
            <div class="card-body">
                <div class="dashboard-card-item">
                    <div class="dashboard-card-item-icon text-purple">
                        <i class="fas fa-circle-notch fa-rotate-90"></i>
                    </div>
                    <div class="dashboard-card-item-stats">
                        <h4><strong>{{ $criteriaCount }}</strong></h4>
                        <p>Criteria</p>
                    </div>
                </div>
                <div class="dashboard-card-footer">
                    <a class="btn btn-block btn-purple" href="{{ route('criteria.index') }}"><i class="fas fa-link mr-2"></i>Visit</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card dashboard-card shadow-sm">
            <div class="card-body">
                <div class="dashboard-card-item">
                    <div class="dashboard-card-item-icon text-success">
                        <i class="fas fa-circle-notch fa-rotate-90"></i>
                    </div>
                    <div class="dashboard-card-item-stats">
                        <h4><strong>{{ $criterionScoresCount }}</strong></h4>
                        <p>Criterion Scores</p>
                    </div>
                </div>
                <div class="dashboard-card-footer">
                    <a class="btn btn-block btn-success" href="{{ route('criterionscores.index') }}"><i class="fas fa-link mr-2"></i>Visit</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card dashboard-card shadow-sm">
            <div class="card-body">
                <div class="dashboard-card-item">
                    <div class="dashboard-card-item-icon text-info">
                        <i class="fas fa-circle-notch fa-rotate-90"></i>
                    </div>
                    <div class="dashboard-card-item-stats">
                        <h4><strong>{{ $alternativesCount }}</strong></h4>
                        <p>Alternatives</p>
                    </div>
                </div>
                <div class="dashboard-card-footer">
                    <a class="btn btn-block btn-info" href="{{ route('alternatives.index') }}"><i class="fas fa-link mr-2"></i>Visit</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card dashboard-card shadow-sm">
            <div class="card-body">
                <div class="dashboard-card-item">
                    <div class="dashboard-card-item-icon text-secondary">
                        <i class="fas fa-circle-notch fa-rotate-90"></i>
                    </div>
                    <div class="dashboard-card-item-stats">
                        <h4><strong>{{ $alternativeScoresCount }}</strong></h4>
                        <p>Alternative Scores</p>
                    </div>
                </div>
                <div class="dashboard-card-footer">
                    <a class="btn btn-block btn-secondary" href="{{ route('alternativescores.index') }}"><i class="fas fa-link mr-2"></i>Visit</a>
                </div>
            </div>
        </div>
    </div>
    @if(Auth::user()->isSuperAdmin())
    <div class="col-lg-4">
        <div class="card dashboard-card shadow-sm">
            <div class="card-body">
                <div class="dashboard-card-item">
                    <div class="dashboard-card-item-icon text-danger">
                        <i class="fas fa-circle-notch fa-rotate-90"></i>
                    </div>
                    <div class="dashboard-card-item-stats">
                        <h4><strong>{{ $adminsCount }}</strong></h4>
                        <p>Admins</p>
                    </div>
                </div>
                <div class="dashboard-card-footer">
                    <a class="btn btn-block btn-danger" href="{{ route('admin.manage_admins') }}"><i class="fas fa-link mr-2"></i>Visit</a>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection