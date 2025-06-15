@php($tutor = $tutor ?? null)
@csrf
<div class="mb-4">
    <label class="block mb-1">First Name</label>
    <input type="text" name="first_name" class="w-full border rounded px-3 py-2" value="{{ old('first_name', $tutor->first_name ?? '') }}" required>
</div>
<div class="mb-4">
    <label class="block mb-1">Last Name</label>
    <input type="text" name="last_name" class="w-full border rounded px-3 py-2" value="{{ old('last_name', $tutor->last_name ?? '') }}" required>
</div>
<div class="mb-4">
    <label class="block mb-1">Email</label>
    <input type="email" name="email" class="w-full border rounded px-3 py-2" value="{{ old('email', $tutor->email ?? '') }}" required>
</div>
<div class="mb-4">
    <label class="block mb-1">Specialization</label>
    <input type="text" name="specialization" class="w-full border rounded px-3 py-2" value="{{ old('specialization', $tutor->specialization ?? '') }}" required>
</div>
<button type="submit" class="bg-gray-800 text-white px-4 py-2 rounded">Save</button>
