@extends('layouts.app')

@section('content')
<x-sidebar />

<main class="flex-grow relative overflow-hidden">
    <div class="absolute inset-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.5!2d31.45!3d30.03!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583f!2sNew%20Cairo%2C%20Fifth%20Settlement%2C%20Cairo%2C%20Egypt!5e0!3m2!1sen!2seg!4v1730000000000" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="absolute inset-0 bg-slate-900/5"></div>

    <div class="relative">
        <div class="absolute -inset-4 bg-red-500/20 rounded-full animate-pulse"></div>
    </div>
    <div class="marker-provider"></div>
    <div class="absolute top-8 left-8 bottom-8 w-96 bg-white rounded-3xl shadow-2xl z-20 overflow-y-auto flex flex-col">
        <div class="p-8 pb-4">
            <h1 class="text-2xl font-black text-[var(--navy)]">تتبع مقدم الخدمة</h1>
            <p class="text-slate-400 font-medium text-sm mt-1">تابع وصول مقدم الخدمة إليك في الوقت الفعلي</p>
        </div>
        <div class="px-8 py-6 space-y-6">
            <div class="relative flex items-center gap-4 timeline-item active">
                <div class="w-8 h-8 rounded-full bg-green-500 flex items-center justify-center text-white z-10 shrink-0">
                    <span class="material-symbols-outlined text-sm">check</span>
                </div>
                <span class="font-bold text-slate-500">تم تأكيد الطلب</span>
            </div>
            <div class="relative flex items-center gap-4 timeline-item">
                <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white z-10 shrink-0 ring-4 ring-blue-50">
                    <span class="material-symbols-outlined text-sm">local_shipping</span>
                </div>
                <span class="font-bold text-[var(--navy)]">مقدم الخدمة في الطريق</span>
            </div>
            <div class="relative flex items-center gap-4 timeline-item">
                <div class="w-8 h-8 rounded-full bg-slate-100 border border-slate-200 flex items-center justify-center text-slate-400 z-10 shrink-0">
                    <span class="material-symbols-outlined text-sm">location_on</span>
                </div>
                <span class="font-bold text-slate-300">تم الوصول</span>
            </div>
            <div class="relative flex items-center gap-4 timeline-item">
                <div class="w-8 h-8 rounded-full bg-slate-100 border border-slate-200 flex items-center justify-center text-slate-400 z-10 shrink-0">
                    <span class="material-symbols-outlined text-sm">verified</span>
                </div>
                <span class="font-bold text-slate-300">اكتملت الخدمة</span>
            </div>
        </div>
        <div class="px-8 mb-6">
            <div class="bg-slate-50 p-5 rounded-2xl border border-slate-100 text-center">
                <p class="text-xs font-bold text-slate-400 mb-1">الوقت المتوقع للوصول</p>
                <h2 class="text-3xl font-black text-[var(--navy)]">8 دقائق</h2>
            </div>
        </div>
        <div class="px-8 space-y-4 flex-grow">
            <div class="bg-white border border-slate-100 rounded-2xl p-4 shadow-sm">
                <div class="flex items-center gap-4">
                    <img alt="أحمد علي" class="w-14 h-14 rounded-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBG5d0Zs8PqhhRrUUW9nSBuVnc9D5Is7hLkuyOUNencItZJRbbdRcSiDMyT75XbEPd3CbEourW4ZSCQHsgkWd8yZ_7SDyrdiWOUURRIddBG55doZOvDzBYtDftVMqFAF1Xs_B_B81qj6Yfc7BxNOeKfbQfFlUQz8kj3gIH2RGRWR2r4jKzJeVvd06C2YfRci_nh84V4W5MZ4Y_dyHaMN4emMbdCRgmQaeSLjvrUzpDycOVNTSALcq-HlmsBL6dnjAzJw9uzIc5f_zN8" />
                    <div class="flex-1">
                        <h4 class="font-bold text-[var(--navy)]">أحمد علي</h4>
                        <div class="flex items-center gap-1 text-amber-500">
                            <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="text-xs font-bold">4.8</span>
                        </div>
                    </div>
                </div>
                <div class="mt-4 pt-4 border-t border-slate-50 flex items-center gap-3">
                    <div class="bg-slate-100 p-2 rounded-lg">
                        <span class="material-symbols-outlined text-slate-600">directions_car</span>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-slate-400">تويوتا هيلوكس</p>
                        <p class="text-sm font-bold text-[var(--navy)]">أ ب ج 1234</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-8 space-y-3">
            <button class="w-full bg-[var(--primary)] hover:bg-red-700 text-white py-4 rounded-2xl font-black text-lg shadow-xl shadow-red-500/20 transition-all flex items-center justify-center gap-3">
                <span class="material-symbols-outlined">call</span>
                الاتصال بمقدم الخدمة
            </button>
            <button class="w-full py-3 text-red-500 font-bold hover:bg-red-50 rounded-xl transition-colors">
                إلغاء الطلب
            </button>
        </div>
    </div>
    <div class="absolute top-8 right-8 z-10 w-80">
        <div class="bg-white rounded-xl shadow-xl border border-slate-100 p-1 flex items-center">
            <span class="material-symbols-outlined text-slate-400 px-3">search</span>
            <input class="w-full border-none focus:ring-0 py-2.5 text-sm font-medium bg-transparent" placeholder="البحث عن موقع..." type="text" />
        </div>
    </div>
    <div class="absolute bottom-8 left-[400px] flex flex-col gap-2 z-10">
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
    <a class="fixed bottom-8 right-8 bg-[var(--navy)] text-white p-4 rounded-full shadow-2xl flex items-center gap-3 hover:bg-slate-800 transition-all z-50 group" href="tel:19000">
        <span class="material-symbols-outlined text-3xl text-[var(--primary)] group-hover:scale-110 transition-transform">support_agent</span>
        <div class="flex flex-col items-start leading-none pr-2">
            <span class="text-[10px] font-bold opacity-70">الدعم الفني</span>
            <span class="text-lg font-black tracking-widest" dir="ltr">19000</span>
        </div>
    </a>
</main>

@endsection