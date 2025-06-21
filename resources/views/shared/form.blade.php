@csrf
<div class="mb-3">
    <label class="form-label">First Name</label>
    <input type="text" name="first_name" class="form-control" value="{{ old('first_name', $item->first_name ?? '') }}" required>
</div>
<div class="mb-3">
    <label class="form-label">Last Name</label>
    <input type="text" name="last_name" class="form-control" value="{{ old('last_name', $item->last_name ?? '') }}" required>
</div>
<div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" name="email" class="form-control" value="{{ old('email', $item->email ?? '') }}" required>
</div>
@if(isset($tutors))
<div class="mb-3">
    <label class="form-label">Tutor</label>
    <select name="tutor_id" class="form-select" required>
        @foreach($tutors as $tutor)
            <option value="{{ $tutor->id }}" @selected(old('tutor_id', $item->tutor_id ?? '') == $tutor->id)>{{ $tutor->first_name }} {{ $tutor->last_name }}</option>
        @endforeach
    </select>
</div>
@endif
<div class="mb-3">
    <label class="form-label">Description</label>
    <textarea name="description" class="form-control" rows="3">{{ old('description', $item->description ?? '') }}</textarea>
</div>
<button type="submit" class="btn btn-primary">Save</button>
