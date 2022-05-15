<div class="progress">
    <div class="progress-bar {{ $progress_background }}" role="progressbar" style="width: {{ $percent_usage }}%" aria-valuenow="{{ $used_metric }}" aria-valuemin="0" aria-valuemax="{{ $total_metric }}">{{ $total_metric }} / {{ $used_metric }} ({{ $percent_usage }}%)</div>
</div>