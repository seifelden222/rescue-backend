@extends('layouts.app')

@section('content')
<x-sidebar />
<main class="flex-grow p-10 bg-white min-h-screen">
    <div class="flex justify-between items-start mb-10">
        <div>
            <h1 class="text-3xl font-black text-[var(--navy)] mb-2">سياراتي</h1>
            <p class="text-slate-500 font-bold">إدارة سياراتك المضافة للحصول على مساعدة أسرع</p>
        </div>
        <button class="bg-[var(--primary)] text-white px-6 py-3 rounded-xl font-bold flex items-center gap-2 shadow-lg shadow-red-100 hover:bg-red-700 transition-all">
            <span class="material-symbols-outlined">add</span>
            إضافة سيارة جديدة
        </button>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="car-card bg-white border border-slate-100 rounded-3xl overflow-hidden shadow-sm flex flex-col">
            <div class="h-48 overflow-hidden relative">
                <img alt="Toyota Camry" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA32rthUE2VFpwfQuyRxgBDqGNx4TO6T-l1NggyXzS3z06iAyPyAeiJBcCDHubdfzR1dE-_c81L4lYmc2PK7t0sKSFzY2BMfIsbhBD558cpk0kmp7UWrG-bgYzgruyNDmhIVFanRcY_uRvVxVftlrL5vZSvMIZwbPV3Th-U7pZ2Q-KqNXBz3tNsWpT3gpBRk_1dFhYCh3PtIEFUQ4h5cVBVtF_HF44fPOSX29PD3Vbf4f1wwd8m11qoMyHt6h51VUoOiTdkcbSiB0uJ"/>
                <div class="absolute top-4 left-4 flex gap-2">
                    <button class="w-10 h-10 rounded-full bg-white/90 backdrop-blur-sm text-slate-600 flex items-center justify-center hover:text-[var(--primary)] transition-colors">
                        <span class="material-symbols-outlined text-xl">edit</span>
                    </button>
                    <button class="w-10 h-10 rounded-full bg-white/90 backdrop-blur-sm text-red-500 flex items-center justify-center hover:bg-red-50 transition-colors">
                        <span class="material-symbols-outlined text-xl">delete</span>
                    </button>
                </div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-xl font-black text-[var(--navy)]">تويوتا هيلوكس</h3>
                    <span class="bg-slate-50 text-slate-500 text-xs px-3 py-1 rounded-full font-bold">افتراضية</span>
                </div>
                <div class="flex items-center gap-3 bg-slate-50 p-4 rounded-xl border border-slate-100">
                    <div class="flex-1 flex flex-col items-center border-l border-slate-200">
                        <span class="text-[10px] text-slate-400 font-bold uppercase">أرقام</span>
                        <span class="text-lg font-black tracking-widest text-[var(--navy)]">1234</span>
                    </div>
                    <div class="flex-1 flex flex-col items-center">
                        <span class="text-[10px] text-slate-400 font-bold uppercase">حروف</span>
                        <span class="text-lg font-black tracking-widest text-[var(--navy)]">أ ب ج</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="car-card bg-white border border-slate-100 rounded-3xl overflow-hidden shadow-sm flex flex-col">
            <div class="h-48 overflow-hidden relative">
                <img alt="Toyota Camry" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA32rthUE2VFpwfQuyRxgBDqGNx4TO6T-l1NggyXzS3z06iAyPyAeiJBcCDHubdfzR1dE-_c81L4lYmc2PK7t0sKSFzY2BMfIsbhBD558cpk0kmp7UWrG-bgYzgruyNDmhIVFanRcY_uRvVxVftlrL5vZSvMIZwbPV3Th-U7pZ2Q-KqNXBz3tNsWpT3gpBRk_1dFhYCh3PtIEFUQ4h5cVBVtF_HF44fPOSX29PD3Vbf4f1wwd8m11qoMyHt6h51VUoOiTdkcbSiB0uJ"/>
                <div class="absolute top-4 left-4 flex gap-2">
                    <button class="w-10 h-10 rounded-full bg-white/90 backdrop-blur-sm text-slate-600 flex items-center justify-center hover:text-[var(--primary)] transition-colors">
                        <span class="material-symbols-outlined text-xl">edit</span>
                    </button>
                    <button class="w-10 h-10 rounded-full bg-white/90 backdrop-blur-sm text-red-500 flex items-center justify-center hover:bg-red-50 transition-colors">
                        <span class="material-symbols-outlined text-xl">delete</span>
                    </button>
                </div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-xl font-black text-[var(--navy)]">هيونداي إلنترا</h3>
                </div>
                <div class="flex items-center gap-3 bg-slate-50 p-4 rounded-xl border border-slate-100">
                    <div class="flex-1 flex flex-col items-center border-l border-slate-200">
                        <span class="text-[10px] text-slate-400 font-bold uppercase">أرقام</span>
                        <span class="text-lg font-black tracking-widest text-[var(--navy)]">5678</span>
                    </div>
                    <div class="flex-1 flex flex-col items-center">
                        <span class="text-[10px] text-slate-400 font-bold uppercase">حروف</span>
                        <span class="text-lg font-black tracking-widest text-[var(--navy)]">د هـ و</span>
                    </div>
                </div>
            </div>
        </div>
        <button class="border-2 border-dashed border-slate-200 rounded-3xl p-6 flex flex-col items-center justify-center text-slate-400 hover:border-[var(--primary)] hover:text-[var(--primary)] hover:bg-red-50/30 transition-all group">
            <div class="w-16 h-16 rounded-full bg-slate-50 flex items-center justify-center mb-4 group-hover:bg-red-100/50 transition-colors">
                <span class="material-symbols-outlined text-3xl">add_circle</span>
            </div>
            <span class="font-bold">إضافة سيارة أخرى</span>
        </button>
    </div>
    <a class="fixed bottom-8 left-8 bg-[var(--navy)] text-white p-4 rounded-full shadow-2xl flex items-center gap-3 hover:bg-slate-800 transition-all z-50 group" href="tel:19000">
        <span class="material-symbols-outlined text-3xl text-[var(--primary)] group-hover:scale-110 transition-transform">support_agent</span>
        <div class="flex flex-col items-start leading-none pr-2">
            <span class="text-[10px] font-bold opacity-70">الدعم الفني</span>
            <span class="text-lg font-black tracking-widest" dir="ltr">19000</span>
        </div>
    </a>
</main>

@endsection