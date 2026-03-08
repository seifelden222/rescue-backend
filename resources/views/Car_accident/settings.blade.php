<!DOCTYPE html>
<html dir="rtl" lang="ar"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>الإعدادات | منصة إنقاذ</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
        .tab-active {
            color: var(--navy);
            border-bottom: 3px solid var(--primary);
        }
        .setting-card {
            transition: all 0.2s ease;
        }
        .toggle-checkbox:checked {
            @apply bg-[var(--primary)] border-[var(--primary)];
            right: 0;
        }
        .toggle-checkbox:checked + .toggle-label {
            @apply bg-red-100;
        }
    </style>
</head>
<body class="text-slate-800 antialiased min-h-screen flex">
<aside class="w-72 bg-white h-screen sticky top-0 border-l border-slate-100 flex flex-col shrink-0">
<div class="p-8 flex flex-col items-center border-b border-slate-50">

<img alt="محمد الأحمد" class="w-full h-full object-cover " src="assets/img/logo.png" style="width: 100px;"/>

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
<a class="flex items-center gap-3 px-8 py-4 text-slate-500 hover:text-[var(--navy)] hover:bg-slate-50 font-bold transition-all" href="notifications.html">
<span class="material-symbols-outlined">notifications</span>
                        الإشعارات
                    </a>
</li>
<li>
<a class="sidebar-item-active flex items-center gap-3 px-8 py-4 font-bold transition-all text-[var(--navy)]" href="settings.html">
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
<main class="flex-grow p-10 bg-white min-h-screen max-w-5xl mx-auto">
<div class="mb-10">
<h1 class="text-3xl font-black text-[var(--navy)] mb-2">الإعدادات</h1>
<p class="text-slate-500 font-bold">إدارة حسابك وتفضيلات المنصة</p>
</div>
<div class="flex gap-8 border-b border-slate-100 mb-8">
<button class="tab-active pb-4 px-2 font-bold transition-all">الملف الشخصي</button>
<button class="text-slate-400 pb-4 px-2 font-bold hover:text-[var(--navy)] transition-all">الأمان</button>
<button class="text-slate-400 pb-4 px-2 font-bold hover:text-[var(--navy)] transition-all">التنبيهات</button>
<button class="text-slate-400 pb-4 px-2 font-bold hover:text-[var(--navy)] transition-all">اللغة</button>
</div>
<div class="space-y-6">
<div class="setting-card bg-white border border-slate-100 rounded-3xl p-8 shadow-sm">
<div class="flex items-center justify-between mb-6">
<h2 class="text-xl font-bold text-[var(--navy)]">المعلومات الشخصية</h2>
<button class="flex items-center gap-2 text-[var(--primary)] font-bold px-4 py-2 hover:bg-red-50 rounded-xl transition-all">
<span class="material-symbols-outlined text-sm">edit</span>
                        تعديل
                    </button>
</div>
<div class="flex items-center gap-8">
<div class="relative group">
<img alt="محمد الأحمد" class="w-24 h-24 rounded-2xl object-cover border-4 border-slate-50" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBG5d0Zs8PqhhRrUUW9nSBuVnc9D5Is7hLkuyOUNencItZJRbbdRcSiDMyT75XbEPd3CbEourW4ZSCQHsgkWd8yZ_7SDyrdiWOUURRIddBG55doZOvDzBYtDftVMqFAF1Xs_B_B81qj6Yfc7BxNOeKfbQfFlUQz8kj3gIH2RGRWR2r4jKzJeVvd06C2YfRci_nh84V4W5MZ4Y_dyHaMN4emMbdCRgmQaeSLjvrUzpDycOVNTSALcq-HlmsBL6dnjAzJw9uzIc5f_zN8"/>
<div class="absolute inset-0 bg-black/20 rounded-2xl opacity-0 group-hover:opacity-100 flex items-center justify-center cursor-pointer transition-all">
<span class="material-symbols-outlined text-white">photo_camera</span>
</div>
</div>
<div class="grid grid-cols-2 gap-12 flex-grow">
<div>
<p class="text-xs text-slate-400 font-bold mb-1">الاسم الكامل</p>
<p class="text-lg font-bold text-[var(--navy)]">محمد الأحمد</p>
</div>
<div>
<p class="text-xs text-slate-400 font-bold mb-1">رقم الجوال</p>
<p class="text-lg font-bold text-[var(--navy)]" dir="ltr">+20 123 456 7890</p>
</div>
</div>
</div>
</div>
<div class="setting-card bg-white border border-slate-100 rounded-3xl p-8 shadow-sm">
<div class="flex items-center justify-between">
<div class="flex items-center gap-4">
<div class="w-12 h-12 bg-slate-50 rounded-2xl flex items-center justify-center text-[var(--navy)]">
<span class="material-symbols-outlined">lock</span>
</div>
<div>
<h2 class="text-lg font-bold text-[var(--navy)]">كلمة المرور</h2>
<p class="text-sm text-slate-400 font-medium">تم تغيير كلمة المرور آخر مرة منذ 3 أشهر</p>
</div>
</div>
<button class="bg-slate-100 text-[var(--navy)] px-6 py-2.5 rounded-xl font-bold hover:bg-slate-200 transition-all">تحديث</button>
</div>
</div>
<div class="setting-card bg-white border border-slate-100 rounded-3xl p-8 shadow-sm">
<h2 class="text-lg font-bold text-[var(--navy)] mb-6">تفضيلات الإشعارات</h2>
<div class="space-y-6">
<div class="flex items-center justify-between">
<div class="flex items-center gap-4">
<div class="w-12 h-12 bg-slate-50 rounded-2xl flex items-center justify-center text-[var(--navy)]">
<span class="material-symbols-outlined">sms</span>
</div>
<div>
<p class="font-bold text-[var(--navy)]">رسائل نصية (SMS)</p>
<p class="text-sm text-slate-400">استلام تحديثات حالة الطلب عبر الرسائل النصية</p>
</div>
</div>
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-12 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer peer-checked:after:-translate-x-full rtl:peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:right-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[var(--primary)]"></div>
</label>
</div>
<div class="flex items-center justify-between border-t border-slate-50 pt-6">
<div class="flex items-center gap-4">
<div class="w-12 h-12 bg-slate-50 rounded-2xl flex items-center justify-center text-[var(--navy)]">
<span class="material-symbols-outlined">notifications_active</span>
</div>
<div>
<p class="font-bold text-[var(--navy)]">إشعارات التطبيق</p>
<p class="text-sm text-slate-400">تنبيهات فورية على الجوال والويب</p>
</div>
</div>
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-12 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer peer-checked:after:-translate-x-full rtl:peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:right-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[var(--primary)]"></div>
</label>
</div>
</div>
</div>
<div class="pt-8 flex justify-end">
<button class="bg-[var(--primary)] text-white px-10 py-4 rounded-2xl font-black text-lg shadow-lg shadow-red-200 hover:scale-[1.02] active:scale-[0.98] transition-all">
                    حفظ التغييرات
                </button>
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

</body></html>