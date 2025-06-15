@php($student = $student ?? null)
@csrf
<div class="mb-4">
    <label class="block mb-1">الاسم الأول</label>
    <input type="text" name="first_name" class="w-full border rounded px-3 py-2" value="{{ old('first_name', $student->first_name ?? '') }}" required>
</div>
<div class="mb-4">
    <label class="block mb-1">اسم العائلة</label>
    <input type="text" name="last_name" class="w-full border rounded px-3 py-2" value="{{ old('last_name', $student->last_name ?? '') }}" required>
</div>
<div class="mb-4">
    <label class="block mb-1">البريد الإلكتروني</label>
    <input type="email" name="email" class="w-full border rounded px-3 py-2" value="{{ old('email', $student->email ?? '') }}" required>
</div>
<div class="mb-4">
    <label class="block mb-1">تاريخ الميلاد</label>
    <input type="date" name="date_of_birth" class="w-full border rounded px-3 py-2" value="{{ old('date_of_birth', $student->date_of_birth ?? '') }}" required>
</div>
<button type="submit" class="bg-gray-800 text-white px-4 py-2 rounded">حفظ</button>
