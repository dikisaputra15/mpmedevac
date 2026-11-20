<strong style="font-size:12px;">Category:</strong>
@foreach (['National Police HQ', 'Police Station', 'Sub Police Station', 'Specialized Unit'] as $policeCategory)
    <label style="display:block;font-size:13px;margin-bottom:5px;">
        <input type="checkbox" name="policeCategory" value="{{ $policeCategory }}">
        {{ $policeCategory }} (<span id="count-{{ str_replace(' ', '-', $policeCategory) }}">0</span>)
    </label>
@endforeach
