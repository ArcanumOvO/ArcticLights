<div class="employee">
    <div class="employee__image">
        <img src="{{ Voyager::image($employee->image) ?: '/images/team/no-photo.jpg' }}" alt="{{ $employee->name }}">
    </div>
    <div class="employee__content">
        <div class="text-block text-block--white">
            <p>{{ $employee->name }}</p>
            <p><small>{{ $employee->description }}</small></p>
        </div>
    </div>
</div>
