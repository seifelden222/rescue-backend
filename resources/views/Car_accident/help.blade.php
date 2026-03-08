<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>اختر نوع المساعدة | منصة إنقاذ</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <style type="text/tailwindcss">
        :root {
            --primary: #E31E24;
            --navy: #0F172A;
            --light-bg: #F9FAFB;
        }
        body {
            font-family: 'Cairo', sans-serif;
            background-color: #FFFFFF;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 48;
        }
        .service-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .service-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 20px -5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="text-slate-800 antialiased min-h-screen flex flex-col bg-white">
    <header class="py-12 flex flex-col items-center gap-4">
        <div class="flex items-center gap-4">
            <img alt="Inqaz Platform Logo" class="" src="assets/img/logo.png" style="width: 100px;" />
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
                <div class="w-20 h-20 bg-slate-50 rounded-full flex items-center justify-center text-[var(--navy)] group-hover:bg-[var(--navy)] group-hover:text-white transition-colors">
                    <span class="material-symbols-outlined text-4xl">local_gas_station</span>
                </div>
                <span class="text-xl font-extrabold text-slate-700">تزويد وقود</span>
            </div>
            <div class="service-card cursor-pointer bg-white p-8 rounded-[2.5rem] shadow-sm border-2 border-slate-50 flex flex-col items-center gap-4 group">
                <div class="w-20 h-20 bg-slate-50 rounded-full flex items-center justify-center text-[var(--navy)] group-hover:bg-[var(--navy)] group-hover:text-white transition-colors">
                    <span class="material-symbols-outlined text-4xl">medical_services</span>
                </div>
                <span class="text-xl font-extrabold text-slate-700">إسعاف</span>
            </div>
            <div class="service-card cursor-pointer bg-white p-8 rounded-[2.5rem] shadow-sm border-2 border-slate-50 flex flex-col items-center gap-4 group">
                <div class="w-20 h-20 bg-slate-50 rounded-full flex items-center justify-center text-[var(--navy)] group-hover:bg-[var(--navy)] group-hover:text-white transition-colors">
                    <span class="material-symbols-outlined text-4xl">build</span>
                </div>
                <span class="text-xl font-extrabold text-slate-700">ميكانيكي</span>
            </div>
        </div>
        <div class="w-full max-w-sm mb-20">
            <button class="w-full bg-[var(--primary)] hover:bg-red-700 text-white py-5 rounded-2xl font-black text-xl shadow-xl shadow-red-500/20 transition-all flex items-center justify-center gap-3 active:scale-[0.98]">
                <a href="help2.html"> متابعة</a>
                <span class="material-symbols-outlined">arrow_back</span>
            </button>
        </div>
    </main>
    <footer class="py-12 border-t border-slate-100 mt-auto">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6 mb-8">

                <div class="text-slate-400 font-medium">
                    © 2026 منصة إنقاذ. جميع الحقوق محفوظة.
                </div>
            </div>
        </div>
    </footer>
    <a class="fixed bottom-8 left-8 bg-[var(--navy)] text-white p-4 rounded-full shadow-2xl flex items-center gap-3 hover:bg-slate-800 transition-all z-50 group" href="tel:19000">
        <span class="material-symbols-outlined text-3xl text-[var(--primary)] group-hover:scale-110 transition-transform">support_agent</span>
        <div class="flex flex-col items-start leading-none pr-2">
            <span class="text-[10px] font-bold opacity-70">الدعم الفني</span>
            <span class="text-lg font-black tracking-widest" dir="ltr">19000</span>
        </div>
    </a>

</body>

</html>