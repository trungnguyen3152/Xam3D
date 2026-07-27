@extends('admin.layouts.app')

@section('content')
<div class="container-fluid" style="padding-top: 20px; padding-bottom: 0;">
    <div class="card w-100" style="margin-bottom: 0;">
        <div class="card-body p-0" style="height: calc(100vh - 120px);">
            <!-- SVG-Edit Tool -->
            <iframe src="{{ asset('svgedit/editor/index.html') }}" style="width: 100%; height: 100%; border: none; border-radius: 7px;"></iframe>
        </div>
    </div>
</div>
@endsection
