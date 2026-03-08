@extends('layouts.app')

@section('content')
    <x-sidebar />

<main class="flex-grow relative overflow-hidden bg-slate-200">
    <div class="absolute inset-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.5!2d31.45!3d30.03!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583f!2sNew%20Cairo%2C%20Fifth%20Settlement%2C%20Cairo%2C%20Egypt!5e0!3m2!1sen!2seg!4v1730000000000" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="absolute inset-0 map-overlay"></div>

    <div class="relative"></div>

    <div class="marker-provider"></div>
    <div class="absolute top-8 left-8 z-10 w-80">
        <div class="bg-white rounded-xl shadow-xl border border-slate-100 p-1 flex items-center">
            <span class="material-symbols-outlined text-slate-400 px-3">search</span>
            <input class="w-full border-none focus:ring-0 py-2.5 text-sm font-medium bg-transparent" placeholder="البحث عن موقع..." type="text" />
        </div>
    </div>
    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
        <div class="bg-white w-[420px] rounded-[2.5rem] shadow-2xl p-8 pointer-events-auto flex flex-col gap-6 border border-slate-100">
            <div class="text-center">
                <h2 class="text-2xl font-black text-[var(--navy)]">تفاصيل طلب الإنقاذ</h2>
                <p class="text-slate-400 font-medium text-sm mt-1">تأكد من التفاصيل قبل إرسال الطلب</p>
            </div>
            <div class="space-y-4">
                <div class="bg-slate-50 p-5 rounded-3xl border border-slate-100 flex gap-4 items-center">
                    <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-[var(--primary)] shadow-sm">
                        <span class="material-symbols-outlined text-3xl">location_on</span>
                    </div>
                    <div class="flex-1">
                        <span class="text-xs font-bold text-slate-400 block mb-1">موقعك الحالي</span>
                        <h4 class="font-bold text-[var(--navy)]">شارع التسعين، التجمع الخامس</h4>
                        <p class="text-xs text-slate-500">القاهرة، مصر</p>
                    </div>
                </div>
                <div class="bg-slate-50 p-5 rounded-3xl border border-slate-100 flex gap-4 items-center">
                    <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-[var(--navy)] shadow-sm">
                        <span class="material-symbols-outlined text-3xl">local_shipping</span>
                    </div>
                    <div class="flex-1">
                        <span class="text-xs font-bold text-slate-400 block mb-1">أقرب مقدم خدمة</span>
                        <h4 class="font-bold text-[var(--navy)]">ونش الإنقاذ السريع</h4>
                        <div class="flex items-center gap-3 mt-1">
                            <span class="flex items-center gap-1 text-xs font-bold text-amber-500">
                                <span class="material-symbols-outlined text-sm fill-1" style="font-variation-settings: 'FILL' 1;">star</span>
                                4.8
                            </span>
                            <span class="text-xs font-bold text-slate-500 flex items-center gap-1">
                                <span class="material-symbols-outlined text-sm">schedule</span>
                                12 دقيقة
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <button class="bg-[var(--primary)] hover:bg-red-700 text-white w-full py-5 rounded-2xl font-black text-xl shadow-xl shadow-red-500/20 transition-all flex items-center justify-center gap-3 active:scale-[0.98]">
                <a href="/help3"> تأكيد الطلب</a>
            </button>
        </div>
    </div>
    <div class="absolute bottom-8 right-8 flex flex-col gap-2">
        <button class="w-12 h-12 bg-white rounded-xl shadow-lg flex items-center justify-center text-slate-600 hover:text-[var(--navy)] transition-colors border border-slate-100">
            <span class="material-symbols-outlined">add</span>
        </button>
        <button class="w-12 h-12 bg-white rounded-xl shadow-lg flex items-center justify-center text-slate-600 hover:text-[var(--navy)] transition-colors border border-slate-100">
            <span class="material-symbols-outlined">remove</span>
        </button>
        <button class="w-12 h-12 bg-white rounded-xl shadow-lg flex items-center justify-center text-slate-600 hover:text-[var(--navy)] transition-colors border border-slate-100 mt-4">
            <span class="material-symbols-outlined">my_location</span>
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