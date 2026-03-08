@extends('layouts.app')

@section('content')
<div class="flex min-h-screen">

    <x-sidebar />


    <!-- Main Content -->
    <main class="flex-grow p-10 bg-white min-h-screen">
        <div class="mb-10">
            <h1 class="text-3xl font-black text-[var(--navy)] mb-2">السجل</h1>
            <p class="text-slate-500 font-bold">استعرض جميع طلبات الإنقاذ السابقة وتفاصيلها</p>
        </div>

        <!-- Filters Section -->
        <div class="flex flex-wrap gap-4 mb-8">
            <div class="relative flex-grow max-w-md">
                <span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-slate-400">search</span>
                <input class="w-full pr-12 pl-4 py-3 rounded-2xl border border-slate-100 focus:ring-[var(--primary)] focus:border-[var(--primary)] font-medium text-sm" placeholder="البحث برقم الطلب أو الخدمة..." type="text" />
            </div>

            <div class="relative min-w-[180px]">
                <select class="w-full px-4 py-3 rounded-2xl border border-slate-100 focus:ring-[var(--primary)] focus:border-[var(--primary)] font-bold text-sm text-[var(--navy)] appearance-none bg-white">
                    <option>جميع الحالات</option>
                    <option>مكتمل</option>
                    <option>ملغي</option>
                </select>
                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none">expand_more</span>
            </div>
        </div>

        <!-- History Cards -->
        <div class="space-y-4">
            <!-- Card Item 1 -->
            <div class="history-card bg-white border border-slate-50 rounded-3xl p-6 shadow-sm flex items-center gap-6 hover:shadow-md transition-all">
                <div class="w-16 h-16 bg-slate-50 rounded-2xl flex items-center justify-center text-[var(--navy)] shrink-0">
                    <span class="material-symbols-outlined text-3xl">auto_towing</span>
                </div>
                <div class="flex-grow grid grid-cols-1 md:grid-cols-4 gap-4 items-center">
                    <div>
                        <h3 class="text-lg font-black text-[var(--navy)]">ونش إنقاذ</h3>
                        <p class="text-xs text-slate-400 font-bold">رقم الطلب: #INQ-8821</p>
                    </div>
                    <div>
                        <span class="text-xs text-slate-400 block font-bold mb-1">التاريخ</span>
                        <span class="text-sm font-bold text-[var(--navy)]">12 مايو 2024</span>
                    </div>
                    <div>
                        <span class="text-xs text-slate-400 block font-bold mb-1">السيارة المستخدمة</span>
                        <span class="text-sm font-bold text-[var(--navy)]">تويوتا هيلوكس</span>
                    </div>
                    <div class="text-left">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-green-50 text-green-600">
                            <span class="w-1.5 h-1.5 rounded-full bg-green-500 ml-2"></span>
                            مكتمل
                        </span>
                    </div>
                </div>
                <div class="border-r border-slate-100 pr-6 hidden md:block">
                    <button class="flex items-center gap-2 text-[var(--navy)] font-bold hover:text-[var(--primary)] transition-colors">
                        <span class="text-sm">عرض التفاصيل</span>
                        <span class="material-symbols-outlined text-lg">chevron_left</span>
                    </button>
                </div>
            </div>

            <!-- Card Item 2 -->
            <div class="history-card bg-white border border-slate-50 rounded-3xl p-6 shadow-sm flex items-center gap-6 hover:shadow-md transition-all">
                <div class="w-16 h-16 bg-slate-50 rounded-2xl flex items-center justify-center text-[var(--navy)] shrink-0">
                    <span class="material-symbols-outlined text-3xl">battery_charging_full</span>
                </div>
                <div class="flex-grow grid grid-cols-1 md:grid-cols-4 gap-4 items-center">
                    <div>
                        <h3 class="text-lg font-black text-[var(--navy)]">شحن بطارية</h3>
                        <p class="text-xs text-slate-400 font-bold">رقم الطلب: #INQ-7540</p>
                    </div>
                    <div>
                        <span class="text-xs text-slate-400 block font-bold mb-1">التاريخ</span>
                        <span class="text-sm font-bold text-[var(--navy)]">05 مايو 2024</span>
                    </div>
                    <div>
                        <span class="text-xs text-slate-400 block font-bold mb-1">السيارة المستخدمة</span>
                        <span class="text-sm font-bold text-[var(--navy)]">تويوتا هيلوكس</span>
                    </div>
                    <div class="text-left">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-red-50 text-red-600">
                            <span class="w-1.5 h-1.5 rounded-full bg-red-500 ml-2"></span>
                            ملغي
                        </span>
                    </div>
                </div>
                <div class="border-r border-slate-100 pr-6 hidden md:block">
                    <button class="flex items-center gap-2 text-[var(--navy)] font-bold hover:text-[var(--primary)] transition-colors">
                        <span class="text-sm">عرض التفاصيل</span>
                        <span class="material-symbols-outlined text-lg">chevron_left</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Support Agent Button -->
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