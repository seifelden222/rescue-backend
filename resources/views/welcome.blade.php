@extends('layouts.app')

@section('content')
<div class="flex min-h-screen" dir="rtl">

    <x-sidebar />

    <!-- Main Content -->
    <main class="flex-grow p-10 max-w-6xl mx-auto min-h-screen">
        <header class="mb-10">
            <h1 class="text-3xl font-black text-[var(--navy)] mb-2">أهلاً بك، {{ auth()->user()->name ?? 'محمد الأحمد' }}</h1>
            <p class="text-slate-500 font-medium text-lg">نظرة عامة على حسابك ونشاطك الأخير</p>
        </header>

        <!-- Quick Actions Section -->
        <section class="mb-12">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-black text-[var(--navy)]">إجراءات سريعة</h2>
            </div>
            <a href="{{ route('help') }}" class="inline-flex bg-[var(--primary)] hover:bg-red-700 text-white px-10 py-5 rounded-[1.5rem] font-black text-xl shadow-xl shadow-red-500/20 transition-all items-center gap-4 transform active:scale-[0.98]">
                <span class="material-symbols-outlined text-2xl">emergency</span>
                <span>طلب مساعدة الآن</span>
            </a>
        </section>

        <!-- Dashboard Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
            <!-- Main Car Section -->
            <section>
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-xl font-black text-[var(--navy)]">سيارتي الأساسية</h2>
                    <a href="{{ route('cars') }}" class="text-sm font-bold text-[var(--primary)] hover:underline">إدارة السيارات</a>
                </div>
                <div class="bg-white rounded-[2.5rem] shadow-sm border border-slate-100 overflow-hidden group hover:shadow-md transition-all">
                    <div class="h-48 overflow-hidden">
                        <img alt="Car Image" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA32rthUE2VFpwfQuyRxgBDqGNx4TO6T-l1NggyXzS3z06iAyPyAeiJBcCDHubdfzR1dE-_c81L4lYmc2PK7t0sKSFzY2BMfIsbhBD558cpk0kmp7UWrG-bgYzgruyNDmhIVFanRcY_uRvVxVftlrL5vZSvMIZwbPV3Th-U7pZ2Q-KqNXBz3tNsWpT3gpBRk_1dFhYCh3PtIEFUQ4h5cVBVtF_HF44fPOSX29PD3Vbf4f1wwd8m11qoMyHt6h51VUoOiTdkcbSiB0uJ" />
                    </div>
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-6">
                            <div>
                                <h3 class="text-2xl font-black text-[var(--navy)] mb-1">تويوتا كامري 2023</h3>
                                <p class="text-slate-500 font-bold tracking-widest text-lg" dir="ltr">أ ب ج 1234</p>
                            </div>
                            <span class="bg-green-50 text-green-600 px-4 py-1.5 rounded-full text-xs font-bold flex items-center gap-2">
                                <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                                الحالة: جيدة
                            </span>
                        </div>
                        <button class="text-slate-400 font-bold hover:text-[var(--navy)] flex items-center gap-2 transition-colors">
                            تعديل البيانات
                            <span class="material-symbols-outlined text-sm">edit</span>
                        </button>
                    </div>
                </div>
            </section>

            <!-- Recent Requests Section -->
            <section>
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-xl font-black text-[var(--navy)]">آخر الطلبات</h2>
                    <a class="text-[var(--primary)] font-bold hover:underline" href="{{ route('record') }}">عرض الكل</a>
                </div>
                <div class="space-y-4">
                    <!-- Request Item 1 -->
                    <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-slate-100 flex items-center justify-between group hover:shadow-md transition-all">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center text-[var(--navy)] group-hover:bg-[var(--primary)] group-hover:text-white transition-colors">
                                <span class="material-symbols-outlined text-2xl">local_shipping</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-[var(--navy)] text-lg">سحب سيارة</h4>
                                <p class="text-sm text-slate-400 font-medium">15 مايو 2024</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-sm font-bold text-slate-500">مكتمل</span>
                            <div class="w-8 h-8 rounded-full bg-slate-50 flex items-center justify-center text-slate-400 group-hover:translate-x-1 transition-transform">
                                <span class="material-symbols-outlined text-lg">chevron_left</span>
                            </div>
                        </div>
                    </div>

                    <!-- Request Item 2 -->
                    <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-slate-100 flex items-center justify-between group hover:shadow-md transition-all">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center text-[var(--navy)] group-hover:bg-[var(--primary)] group-hover:text-white transition-colors">
                                <span class="material-symbols-outlined text-2xl">tire_repair</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-[var(--navy)] text-lg">تغيير إطار</h4>
                                <p class="text-sm text-slate-400 font-medium">28 أبريل 2024</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-sm font-bold text-slate-500">مكتمل</span>
                            <div class="w-8 h-8 rounded-full bg-slate-50 flex items-center justify-center text-slate-400 group-hover:translate-x-1 transition-transform">
                                <span class="material-symbols-outlined text-lg">chevron_left</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Floating Support Agent Button -->
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