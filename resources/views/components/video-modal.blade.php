<div x-data="{ open: false }" class="inline-block">
    <button @click="open = true" class="bg-green-700 text-white px-4 py-2 rounded flex items-center space-x-1 rtl:space-x-reverse">
        <i class="fa fa-plus"></i>
        <span>إضافة فيديو جديد</span>
    </button>
    <div x-show="open" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-40">
        <div class="bg-white rounded shadow w-96 p-6">
            <h2 class="text-lg font-bold mb-4">إضافة فيديو جديد</h2>
            <form>
                <input type="text" class="w-full border rounded mb-4 px-3 py-1" placeholder="عنوان الفيديو">
                <div class="flex justify-end space-x-2 rtl:space-x-reverse">
                    <button type="button" @click="open = false" class="px-4 py-2 bg-gray-300 rounded">إلغاء</button>
                    <button type="submit" class="px-4 py-2 bg-green-700 text-white rounded">حفظ</button>
                </div>
            </form>
        </div>
    </div>
</div>
