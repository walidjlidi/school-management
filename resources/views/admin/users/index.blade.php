@extends('layouts.admin')

@section('content')
<h1 class="text-xl font-bold mb-4">المستخدمون</h1>
<table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
        <tr>
            <th class="px-3 py-2">#</th>
            <th class="px-3 py-2">الاسم</th>
            <th class="px-3 py-2">البريد الإلكتروني</th>
            <th class="px-3 py-2">الدور</th>
            <th class="px-3 py-2">نشط</th>
            <th class="px-3 py-2">إجراءات</th>
        </tr>
    </thead>
    <tbody class="divide-y divide-gray-200">
        @foreach($users as $user)
            <tr>
                <form method="POST" action="{{ route('admin.users.update', $user) }}" class="contents">
                    @csrf
                    @method('PUT')
                    <td class="px-3 py-2">{{ $user->id }}</td>
                    <td class="px-3 py-2">{{ $user->name }}</td>
                    <td class="px-3 py-2">{{ $user->email }}</td>
                    <td class="px-3 py-2">
                        <select name="role" class="border rounded px-2 py-1">
                            <option value="student" @selected($user->role=='student')>طالب</option>
                            <option value="tutor" @selected($user->role=='tutor')>معلم</option>
                        </select>
                    </td>
                    <td class="px-3 py-2 text-center">
                        <input type="checkbox" name="is_active" value="1" @checked($user->is_active)>
                    </td>
                    <td class="px-3 py-2">
                        <button class="bg-gray-800 text-white px-3 py-1 rounded">حفظ</button>
                    </td>
                </form>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
