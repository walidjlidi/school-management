@php($material = $material ?? null)
@csrf
<div class="mb-4">
    <label class="block mb-1">العنوان</label>
    <input type="text" name="title" class="w-full border rounded px-3 py-2" value="{{ old('title', $material->title ?? '') }}" required>
</div>
<div class="mb-4">
    <label class="block mb-1">المعلم</label>
    <select name="tutor_id" class="w-full border rounded px-3 py-2" required>
        @foreach($tutors as $tutor)
            <option value="{{ $tutor->id }}" @selected(old('tutor_id', $material->tutor_id ?? '') == $tutor->id)>{{ $tutor->first_name }} {{ $tutor->last_name }}</option>
        @endforeach
    </select>
</div>
<div class="mb-4">
    <label class="block mb-1">الوصف</label>
    <textarea name="description" class="w-full border rounded px-3 py-2" rows="3">{{ old('description', $material->description ?? '') }}</textarea>
</div>
<button type="submit" class="bg-gray-800 text-white px-4 py-2 rounded">حفظ</button>
