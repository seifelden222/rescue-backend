<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>لوحة التحكم | منصة إنقاذ</title>
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
            font-family: 'Cairo', sans-serif;
            background-color: var(--light-bg);
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 48;
        }
        .sidebar-item-active {
            background-color: #f1f5f9;
            color: var(--navy);
            border-left: 4px solid var(--primary);
        }
    </style>
</head>

<body class="text-slate-800 antialiased min-h-screen flex overflow-x-hidden">
    <aside class="w-72 bg-white h-screen sticky top-0 border-l border-slate-100 flex flex-col shrink-0">
        <div class="p-8 flex flex-col items-center border-b border-slate-50">

            <img alt="محمد الأحمد" class="w-full h-full object-cover " src="assets/img/logo.png" style="width: 100px;" />

            <h3 class="font-bold text-lg text-[var(--navy)]">محمد الأحمد</h3>
            <p class="text-sm text-slate-400">مستخدم</p>
        </div>
        <nav class="flex-grow py-6">
            <ul class="space-y-1">
                <li>
                    <a class="sidebar-item-active flex items-center gap-3 px-8 py-4 font-bold transition-all" href="home.html">
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
    <main class="flex-grow p-10 max-w-6xl mx-auto">
        <header class="mb-10">
            <h1 class="text-3xl font-black text-[var(--navy)] mb-2">أهلاً بك، محمد الأحمد</h1>
            <p class="text-slate-500 font-medium">نظرة عامة على حسابك ونشاطك الأخير</p>
        </header>
        <section class="mb-10">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-xl font-bold text-[var(--navy)]">إجراءات سريعة</h2>
            </div>
            <button class="bg-[var(--primary)] hover:bg-red-700 text-white px-8 py-5 rounded-2xl font-black text-xl shadow-xl shadow-red-500/20 transition-all flex items-center gap-3 active:scale-[0.98]">
                <span class="material-symbols-outlined">emergency</span>
                <a href="help.html"> طلب مساعدة الآن</a>
            </button>
        </section>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
            <section>
                <h2 class="text-xl font-bold text-[var(--navy)] mb-6">سيارتي الأساسية</h2>
                <div class="bg-white rounded-[2.5rem] shadow-sm border border-slate-100 overflow-hidden group hover:shadow-md transition-all">
                    <div class="h-48 overflow-hidden">
                        <img alt="Toyota Camry" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA32rthUE2VFpwfQuyRxgBDqGNx4TO6T-l1NggyXzS3z06iAyPyAeiJBcCDHubdfzR1dE-_c81L4lYmc2PK7t0sKSFzY2BMfIsbhBD558cpk0kmp7UWrG-bgYzgruyNDmhIVFanRcY_uRvVxVftlrL5vZSvMIZwbPV3Th-U7pZ2Q-KqNXBz3tNsWpT3gpBRk_1dFhYCh3PtIEFUQ4h5cVBVtF_HF44fPOSX29PD3Vbf4f1wwd8m11qoMyHt6h51VUoOiTdkcbSiB0uJ" />
                    </div>
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="text-2xl font-black text-[var(--navy)] mb-1">تويوتا كامري 2023</h3>
                                <p class="text-slate-500 font-bold tracking-widest" dir="ltr">أ ب ج 1234</p>
                            </div>
                            <span class="bg-green-50 text-green-600 px-4 py-1.5 rounded-full text-sm font-bold flex items-center gap-2">
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
            <section>
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-xl font-bold text-[var(--navy)]">آخر الطلبات</h2>
                    <a class="text-[var(--primary)] font-bold hover:underline" href="#">عرض الكل</a>
                </div>
                <div class="space-y-4">
                    <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-slate-100 flex items-center justify-between group hover:shadow-md transition-all">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center text-[var(--navy)]">
                                <span class="material-symbols-outlined text-2xl">local_shipping</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-[var(--navy)]">سحب سيارة</h4>
                                <p class="text-sm text-slate-400 font-medium">15 مايو 2024</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-sm font-bold text-slate-500">مكتمل</span>
                            <div class="w-8 h-8 rounded-full bg-slate-50 flex items-center justify-center text-slate-400">
                                <span class="material-symbols-outlined text-lg">chevron_left</span>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-slate-100 flex items-center justify-between group hover:shadow-md transition-all">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center text-[var(--navy)]">
                                <span class="material-symbols-outlined text-2xl">tire_repair</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-[var(--navy)]">تغيير إطار</h4>
                                <p class="text-sm text-slate-400 font-medium">28 أبريل 2024</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-sm font-bold text-slate-500">مكتمل</span>
                            <div class="w-8 h-8 rounded-full bg-slate-50 flex items-center justify-center text-slate-400">
                                <span class="material-symbols-outlined text-lg">chevron_left</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <a class="fixed bottom-8 left-8 bg-[var(--navy)] text-white p-4 rounded-full shadow-2xl flex items-center gap-3 hover:bg-slate-800 transition-all z-50 group" href="tel:19000">
        <span class="material-symbols-outlined text-3xl text-[var(--primary)] group-hover:scale-110 transition-transform">support_agent</span>
        <div class="flex flex-col items-start leading-none pr-2">
            <span class="text-[10px] font-bold opacity-70">الدعم الفني</span>
            <span class="text-lg font-black tracking-widest" dir="ltr">19000</span>
        </div>
    </a>

</body>

</html>