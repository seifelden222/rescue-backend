<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>الإشعارات | منصة إنقاذ</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <style type="text/tailwindcss">
        :root {
            --primary: #E31E24;
            --navy: #0F172A;
            --light-bg: #F8FAFC;
        }
        body {
            font-family: "Cairo", sans-serif;
            background-color: white;
        }
        .material-symbols-outlined {
            font-variation-settings: "FILL" 0, "wght" 400, "GRAD" 0, "opsz" 48;
        }
        .sidebar-item-active {
            background-color: #f1f5f9;
            color: var(--navy);
            border-left: 4px solid var(--primary);
        }
        .notification-card {
            transition: all 0.2s ease;
        }
        .notification-card:hover {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
            border-color: #e2e8f0;
        }
        .tab-active {
            color: var(--navy);
            border-bottom: 3px solid var(--primary);
        }
    </style>
</head>

<body class="text-slate-800 antialiased min-h-screen flex">
    <aside class="w-72 bg-white h-screen sticky top-0 border-l border-slate-100 flex flex-col shrink-0">
        <div class="p-8 flex flex-col items-center border-b border-slate-50">

            <img alt="محمد الأحمد" class="w-full h-full object-cover " src="assets/img/logo.png" style="width: 100px;" />

            <h3 class="font-bold text-lg text-[var(--navy)]">محمد الأحمد</h3>
            <p class="text-sm text-slate-400">مستخدم</p>
        </div>
        <nav class="flex-grow py-6">
            <ul class="space-y-1">
                <li>
                    <a class="flex items-center gap-3 px-8 py-4 text-slate-500 hover:text-[var(--navy)] hover:bg-slate-50 font-bold transition-all" href="home.html">
                        <span class="material-symbols-outlined">dashboard</span>
                        الرئيسية
                    </a>
                </li>
                <li>
                    <a class="flex items-center gap-3 px-8 py-4 text-slate-500 hover:text-[var(--navy)] hover:bg-slate-50 font-bold transition-all" href="help.html">
                        <span class="material-symbols-outlined">sos</span>
                        طلب مساعدة
                    </a>
                </li>
                <li>
                    <a class="flex items-center gap-3 px-8 py-4 text-slate-500 hover:text-[var(--navy)] hover:bg-slate-50 font-bold transition-all" href="cars.html">
                        <span class="material-symbols-outlined">directions_car</span>
                        سيارتي
                    </a>
                </li>
                <li>
                    <a class="flex items-center gap-3 px-8 py-4 text-slate-500 hover:text-[var(--navy)] hover:bg-slate-50 font-bold transition-all" href="record.html">
                        <span class="material-symbols-outlined">history</span>
                        السجل
                    </a>
                </li>
                <li>
                    <a class="sidebar-item-active flex items-center gap-3 px-8 py-4 font-bold transition-all" href="notifications.html">
                        <span class="material-symbols-outlined">notifications</span>
                        الإشعارات
                    </a>
                </li>
                <li>
                    <a class="flex items-center gap-3 px-8 py-4 text-slate-500 hover:text-[var(--navy)] hover:bg-slate-50 font-bold transition-all" href="settings.html">
                        <span class="material-symbols-outlined">settings</span>
                        الإعدادات
                    </a>
                </li>
            </ul>
        </nav>
        <div class="p-8">
            <button class="flex items-center gap-3 text-red-500 font-bold hover:bg-red-50 w-full p-3 rounded-xl transition-all">
                <span class="material-symbols-outlined">logout</span>
                تسجيل الخروج
            </button>
        </div>
    </aside>
    <main class="flex-grow p-10 bg-white min-h-screen">
        <div class="mb-10 flex justify-between items-end">
            <div>
                <h1 class="text-3xl font-black text-[var(--navy)] mb-2">الإشعارات</h1>
                <p class="text-slate-500 font-bold">تابع آخر التنبيهات وتحديثات طلباتك أولاً بأول</p>
            </div>
            <button class="text-sm font-bold text-[var(--primary)] hover:underline">تحديد الكل كمقروء</button>
        </div>
        <div class="flex gap-8 border-b border-slate-100 mb-8">
            <button class="tab-active pb-4 px-2 font-bold transition-all">الكل</button>
            <button class="text-slate-400 pb-4 px-2 font-bold hover:text-[var(--navy)] transition-all">تحديثات الطلبات</button>
            <button class="text-slate-400 pb-4 px-2 font-bold hover:text-[var(--navy)] transition-all">عروض</button>
        </div>
        <div class="space-y-4">
            <div class="notification-card bg-white border border-slate-50 rounded-3xl p-6 shadow-sm flex items-center gap-6 relative">
                <div class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center text-[var(--navy)] shrink-0">
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
            <div class="notification-card bg-white border border-slate-50 rounded-3xl p-6 shadow-sm flex items-center gap-6 relative">
                <div class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center text-[var(--navy)] shrink-0">
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
            <div class="notification-card bg-white border border-slate-50 rounded-3xl p-6 shadow-sm flex items-center gap-6 relative">
                <div class="w-14 h-14 bg-red-50 rounded-2xl flex items-center justify-center text-[var(--primary)] shrink-0">
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
            <div class="notification-card bg-white border border-slate-50 rounded-3xl p-6 shadow-sm flex items-center gap-6 opacity-80">
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
            <div class="notification-card bg-white border border-slate-50 rounded-3xl p-6 shadow-sm flex items-center gap-6 opacity-80">
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
        <a class="fixed bottom-8 left-8 bg-[var(--navy)] text-white p-4 rounded-full shadow-2xl flex items-center gap-3 hover:bg-slate-800 transition-all z-50 group" href="tel:19000">
            <span class="material-symbols-outlined text-3xl text-[var(--primary)] group-hover:scale-110 transition-transform">support_agent</span>
            <div class="flex flex-col items-start leading-none pr-2">
                <span class="text-[10px] font-bold opacity-70">الدعم الفني</span>
                <span class="text-lg font-black tracking-widest" dir="ltr">19000</span>
            </div>
        </a>
    </main>

</body>

</html>