@extends('layouts.app')

@section('content')
<div class="flex min-h-screen" dir="rtl">

    <x-sidebar />

    <!-- Main Content -->
    <main class="flex-grow p-10 bg-white min-h-screen">
        <div class="mb-10 flex justify-between items-end">
            <div>
                <h1 class="text-3xl font-black text-[var(--navy)] mb-2">الإشعارات</h1>
                <p class="text-slate-500 font-bold">تابع آخر التنبيهات وتحديثات طلباتك أولاً بأول</p>
            </div>
            <button class="text-sm font-bold text-[var(--primary)] hover:underline">تحديد الكل كمقروء</button>
        </div>

        <!-- Tabs -->
        <div class="flex gap-8 border-b border-slate-100 mb-8">
            <button class="text-[var(--navy)] border-b-4 border-[var(--primary)] pb-4 px-2 font-bold transition-all">الكل</button>
            <button class="text-slate-400 pb-4 px-2 font-bold hover:text-[var(--navy)] transition-all">تحديثات الطلبات</button>
            <button class="text-slate-400 pb-4 px-2 font-bold hover:text-[var(--navy)] transition-all">عروض</button>
        </div>

        <!-- Notification List -->
        <div class="space-y-4">
            <!-- New Notification -->
            <div class="notification-card bg-white border border-slate-50 rounded-[2rem] p-6 shadow-sm flex items-center gap-6 relative group hover:shadow-md transition-all">
                <div class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center text-[var(--navy)] shrink-0 group-hover:bg-[var(--primary)] group-hover:text-white transition-colors">
                    <span class="material-symbols-outlined text-2xl">auto_towing</span>
                </div>
                <div class="flex-grow">
                    <div class="flex items-center justify-between mb-1">
                        <h3 class="text-lg font-bold text-[var(--navy)]">تم وصول ونش الإنقاذ لموقعك</h3>
                        <span class="text-xs text-slate-400 font-medium">منذ دقيقتين</span>
                    </div>
                    <p class="text-sm text-slate-500 leading-relaxed">فريق إنقاذ #INQ-8821 قد وصل الآن إلى الموقع المحدد. يرجى التوجه للسيارة.</p>
                </div>
                <div class="w-2.5 h-2.5 rounded-full bg-blue-500 mr-4"></div>
            </div>

            <!-- Accepted Notification -->
            <div class="notification-card bg-white border border-slate-50 rounded-[2rem] p-6 shadow-sm flex items-center gap-6 relative group hover:shadow-md transition-all">
                <div class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center text-[var(--navy)] shrink-0 group-hover:bg-green-500 group-hover:text-white transition-colors">
                    <span class="material-symbols-outlined text-2xl">check_circle</span>
                </div>
                <div class="flex-grow">
                    <div class="flex items-center justify-between mb-1">
                        <h3 class="text-lg font-bold text-[var(--navy)]">تم قبول طلب المساعدة</h3>
                        <span class="text-xs text-slate-400 font-medium">منذ ساعة</span>
                    </div>
                    <p class="text-sm text-slate-500 leading-relaxed">تم تعيين سائق لطلبك رقم #INQ-8821 وهو في طريقه إليك الآن.</p>
                </div>
                <div class="w-2.5 h-2.5 rounded-full bg-blue-500 mr-4"></div>
            </div>

            <!-- Offer Notification -->
            <div class="notification-card bg-white border border-slate-50 rounded-[2rem] p-6 shadow-sm flex items-center gap-6 relative group hover:shadow-md transition-all">
                <div class="w-14 h-14 bg-red-50 rounded-2xl flex items-center justify-center text-[var(--primary)] shrink-0 group-hover:bg-[var(--primary)] group-hover:text-white transition-colors">
                    <span class="material-symbols-outlined text-2xl">local_offer</span>
                </div>
                <div class="flex-grow">
                    <div class="flex items-center justify-between mb-1">
                        <h3 class="text-lg font-bold text-[var(--navy)]">عرض خاص لفترة محدودة!</h3>
                        <span class="text-xs text-slate-400 font-medium">منذ 5 ساعات</span>
                    </div>
                    <p class="text-sm text-slate-500 leading-relaxed">خصم 20% على خدمات سحب السيارات داخل القاهرة الكبرى. استخدم الكود: <span class="text-[var(--primary)] font-bold">INQAZ20</span></p>
                </div>
            </div>

            <!-- Read Notification -->
            <div class="notification-card bg-white border border-slate-50 rounded-[2rem] p-6 shadow-sm flex items-center gap-6 opacity-60 hover:opacity-100 transition-all">
                <div class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center text-slate-400 shrink-0">
                    <span class="material-symbols-outlined text-2xl">history</span>
                </div>
                <div class="flex-grow">
                    <div class="flex items-center justify-between mb-1">
                        <h3 class="text-lg font-bold text-slate-400">ملخص رحلتك السابقة</h3>
                        <span class="text-xs text-slate-400 font-medium">أمس، 04:30 م</span>
                    </div>
                    <p class="text-sm text-slate-400 leading-relaxed">نأمل أن تكون قد حصلت على خدمة ممتازة. يمكنك الآن تقييم السائق عبر السجل.</p>
                </div>
            </div>

            <!-- Security Notification -->
            <div class="notification-card bg-white border border-slate-50 rounded-[2rem] p-6 shadow-sm flex items-center gap-6 opacity-60 hover:opacity-100 transition-all">
                <div class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center text-slate-400 shrink-0">
                    <span class="material-symbols-outlined text-2xl">verified_user</span>
                </div>
                <div class="flex-grow">
                    <div class="flex items-center justify-between mb-1">
                        <h3 class="text-lg font-bold text-slate-400">تحديث أمان الحساب</h3>
                        <span class="text-xs text-slate-400 font-medium">10 مايو 2024</span>
                    </div>
                    <p class="text-sm text-slate-400 leading-relaxed">تم تسجيل الدخول إلى حسابك من جهاز جديد. إذا لم تكن أنت، يرجى تغيير كلمة السر.</p>
                </div>
            </div>
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