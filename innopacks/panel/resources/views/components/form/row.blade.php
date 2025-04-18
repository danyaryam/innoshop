<div class="form-row mb-3">
  @if ($title ?? false)
    @if($generate ?? false)
      <div class="row">
        <div class="col-8">
          <div class="col-form-label pe-3 {{ isset($required) && $required ? 'required' : '' }}">{{ $title }}</div>
        </div>
        <div class="col-4 d-flex justify-content-end py-2">
          <a class="btn btn-success btn-sm ai-generate" data-column="{{ $column ?? '' }}">{{ __('panel/common.ai_generate') }}</a>
        </div>
      </div>
    @else
      <div class="col-form-label pe-3 {{ isset($required) && $required ? 'required' : '' }}">{{ $title }}</div>
    @endif
  @endif

  <div class="flex-fill">
    {{ $slot }}
  </div>
</div>