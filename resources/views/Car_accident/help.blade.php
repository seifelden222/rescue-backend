@extends('layouts.app')

@section('content')
<header class="py-12 flex flex-col items-center gap-4">
    <div class="flex items-center gap-4">
        <img alt="Inqaz Platform Logo" class="" src="{{ asset('img/logo.png') }}" style="width: 100px;" />
        <div class="flex flex-col leading-none">
            <span class="text-3xl font-black text-[var(--navy)] tracking-tight">منصة إنقاذ</span>
        </div>
    </div>
</header>
<main class="flex-grow container mx-auto px-6 max-w-4xl flex flex-col items-center">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-black text-[var(--navy)] mb-4">اختر نوع المساعدة</h1>
        <p class="text-slate-500 font-medium text-lg">حدد الخدمة التي تحتاجها الآن لنوفر لك المساعدة في أسرع وقت</p>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-6 w-full mb-12">
        <div class="service-card cursor-pointer bg-white p-8 rounded-[2.5rem] shadow-lg border-2 border-[var(--primary)] flex flex-col items-center gap-4 group">
            <div class="w-20 h-20 bg-red-50 rounded-full flex items-center justify-center text-[var(--primary)] group-hover:bg-[var(--primary)] group-hover:text-white transition-colors">
                <span class="material-symbols-outlined text-4xl">local_shipping</span>
            </div>
            <span class="text-xl font-extrabold text-[var(--navy)]">ونش إنقاذ</span>
        </div>
        <div class="service-card cursor-pointer bg-white p-8 rounded-[2.5rem] shadow-sm border-2 border-slate-50 flex flex-col items-center gap-4 group">
            <div class="w-20 h-20 bg-slate-50 rounded-full flex items-center justify-center text-[var(--navy)] group-hover:bg-[var(--navy)] group-hover:text-white transition-colors">
                <span class="material-symbols-outlined text-4xl">battery_charging_full</span>
            </div>
            <span class="text-xl font-extrabold text-slate-700">شحن بطارية</span>
        </div>
        <div class="service-card cursor-pointer bg-white p-8 rounded-[2.5rem] shadow-sm border-2 border-slate-50 flex flex-col items-center gap-4 group">
            <div class="w-20 h-20 bg-slate-50 rounded-full flex items-center justify-center text-[var(--navy)] group-hover:bg-[var(--navy)] group-hover:text-white transition-colors">
                <span class="material-symbols-outlined text-4xl">tire_repair</span>
            </div>
            <span class="text-xl font-extrabold text-slate-700">تغيير إطارات</span>
        </div>
        <div class="service-card cursor-pointer bg-white p-8 rounded-[2.5rem] shadow-sm border-2 border-slate-50 flex flex-col items-center gap-4 group">
            <div class="w-20 h-20 bg-slate-50 rounded-full flex items-center justify-center text-[var(--navy)] group-hover:bg-[var(--navy)] group-hover=text-white transition-colors">
                <span class="material-symbols-outlined text-4xl">local_gas_station</span>
            </div>
            <span class="text-xl font-extrabold text-slate-700">تزويد وقود</span>
        </div>
        <div class="service-card cursor-pointer bg-white p-8 rounded-[2.5rem] shadow-sm border-2 border-slate-50 flex flex-col items-center gap-4 group">
            <div class="w-20 h-20 bg-slate-50 rounded-full flex items-center justify-center text-[var(--navy)] group-hover:bg-[var(--navy)] group-hover=text-white transition-colors">
                <span class="material-symbols-outlined text-4xl">medical_services</span>
            </div>
            <span class="text-xl font-extrabold text-slate-700">إسعاف</span>
        </div>
        <div class="service-card cursor-pointer bg-white p-8 rounded-[2.5rem] shadow-sm border-2 border-slate-50 flex flex-col items-center gap-4 group">
            <div class="w-20 h-20 bg-slate-50 rounded-full flex items-center justify-center text-[var(--navy)] group-hover:bg-[var(--navy)] group-hover=text-white transition-colors">
                <span class="material-symbols-outlined text-4xl">build</span>
            </div>
            <span class="text-xl font-extrabold text-slate-700">ميكانيكي</span>
        </div>
    </div>
    <div class="w-full max-w-sm mb-20">
        <button class="w-full bg-[var(--primary)] hover:bg-red-700 text-white py-5 rounded-2xl font-black text-xl shadow-xl shadow-red-500/20 transition-all flex items-center justify-center gap-3 active:scale-[0.98]">
            <a href="/help2"> متابعة</a>
            <span class="material-symbols-outlined">arrow_back</span>
        </button>
    </div>
</main>

@endsection