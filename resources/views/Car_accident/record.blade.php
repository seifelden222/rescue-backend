<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>سجل الطلبات | منصة إنقاذ</title>
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
        .history-card {
            transition: all 0.2s ease;
        }
        .history-card:hover {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
            border-color: #e2e8f0;
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
                    <a class="sidebar-item-active flex items-center gap-3 px-8 py-4 font-bold transition-all" href="record.html">
                        <span class="material-symbols-outlined">history</span>
                        السجل
                    </a>
                </li>
                <li>
                    <a class="flex items-center gap-3 px-8 py-4 text-slate-500 hover:text-[var(--navy)] hover:bg-slate-50 font-bold transition-all" href="notifications.html">
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
        <div class="mb-10">
            <h1 class="text-3xl font-black text-[var(--navy)] mb-2">السجل</h1>
            <p class="text-slate-500 font-bold">استعرض جميع طلبات الإنقاذ السابقة وتفاصيلها</p>
        </div>
        <div class="flex flex-wrap gap-4 mb-8">
            <div class="relative flex-grow max-w-md">
                <span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-slate-400">search</span>
                <input class="w-full pr-12 pl-4 py-3 rounded-2xl border-slate-100 focus:ring-[var(--primary)] focus:border-[var(--primary)] font-medium text-sm" placeholder="البحث برقم الطلب أو الخدمة..." type="text" />
            </div>
            <div class="relative min-w-[180px]">
                <select class="w-full px-4 py-3 rounded-2xl border-slate-100 focus:ring-[var(--primary)] focus:border-[var(--primary)] font-bold text-sm text-[var(--navy)] appearance-none bg-white">
                    <option>جميع الحالات</option>
                    <option>مكتمل</option>
                    <option>ملغي</option>
                    <option>قيد التنفيذ</option>
                </select>
                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none">expand_more</span>
            </div>
            <div class="relative min-w-[180px]">
                <select class="w-full px-4 py-3 rounded-2xl border-slate-100 focus:ring-[var(--primary)] focus:border-[var(--primary)] font-bold text-sm text-[var(--navy)] appearance-none bg-white">
                    <option>آخر 30 يوم</option>
                    <option>آخر 3 أشهر</option>
                    <option>2024</option>
                    <option>2023</option>
                </select>
                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none">calendar_month</span>
            </div>
        </div>
        <div class="space-y-4">
            <div class="history-card bg-white border border-slate-50 rounded-3xl p-6 shadow-sm flex items-center gap-6">
                <div class="w-16 h-16 bg-slate-50 rounded-2xl flex items-center justify-center text-[var(--navy)]">
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
                <div class="border-r border-slate-100 pr-6">
                    <button class="flex items-center gap-2 text-[var(--navy)] font-bold hover:text-[var(--primary)] transition-colors">
                        <span class="text-sm">عرض التفاصيل</span>
                        <span class="material-symbols-outlined text-lg">chevron_left</span>
                    </button>
                </div>
            </div>
            <div class="history-card bg-white border border-slate-50 rounded-3xl p-6 shadow-sm flex items-center gap-6">
                <div class="w-16 h-16 bg-slate-50 rounded-2xl flex items-center justify-center text-[var(--navy)]">
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
                <div class="border-r border-slate-100 pr-6">
                    <button class="flex items-center gap-2 text-[var(--navy)] font-bold hover:text-[var(--primary)] transition-colors">
                        <span class="text-sm">عرض التفاصيل</span>
                        <span class="material-symbols-outlined text-lg">chevron_left</span>
                    </button>
                </div>
            </div>
            <div class="history-card bg-white border border-slate-50 rounded-3xl p-6 shadow-sm flex items-center gap-6">
                <div class="w-16 h-16 bg-slate-50 rounded-2xl flex items-center justify-center text-[var(--navy)]">
                    <span class="material-symbols-outlined text-3xl">tire_repair</span>
                </div>
                <div class="flex-grow grid grid-cols-1 md:grid-cols-4 gap-4 items-center">
                    <div>
                        <h3 class="text-lg font-black text-[var(--navy)]">تغيير إطارات</h3>
                        <p class="text-xs text-slate-400 font-bold">رقم الطلب: #INQ-6312</p>
                    </div>
                    <div>
                        <span class="text-xs text-slate-400 block font-bold mb-1">التاريخ</span>
                        <span class="text-sm font-bold text-[var(--navy)]">28 أبريل 2024</span>
                    </div>
                    <div>
                        <span class="text-xs text-slate-400 block font-bold mb-1">السيارة المستخدمة</span>
                        <span class="text-sm font-bold text-[var(--navy)]">هيونداي إلنترا</span>
                    </div>
                    <div class="text-left">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-green-50 text-green-600">
                            <span class="w-1.5 h-1.5 rounded-full bg-green-500 ml-2"></span>
                            مكتمل
                        </span>
                    </div>
                </div>
                <div class="border-r border-slate-100 pr-6">
                    <button class="flex items-center gap-2 text-[var(--navy)] font-bold hover:text-[var(--primary)] transition-colors">
                        <span class="text-sm">عرض التفاصيل</span>
                        <span class="material-symbols-outlined text-lg">chevron_left</span>
                    </button>
                </div>
            </div>
            <div class="history-card bg-white border border-slate-50 rounded-3xl p-6 shadow-sm flex items-center gap-6">
                <div class="w-16 h-16 bg-slate-50 rounded-2xl flex items-center justify-center text-[var(--navy)]">
                    <span class="material-symbols-outlined text-3xl">auto_towing</span>
                </div>
                <div class="flex-grow grid grid-cols-1 md:grid-cols-4 gap-4 items-center">
                    <div>
                        <h3 class="text-lg font-black text-[var(--navy)]">ونش إنقاذ</h3>
                        <p class="text-xs text-slate-400 font-bold">رقم الطلب: #INQ-5501</p>
                    </div>
                    <div>
                        <span class="text-xs text-slate-400 block font-bold mb-1">التاريخ</span>
                        <span class="text-sm font-bold text-[var(--navy)]">15 مارس 2024</span>
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
                <div class="border-r border-slate-100 pr-6">
                    <button class="flex items-center gap-2 text-[var(--navy)] font-bold hover:text-[var(--primary)] transition-colors">
                        <span class="text-sm">عرض التفاصيل</span>
                        <span class="material-symbols-outlined text-lg">chevron_left</span>
                    </button>
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