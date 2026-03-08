@extends('layouts.app')

@section('content')
<div class="flex min-h-screen" dir="rtl">
    <x-sidebar />

    <!-- Main Content -->
    <main class="flex-grow p-10 bg-white min-h-screen">
        <div class="mb-10 flex justify-between items-end">
            <div>
                <h1 class="text-3xl font-black text-[var(--navy)] mb-2">الإعدادات</h1>
                <p class="text-slate-500 font-bold">تحكم في إعدادات حسابك والتفضيلات الخاصة بالتطبيق</p>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- بطاقة المعلومات الشخصية -->
            <div class="bg-white border border-slate-100 rounded-[2rem] p-8 shadow-sm hover:shadow-md transition-all">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="font-black text-xl text-[var(--navy)] flex items-center gap-2">
                        <span class="material-symbols-outlined text-[var(--primary)]">person_edit</span>
                        المعلومات الشخصية
                    </h3>
                </div>

                <div class="space-y-6">
                    <div class="flex items-center justify-between p-4 bg-slate-50 rounded-2xl border border-slate-100/50">
                        <div>
                            <p class="text-xs text-slate-400 font-bold mb-1 uppercase">الاسم الكامل</p>
                            <p class="font-bold text-[var(--navy)] text-lg">{{ auth()->user()->name ?? 'محمد الأحمد' }}</p>
                        </div>
                        <a class="text-sm font-black text-[var(--primary)] hover:underline" href="#">تعديل</a>
                    </div>

                    <div class="flex items-center justify-between p-4 bg-slate-50 rounded-2xl border border-slate-100/50">
                        <div>
                            <p class="text-xs text-slate-400 font-bold mb-1 uppercase">البريد الإلكتروني</p>
                            <p class="font-bold text-[var(--navy)] text-lg">{{ auth()->user()->email ?? 'm.ahmad@example.com' }}</p>
                        </div>
                        <a class="text-sm font-black text-[var(--primary)] hover:underline" href="#">تعديل</a>
                    </div>
                </div>
            </div>

            <!-- بطاقة الخصوصية والتنبيهات -->
            <div class="bg-white border border-slate-100 rounded-[2rem] p-8 shadow-sm hover:shadow-md transition-all">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="font-black text-xl text-[var(--navy)] flex items-center gap-2">
                        <span class="material-symbols-outlined text-[var(--primary)]">shield_lock</span>
                        الخصوصية والتنبيهات
                    </h3>
                </div>

                <div class="space-y-4">
                    <label class="flex items-center justify-between p-4 hover:bg-slate-50 rounded-2xl transition-colors cursor-pointer group">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-slate-400 group-hover:text-[var(--primary)] transition-colors">notifications_active</span>
                            <span class="text-sm font-bold text-slate-700">تلقي إشعارات عبر الجوال</span>
                        </div>
                        <input type="checkbox" checked class="w-5 h-5 rounded border-slate-300 text-[var(--primary)] focus:ring-[var(--primary)] cursor-pointer" />
                    </label>

                    <label class="flex items-center justify-between p-4 hover:bg-slate-50 rounded-2xl transition-colors cursor-pointer group">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-slate-400 group-hover:text-[var(--primary)] transition-colors">visibility</span>
                            <span class="text-sm font-bold text-slate-700">عرض رقم الهاتف في الطلبات</span>
                        </div>
                        <input type="checkbox" class="w-5 h-5 rounded border-slate-300 text-[var(--primary)] focus:ring-[var(--primary)] cursor-pointer" />
                    </label>

                    <div class="pt-4 mt-2 border-t border-slate-100">
                        <button class="w-full py-4 bg-[var(--navy)] text-white font-black rounded-2xl shadow-lg hover:bg-slate-800 transition-all transform active:scale-[0.98]">
                            حفظ تفضيلات الخصوصية
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- زر الدعم الفني العائم -->
        <a class="fixed bottom-8 left-8 bg-[var(--navy)] text-white p-4 rounded-full shadow-2xl flex items-center gap-3 hover:bg-slate-800 transition-all z-50 group" href="tel:19000">
            <span class="material-symbols-outlined text-3xl text-[var(--primary)] group-hover:scale-110 transition-transform">support_agent</span>
            <div class="flex flex-col items-start leading-none pr-2">
                <span class="text-[10px] font-bold opacity-70">الدعم الفني</span>
                <span class="text-lg font-black tracking-widest" dir="ltr">19000</span>
            </div>
        </a>
    </main>
</div>
@endsection