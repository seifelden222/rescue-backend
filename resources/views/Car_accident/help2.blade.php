<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>تفاصيل الطلب | منصة إنقاذ</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <style type="text/tailwindcss">:root {
    --primary: #E31E24;
    --navy: #0F172A;
    --light-bg: #F8FAFC
    }
body {
    font-family: "Cairo", sans-serif;
    background-color: var(--light-bg)
    }
.material-symbols-outlined {
    font-variation-settings: "FILL" 0, "wght" 400, "GRAD" 0, "opsz" 48
    }
.sidebar-item-active {
    background-color: #f1f5f9;
    color: var(--navy);
    border-left: 4px solid var(--primary)
    }
.map-overlay {
    background: radial-gradient(circle, rgba(255, 255, 255, 0) 0%, rgba(15, 23, 42, 0.05) 100%)
    }.map-bg {
    background-image: ur[](https://lh3.googleusercontent.com/aida-public/AB6AXuBLPP_kJNdmp6INhYj-PF5svmMl0WEjMeJ35ENUsHukANYv8Xa1MTobtPyardaGB6uOchYY67fMDUm4ruz7OC6gfenicJccjjsNoMhhv1LUGQzAgnxJPjtxxxKmHzIFKaP4gYwXkoPj02NpvEx3EGECvHB8RNVFns3hGoCoAgNcVNtVpv_vBhHKNZk7W0S2FI9LkJ4OzKeQxj_AhCB3ol37liPJ_-bnwXoS2Yjd_q70yiJZyKwULyCAgci-Zmv4OHHql4NMlf9XNSTu);
    background-size: cover;
    background-position: center
    }.route-line {
    position: absolute;
    top: 45%;
    left: 35%;
    width: 300px;
    height: 4px;
    background: var(--primary);
    transform: rotate(-15deg);
    border-radius: 2px;
    box-shadow: 0 0 10px rgba(227, 30, 36, 0.4);
    z-index: 1
    }
.marker-user {
    position: absolute;
    top: 48%;
    left: 33%;
    z-index: 2
    }
.marker-provider {
    position: absolute;
    top: 40%;
    left: 55%;
    z-index: 2
    }</style>
</head>

<body class="text-slate-800 antialiased min-h-screen flex overflow-hidden">
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
                    <a class="sidebar-item-active flex items-center gap-3 px-8 py-4 font-bold transition-all" href="help.html">
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
    <main class="flex-grow relative overflow-hidden bg-slate-200">
        <div class="absolute inset-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.5!2d31.45!3d30.03!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583f!2sNew%20Cairo%2C%20Fifth%20Settlement%2C%20Cairo%2C%20Egypt!5e0!3m2!1sen!2seg!4v1730000000000" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="absolute inset-0 map-overlay"></div>

        <div class="relative">


        </div>
        </div>
        <div class="marker-provider">

        </div>
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
                    <a href="help3.html"> تأكيد الطلب</a>
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

</body>

</html>