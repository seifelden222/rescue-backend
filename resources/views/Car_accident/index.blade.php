<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>منصة إنقاذ | خدمات المساعدة على الطريق في مصر</title>
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
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.08);
        }
        .egypt-gradient {
            background: linear-gradient(135deg, #FFFFFF 0%, #F8FAFC 100%);
        }
        .gov-chip:hover {
            background-color: var(--primary);
            color: white;
            border-color: var(--primary);
        }
    </style>
</head>

<body class="text-slate-800 antialiased">
    <header class="fixed w-full z-50 bg-white/95 backdrop-blur-md border-b border-slate-100">
        <div class="container mx-auto px-6 h-20 flex items-center justify-between">
            <div class="flex items-center gap-4">
                <img alt="Inqaz Platform Logo" src="assets/img/logo.png" style="width: 70px;" />
                <div class="flex flex-col leading-none">
                    <span class="text-2xl font-black text-[var(--navy)] tracking-tight">منصة إنقاذ</span>
                </div>
            </div>
            <nav class="hidden lg:flex items-center gap-10">
                <a class="text-sm font-bold text-[var(--navy)] hover:text-[var(--primary)] transition-colors" href="#home">الرئيسية</a>
                <a class="text-sm font-bold text-slate-500 hover:text-[var(--primary)] transition-colors" href="#services">خدماتنا</a>
                <a class="text-sm font-bold text-slate-500 hover:text-[var(--primary)] transition-colors" href="#safety">دليل طوارئ الطرق</a>
                <a class="text-sm font-bold text-slate-500 hover:text-[var(--primary)] transition-colors" href="#coverage">نطاق التغطية</a>

            </nav>
            <div class="flex items-center gap-4">
                <a class="hidden md:flex items-center gap-2 text-[var(--navy)] font-bold bg-slate-50 px-4 py-2 rounded-full border border-slate-100" href="tel:19000">
                    <span class="material-symbols-outlined text-xl text-[var(--primary)]">support_agent</span>
                    <span class="tracking-widest" dir="ltr">19000</span>
                </a>
                <button class="bg-[var(--primary)] text-white px-7 py-2.5 rounded-xl font-extrabold shadow-lg shadow-red-500/20 hover:bg-red-700 transition-all flex items-center gap-2">
                    <a href="login.html"> طلب ونش إنقاذ</a>
                </button>
            </div>
        </div>
    </header>
    <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden egypt-gradient" id="home">
        <div class="container mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="max-w-2xl text-center lg:text-right">
                    <div class="inline-flex items-center gap-2 bg-white border border-slate-200 px-4 py-2 rounded-full text-slate-700 mb-8 shadow-sm">
                        <span class="relative flex h-3 w-3">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                        </span>
                        <span class="text-sm font-bold">متاح الآن على كافة طرق مصر السريعة والداخلية</span>
                    </div>
                    <h1 class="text-5xl md:text-7xl font-black text-[var(--navy)] mb-8 leading-[1.15]">
                        منصة <span class="text-[var(--primary)]">إنقاذ</span><br />
                        رفيقك على الطريق
                    </h1>
                    <p class="text-xl text-slate-600 mb-12 leading-relaxed max-w-xl mx-auto lg:mr-0">
                        أول منصة رقمية متكاملة لخدمات الإنقاذ السريع في مصر. سواء كنت على الطريق الدائري، محور 26 يوليو، أو طرق السفر؛ نضمن لك ونش إنقاذ محترف بأسعار عادلة وتغطية شاملة.
                    </p>

                </div>
                <div class="relative">
                    <div class="absolute -top-20 -left-20 w-96 h-96 bg-red-100 rounded-full blur-3xl opacity-50 -z-10"></div>
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border-8 border-white">
                        <img alt="Egyptian Recovery Winch on Modern Highway" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBeamusv7V0ZVS-b4YzLLi1pO5oMkzef5u8OGespYI7ZkesAlumcAEtUE1nBDz8Tsf2juEmCwcoZfzJu8VB-UDjn_EXrbPlu1qSK0zkvLU0wKV1uxCjDGPU0Pmkwn7ojNCEmoc4a--ztIVLiIeYgi3WAWnT_a2lDXHzROSo5dilElw2RzqCpUeCeBLsoXCGAXpMQ7LUGu8kZoMMHQM7czHpOBq2JtwC-18cRY7ovRh96nHeM7Z4ivj7kxc1E29-r9JJMSScOGHXLVij" />
                        <div class="absolute bottom-0 inset-x-0 p-8 bg-gradient-to-t from-black/80 to-transparent">
                            <div class="flex items-center gap-4 text-white">
                                <div class="bg-[var(--primary)] p-3 rounded-full">
                                    <span class="material-symbols-outlined">verified_user</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-lg">خدمة معتمدة من المرور</h4>
                                    <p class="text-sm opacity-80">أوناش مطابقة للمواصفات الفنية المصرية</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute -bottom-10 -right-10 bg-white p-8 rounded-3xl shadow-2xl border border-slate-100 hidden xl:block">
                        <div class="flex items-center gap-6">
                            <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center text-[var(--navy)]">
                                <span class="material-symbols-outlined text-4xl">timer</span>
                            </div>
                            <div>
                                <p class="text-xs text-slate-400 font-bold mb-1 uppercase tracking-wider">متوسط سرعة الاستجابة</p>
                                <p class="text-3xl font-black text-[var(--navy)]">18 دقيقة</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-white border-y border-slate-50 py-12">
        <div class="container mx-auto px-6">
            <div class="flex flex-wrap justify-between items-center gap-8 max-w-5xl mx-auto">
                <div class="flex flex-col items-center">
                    <span class="text-4xl font-black text-[var(--navy)]">60k+</span>
                    <span class="text-sm font-bold text-slate-400">حالة تم إنقاذها بنجاح</span>
                </div>
                <div class="h-12 w-px bg-slate-100 hidden md:block"></div>
                <div class="flex flex-col items-center">
                    <span class="text-4xl font-black text-[var(--navy)]">27</span>
                    <span class="text-sm font-bold text-slate-400">محافظة مغطاة بالكامل</span>
                </div>
                <div class="h-12 w-px bg-slate-100 hidden md:block"></div>
                <div class="flex flex-col items-center">
                    <span class="text-4xl font-black text-[var(--navy)]">1500+</span>
                    <span class="text-sm font-bold text-slate-400">ونش معتمد على المنصة</span>
                </div>
                <div class="h-12 w-px bg-slate-100 hidden md:block"></div>
                <div class="flex flex-col items-center">
                    <span class="text-4xl font-black text-[var(--navy)]">4.9/5</span>
                    <span class="text-sm font-bold text-slate-400">تقييم السائقين في مصر</span>
                </div>
            </div>
        </div>
    </div>
    <section class="py-24 bg-[var(--light-bg)]" id="services">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-20">
                <h2 class="text-[var(--primary)] font-black mb-4 text-sm tracking-widest uppercase">خدماتنا اللوجستية</h2>
                <h3 class="text-4xl md:text-5xl font-black text-[var(--navy)] mb-6">أوناش إنقاذ متخصصة لكل المواقف</h3>
                <p class="text-lg text-slate-500">نقدم حلولاً ذكية ومتكاملة للطوارئ على الطريق، نعتمد على أحدث التقنيات لضمان سلامتك وسلامة سيارتك.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="service-card bg-white p-10 rounded-3xl shadow-sm border border-slate-100 transition-all group">
                    <div class="w-16 h-16 bg-red-50 text-[var(--primary)] rounded-2xl flex items-center justify-center mb-8 group-hover:bg-[var(--primary)] group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined text-4xl">auto_towing</span>
                    </div>
                    <h4 class="text-2xl font-bold text-[var(--navy)] mb-4">ونش إنقاذ سيارات</h4>
                    <p class="text-slate-500 mb-8 leading-relaxed">أوناش هيدروليك حديثة مخصصة لنقل السيارات الملاكي والـ SUV بجميع أحجامها في كافة مناطق مصر.</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center gap-2 text-sm font-bold text-slate-600"><span class="material-symbols-outlined text-green-500 text-sm">check_circle</span> تغطية للطرق السريعة</li>
                        <li class="flex items-center gap-2 text-sm font-bold text-slate-600"><span class="material-symbols-outlined text-green-500 text-sm">check_circle</span> تأمين كامل على السيارة</li>
                    </ul>
                    <a class="text-[var(--primary)] font-black flex items-center gap-2 text-sm" href="#">
                        اطلب الخدمة الآن
                        <span class="material-symbols-outlined text-sm">arrow_back</span>
                    </a>
                </div>
                <div class="service-card bg-white p-10 rounded-3xl shadow-sm border border-slate-100 transition-all group">
                    <div class="w-16 h-16 bg-blue-50 text-[var(--navy)] rounded-2xl flex items-center justify-center mb-8 group-hover:bg-[var(--navy)] group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined text-4xl">car_repair</span>
                    </div>
                    <h4 class="text-2xl font-bold text-[var(--navy)] mb-4">أعطال الميكانيكا والكهرباء</h4>
                    <p class="text-slate-500 mb-8 leading-relaxed">فنيون متخصصون للصيانات السريعة: شحن البطارية (وصلة)، تغيير الإطارات، أو توصيل الوقود في موقعك.</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center gap-2 text-sm font-bold text-slate-600"><span class="material-symbols-outlined text-green-500 text-sm">check_circle</span> تغيير كاوتش (إطارات)</li>
                        <li class="flex items-center gap-2 text-sm font-bold text-slate-600"><span class="material-symbols-outlined text-green-500 text-sm">check_circle</span> شحن/تغيير بطارية</li>
                    </ul>
                    <a class="text-[var(--primary)] font-black flex items-center gap-2 text-sm" href="#">
                        عرض تفاصيل الطوارئ
                        <span class="material-symbols-outlined text-sm">arrow_back</span>
                    </a>
                </div>
                <div class="service-card bg-white p-10 rounded-3xl shadow-sm border border-slate-100 transition-all group">
                    <div class="w-16 h-16 bg-slate-50 text-slate-500 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-slate-800 group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined text-4xl">engineering</span>
                    </div>
                    <h4 class="text-2xl font-bold text-[var(--navy)] mb-4">إنقاذ النقل الثقيل</h4>
                    <p class="text-slate-500 mb-8 leading-relaxed">أوناش عملاقة متخصصة في سحب الميكروباصات، الأتوبيسات، وسيارات النقل الثقيل والجامبو.</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center gap-2 text-sm font-bold text-slate-600"><span class="material-symbols-outlined text-green-500 text-sm">check_circle</span> أوناش تلسكوبية حديثة</li>
                        <li class="flex items-center gap-2 text-sm font-bold text-slate-600"><span class="material-symbols-outlined text-green-500 text-sm">check_circle</span> متاح لشركات النقل</li>
                    </ul>
                    <a class="text-[var(--primary)] font-black flex items-center gap-2 text-sm" href="#">
                        خدمات الشركات
                        <span class="material-symbols-outlined text-sm">arrow_back</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 bg-white" id="safety">
        <div class="container mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-20 items-center">
                <div class="order-2 lg:order-1 relative">
                    <div class="relative z-10">
                        <img alt="Safety Procedure in Egypt - Reflector Triangle" class="w-full rounded-[2.5rem] shadow-2xl" src="assets/img/im1.jpg" />
                        <div class="absolute -bottom-8 -left-8 bg-[var(--navy)] text-white p-8 rounded-3xl shadow-2xl border-4 border-white max-w-xs">
                            <p class="text-2xl font-black mb-4 flex items-center gap-2">
                                <span class="material-symbols-outlined text-[var(--primary)]">emergency_share</span>
                                طوارئ مصر
                            </p>
                            <div class="space-y-4">
                                <div class="flex justify-between border-b border-white/10 pb-2">
                                    <span class="opacity-70">طوارئ المرور</span>
                                    <span class="font-black" dir="ltr">0122 111 0000</span>
                                </div>
                                <div class="flex justify-between border-b border-white/10 pb-2">
                                    <span class="opacity-70">الإسعاف المصري</span>
                                    <span class="font-black">123</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="opacity-70">النجدة</span>
                                    <span class="font-black">122</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute -top-10 -right-10 w-64 h-64 bg-slate-100 rounded-full -z-10 opacity-60"></div>
                </div>
                <div class="order-1 lg:order-2">
                    <h2 class="text-[var(--primary)] font-black mb-4 text-sm tracking-widest uppercase">سلامتك أولاً</h2>
                    @extends('layouts.app')

                    @section('content')
                    <header class="fixed w-full z-50 bg-white/95 backdrop-blur-md border-b border-slate-100">
                        <div class="container mx-auto px-6 h-20 flex items-center justify-between">
                            <div class="flex items-center gap-4">
                                <img alt="Inqaz Platform Logo" src="{{ asset('img/logo.png') }}" style="width: 70px;" />
                                <div class="flex flex-col leading-none">
                                    <span class="text-2xl font-black text-[var(--navy)] tracking-tight">منصة إنقاذ</span>
                                </div>
                            </div>
                            <nav class="hidden lg:flex items-center gap-10">
                                <a class="text-sm font-bold text-[var(--navy)] hover:text-[var(--primary)] transition-colors" href="#home">الرئيسية</a>
                                <a class="text-sm font-bold text-slate-500 hover:text-[var(--primary)] transition-colors" href="#services">خدماتنا</a>
                                <a class="text-sm font-bold text-slate-500 hover:text-[var(--primary)] transition-colors" href="#safety">دليل طوارئ الطرق</a>
                                <a class="text-sm font-bold text-slate-500 hover:text-[var(--primary)] transition-colors" href="#coverage">نطاق التغطية</a>

                            </nav>
                            <div class="flex items-center gap-4">
                                <a class="hidden md:flex items-center gap-2 text-[var(--navy)] font-bold bg-slate-50 px-4 py-2 rounded-full border border-slate-100" href="tel:19000">
                                    <span class="material-symbols-outlined text-xl text-[var(--primary)]">support_agent</span>
                                    <span class="tracking-widest" dir="ltr">19000</span>
                                </a>
                                <button class="bg-[var(--primary)] text-white px-7 py-2.5 rounded-xl font-extrabold shadow-lg shadow-red-500/20 hover:bg-red-700 transition-all flex items-center gap-2">
                                    <a href="/car-accident/login"> طلب ونش إنقاذ</a>
                                </button>
                            </div>
                        </div>
                    </header>
                    <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden egypt-gradient" id="home">
                        <div class="container mx-auto px-6 relative z-10">
                            <div class="grid lg:grid-cols-2 gap-16 items-center">
                                <div class="max-w-2xl text-center lg:text-right">
                                    <div class="inline-flex items-center gap-2 bg-white border border-slate-200 px-4 py-2 rounded-full text-slate-700 mb-8 shadow-sm">
                                        <span class="relative flex h-3 w-3">
                                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                                            <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                                        </span>
                                        <span class="text-sm font-bold">متاح الآن على كافة طرق مصر السريعة والداخلية</span>
                                    </div>
                                    <h1 class="text-5xl md:text-7xl font-black text-[var(--navy)] mb-8 leading-[1.15]">
                                        منصة <span class="text-[var(--primary)]">إنقاذ</span><br />
                                        رفيقك على الطريق
                                    </h1>
                                    <p class="text-xl text-slate-600 mb-12 leading-relaxed max-w-xl mx-auto lg:mr-0">
                                        أول منصة رقمية متكاملة لخدمات الإنقاذ السريع في مصر. سواء كنت على الطريق الدائري، محور 26 يوليو، أو طرق السفر؛ نضمن لك ونش إنقاذ محترف بأسعار عادلة وتغطية شاملة.
                                    </p>

                                </div>
                                <div class="relative">
                                    <div class="absolute -top-20 -left-20 w-96 h-96 bg-red-100 rounded-full blur-3xl opacity-50 -z-10"></div>
                                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border-8 border-white">
                                        <img alt="Egyptian Recovery Winch on Modern Highway" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBeamusv7V0ZVS-b4YzLLi1pO5oMkzef5u8OGespYI7ZkesAlumcAEtUE1nBDz8Tsf2juEmCwcoZfzJu8VB-UDjn_EXrbPlu1qSK0zkvLU0wKV1uxCjDGPU0Pmkwn7ojNCEmoc4a--ztIVLiIeYgi3WAWnT_a2lDXHzROSo5dilElw2RzqCpUeCeBLsoXCGAXpMQ7LUGu8kZoMMHQM7czHpOBq2JtwC-18cRY7ovRh96nHeM7Z4ivj7kxc1E29-r9JJMSScOGHXLVij" />
                                        <div class="absolute bottom-0 inset-x-0 p-8 bg-gradient-to-t from-black/80 to-transparent">
                                            <div class="flex items-center gap-4 text-white">
                                                <div class="bg-[var(--primary)] p-3 rounded-full">
                                                    <span class="material-symbols-outlined">verified_user</span>
                                                </div>
                                                <div>
                                                    <h4 class="font-bold text-lg">خدمة معتمدة من المرور</h4>
                                                    <p class="text-sm opacity-80">أوناش مطابقة للمواصفات الفنية المصرية</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="absolute -bottom-10 -right-10 bg-white p-8 rounded-3xl shadow-2xl border border-slate-100 hidden xl:block">
                                        <div class="flex items-center gap-6">
                                            <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center text-[var(--navy)]">
                                                <span class="material-symbols-outlined text-4xl">timer</span>
                                            </div>
                                            <div>
                                                <p class="text-xs text-slate-400 font-bold mb-1 uppercase tracking-wider">متوسط سرعة الاستجابة</p>
                                                <p class="text-3xl font-black text-[var(--navy)]">18 دقيقة</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="bg-white border-y border-slate-50 py-12">
                        <div class="container mx-auto px-6">
                            <div class="flex flex-wrap justify-between items-center gap-8 max-w-5xl mx-auto">
                                <div class="flex flex-col items-center">
                                    <span class="text-4xl font-black text-[var(--navy)]">60k+</span>
                                    <span class="text-sm font-bold text-slate-400">حالة تم إنقاذها بنجاح</span>
                                </div>
                                <div class="h-12 w-px bg-slate-100 hidden md:block"></div>
                                <div class="flex flex-col items-center">
                                    <span class="text-4xl font-black text-[var(--navy)]">27</span>
                                    <span class="text-sm font-bold text-slate-400">محافظة مغطاة بالكامل</span>
                                </div>
                                <div class="h-12 w-px bg-slate-100 hidden md:block"></div>
                                <div class="flex flex-col items-center">
                                    <span class="text-4xl font-black text-[var(--navy)]">1500+</span>
                                    <span class="text-sm font-bold text-slate-400">ونش معتمد على المنصة</span>
                                </div>
                                <div class="h-12 w-px bg-slate-100 hidden md:block"></div>
                                <div class="flex flex-col items-center">
                                    <span class="text-4xl font-black text-[var(--navy)]">4.9/5</span>
                                    <span class="text-sm font-bold text-slate-400">تقييم السائقين في مصر</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="py-24 bg-[var(--light-bg)]" id="services">
                        <div class="container mx-auto px-6">
                            <div class="text-center max-w-3xl mx-auto mb-20">
                                <h2 class="text-[var(--primary)] font-black mb-4 text-sm tracking-widest uppercase">خدماتنا اللوجستية</h2>
                                <h3 class="text-4xl md:text-5xl font-black text-[var(--navy)] mb-6">أوناش إنقاذ متخصصة لكل المواقف</h3>
                                <p class="text-lg text-slate-500">نقدم حلولاً ذكية ومتكاملة للطوارئ على الطريق، نعتمد على أحدث التقنيات لضمان سلامتك وسلامة سيارتك.</p>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                                <div class="service-card bg-white p-10 rounded-3xl shadow-sm border border-slate-100 transition-all group">
                                    <div class="w-16 h-16 bg-red-50 text-[var(--primary)] rounded-2xl flex items-center justify-center mb-8 group-hover:bg-[var(--primary)] group-hover:text-white transition-colors">
                                        <span class="material-symbols-outlined text-4xl">auto_towing</span>
                                    </div>
                                    <h4 class="text-2xl font-bold text-[var(--navy)] mb-4">ونش إنقاذ سيارات</h4>
                                    <p class="text-slate-500 mb-8 leading-relaxed">أوناش هيدروليك حديثة مخصصة لنقل السيارات الملاكي والـ SUV بجميع أحجامها في كافة مناطق مصر.</p>
                                    <ul class="space-y-3 mb-8">
                                        <li class="flex items-center gap-2 text-sm font-bold text-slate-600"><span class="material-symbols-outlined text-green-500 text-sm">check_circle</span> تغطية للطرق السريعة</li>
                                        <li class="flex items-center gap-2 text-sm font-bold text-slate-600"><span class="material-symbols-outlined text-green-500 text-sm">check_circle</span> تأمين كامل على السيارة</li>
                                    </ul>
                                    <a class="text-[var(--primary)] font-black flex items-center gap-2 text-sm" href="#">
                                        اطلب الخدمة الآن
                                        <span class="material-symbols-outlined text-sm">arrow_back</span>
                                    </a>
                                </div>
                                <div class="service-card bg-white p-10 rounded-3xl shadow-sm border border-slate-100 transition-all group">
                                    <div class="w-16 h-16 bg-blue-50 text-[var(--navy)] rounded-2xl flex items-center justify-center mb-8 group-hover:bg-[var(--navy)] group-hover:text-white transition-colors">
                                        <span class="material-symbols-outlined text-4xl">car_repair</span>
                                    </div>
                                    <h4 class="text-2xl font-bold text-[var(--navy)] mb-4">أعطال الميكانيكا والكهرباء</h4>
                                    <p class="text-slate-500 mb-8 leading-relaxed">فنيون متخصصون للصيانات السريعة: شحن البطارية (وصلة)، تغيير الإطارات، أو توصيل الوقود في موقعك.</p>
                                    <ul class="space-y-3 mb-8">
                                        <li class="flex items-center gap-2 text-sm font-bold text-slate-600"><span class="material-symbols-outlined text-green-500 text-sm">check_circle</span> تغيير كاوتش (إطارات)</li>
                                        <li class="flex items-center gap-2 text-sm font-bold text-slate-600"><span class="material-symbols-outlined text-green-500 text-sm">check_circle</span> شحن/تغيير بطارية</li>
                                    </ul>
                                    <a class="text-[var(--primary)] font-black flex items-center gap-2 text-sm" href="#">
                                        عرض تفاصيل الطوارئ
                                        <span class="material-symbols-outlined text-sm">arrow_back</span>
                                    </a>
                                </div>
                                <div class="service-card bg-white p-10 rounded-3xl shadow-sm border border-slate-100 transition-all group">
                                    <div class="w-16 h-16 bg-slate-50 text-slate-500 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-slate-800 group-hover:text-white transition-colors">
                                        <span class="material-symbols-outlined text-4xl">engineering</span>
                                    </div>
                                    <h4 class="text-2xl font-bold text-[var(--navy)] mb-4">إنقاذ النقل الثقيل</h4>
                                    <p class="text-slate-500 mb-8 leading-relaxed">أوناش عملاقة متخصصة في سحب الميكروباصات، الأتوبيسات، وسيارات النقل الثقيل والجامبو.</p>
                                    <ul class="space-y-3 mb-8">
                                        <li class="flex items-center gap-2 text-sm font-bold text-slate-600"><span class="material-symbols-outlined text-green-500 text-sm">check_circle</span> أوناش تلسكوبية حديثة</li>
                                        <li class="flex items-center gap-2 text-sm font-bold text-slate-600"><span class="material-symbols-outlined text-green-500 text-sm">check_circle</span> متاح لشركات النقل</li>
                                    </ul>
                                    <a class="text-[var(--primary)] font-black flex items-center gap-2 text-sm" href="#">
                                        خدمات الشركات
                                        <span class="material-symbols-outlined text-sm">arrow_back</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="py-24 bg-white" id="safety">
                        <div class="container mx-auto px-6">
                            <div class="grid lg:grid-cols-2 gap-20 items-center">
                                <div class="order-2 lg:order-1 relative">
                                    <div class="relative z-10">
                                        <img alt="Safety Procedure in Egypt - Reflector Triangle" class="w-full rounded-[2.5rem] shadow-2xl" src="{{ asset('img/im1.jpg') }}" />
                                        <div class="absolute -bottom-8 -left-8 bg-[var(--navy)] text-white p-8 rounded-3xl shadow-2xl border-4 border-white max-w-xs">
                                            <p class="text-2xl font-black mb-4 flex items-center gap-2">
                                                <span class="material-symbols-outlined text-[var(--primary)]">emergency_share</span>
                                                طوارئ مصر
                                            </p>
                                            <div class="space-y-4">
                                                <div class="flex justify-between border-b border-white/10 pb-2">
                                                    <span class="opacity-70">طوارئ المرور</span>
                                                    <span class="font-black" dir="ltr">0122 111 0000</span>
                                                </div>
                                                <div class="flex justify-between border-b border-white/10 pb-2">
                                                    <span class="opacity-70">الإسعاف المصري</span>
                                                    <span class="font-black">123</span>
                                                </div>
                                                <div class="flex justify-between">
                                                    <span class="opacity-70">النجدة</span>
                                                    <span class="font-black">122</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="absolute -top-10 -right-10 w-64 h-64 bg-slate-100 rounded-full -z-10 opacity-60"></div>
                                </div>
                                <div class="order-1 lg:order-2">
                                    <h2 class="text-[var(--primary)] font-black mb-4 text-sm tracking-widest uppercase">سلامتك أولاً</h2>
                                    <h3 class="text-4xl font-black text-[var(--navy)] mb-10 leading-tight">إجراءات السلامة والحوادث على الطرق المصرية</h3>
                                    <div class="space-y-10">
                                        <div class="flex gap-6">
                                            <div class="flex-shrink-0 w-14 h-14 rounded-2xl bg-red-50 text-[var(--primary)] flex items-center justify-center font-black text-xl border border-red-100 shadow-sm">١</div>
                                            <div>
                                                <h4 class="text-2xl font-bold text-[var(--navy)] mb-2">تأمين موقع الحادث</h4>
                                                <p class="text-slate-500 leading-relaxed text-lg">تحرك فوراً للحارة اليمين، أشعل أضواء الانتظار، وضع المثلث التحذيري على مسافة ٥٠ متراً على الطرق السريعة لتنبيه السيارات القادمة.</p>
                                            </div>
                                        </div>
                                        <div class="flex gap-6">
                                            <div class="flex-shrink-0 w-14 h-14 rounded-2xl bg-blue-50 text-[var(--navy)] flex items-center justify-center font-black text-xl border border-blue-100 shadow-sm">٢</div>
                                            <div>
                                                <h4 class="text-2xl font-bold text-[var(--navy)] mb-2">إبلاغ عمليات المرور</h4>
                                                <p class="text-slate-500 leading-relaxed text-lg">اتصل بـ <b>طوارئ المرور (01221110000)</b> للإبلاغ عن الحادث وتأمين حركة السير، خاصة في حالات تعطل المحاور الرئيسية.</p>
                                            </div>
                                        </div>
                                        <div class="flex gap-6">
                                            <div class="flex-shrink-0 w-14 h-14 rounded-2xl bg-slate-100 text-[var(--navy)] flex items-center justify-center font-black text-xl border border-slate-200 shadow-sm">٣</div>
                                            <div>
                                                <h4 class="text-2xl font-bold text-[var(--navy)] mb-2">طلب إنقاذ "منصة إنقاذ"</h4>
                                                <p class="text-slate-500 leading-relaxed text-lg">اطلب الونش عبر التطبيق أو الرقم الموحد <b>19000</b>. سيتم توجيه أقرب ونش معتمد إليك فوراً مع متابعة حية لموقعه.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="py-24 bg-[var(--navy)] text-white relative overflow-hidden" id="coverage">
                        <div class="container mx-auto px-6 relative z-10">
                            <div class="text-center max-w-3xl mx-auto mb-16">
                                <h2 class="text-[var(--primary)] font-black mb-4 text-sm tracking-widest uppercase">نطاق عملنا</h2>
                                <h3 class="text-4xl md:text-5xl font-black mb-6">نغطي كافة أنحاء الجمهورية</h3>
                                <p class="text-slate-400 text-lg">أينما كنت في مصر، نحن هناك. شبكة أوناش إنقاذ منتشرة في كافة المحافظات والمحاور الرئيسية.</p>
                            </div>
                            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 mb-20">
                                <div class="gov-chip border border-white/10 p-5 rounded-2xl text-center font-bold transition-all cursor-default backdrop-blur-sm bg-white/5">القاهرة</div>
                                <div class="gov-chip border border-white/10 p-5 rounded-2xl text-center font-bold transition-all cursor-default backdrop-blur-sm bg-white/5">الجيزة</div>
                                <div class="gov-chip border border-white/10 p-5 rounded-2xl text-center font-bold transition-all cursor-default backdrop-blur-sm bg-white/5">الإسكندرية</div>
                                <div class="gov-chip border border-white/10 p-5 rounded-2xl text-center font-bold transition-all cursor-default backdrop-blur-sm bg-white/5">الساحل الشمالي</div>
                                <div class="gov-chip border border-white/10 p-5 rounded-2xl text-center font-bold transition-all cursor-default backdrop-blur-sm bg-white/5">طريق العين السخنة</div>
                                <div class="gov-chip border border-white/10 p-5 rounded-2xl text-center font-bold transition-all cursor-default backdrop-blur-sm bg-white/5">الصعيد الجواني</div>
                                <div class="gov-chip border border-white/10 p-5 rounded-2xl text-center font-bold transition-all cursor-default backdrop-blur-sm bg-white/5">الدلتا</div>
                                <div class="gov-chip border border-white/10 p-5 rounded-2xl text-center font-bold transition-all cursor-default backdrop-blur-sm bg-white/5">القناة وسيناء</div>
                                <div class="gov-chip border border-white/10 p-5 rounded-2xl text-center font-bold transition-all cursor-default backdrop-blur-sm bg-white/5">محور 26 يوليو</div>
                                <div class="gov-chip border border-white/10 p-5 rounded-2xl text-center font-bold transition-all cursor-default backdrop-blur-sm bg-white/5">الطريق الدائري</div>
                                <div class="gov-chip border border-white/10 p-5 rounded-2xl text-center font-bold transition-all cursor-default backdrop-blur-sm bg-white/5">العاصمة الإدارية</div>
                                <div class="gov-chip border border-white/10 p-5 rounded-2xl text-center font-bold transition-all cursor-default backdrop-blur-sm bg-white/5">طريق السويس</div>
                            </div>
                            <div class="relative rounded-[3rem] overflow-hidden">
                                <img alt="Modern Egyptian Highway Infrastructure" class="w-full h-[400px] object-cover opacity-60" src="{{ asset('img/im2.png') }}" />
                                <div class="absolute inset-0 flex items-center justify-center p-6 text-center">
                                    <div class="max-w-2xl">
                                        <h4 class="text-3xl font-black mb-6 italic">"نحن نؤمن بأن كل سائق في مصر يستحق خدمة إنقاذ سريعة، آمنة، وبسعر عادل."</h4>
                                        <div class="flex justify-center gap-4">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-red-600/10 rounded-full blur-[120px] -z-10 translate-y-1/2 translate-x-1/2"></div>
                    </section>
                    <section class="py-24 bg-white">
                        <div class="container mx-auto px-6">
                            <div class="text-center mb-16">
                                <h2 class="text-[var(--primary)] font-black mb-4 text-sm tracking-widest uppercase">ثقة السائقين</h2>
                                <h3 class="text-4xl font-black text-[var(--navy)]">تجارب حقيقية مع منصة إنقاذ</h3>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                                <div class="bg-white p-10 rounded-3xl border border-slate-100 shadow-sm hover:shadow-xl transition-all">
                                    <div class="flex text-yellow-400 mb-6">
                                        <span class="material-symbols-outlined fill-1">star</span><span class="material-symbols-outlined fill-1">star</span><span class="material-symbols-outlined fill-1">star</span><span class="material-symbols-outlined fill-1">star</span><span class="material-symbols-outlined fill-1">star</span>
                                    </div>
                                    <p class="text-slate-600 mb-8 italic leading-relaxed text-lg">"العربية عطلت مني على طريق السويس، طلبت الونش من منصة إنقاذ والونش كان عندي في ١٥ دقيقة بالضبط. السعر كان محدد ومفيش أي استغلال."</p>
                                    <div class="flex items-center gap-4">
                                        <img alt="User Review" class="w-14 h-14 rounded-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC4g-FBgRi_7Wqn3-HmrRmf0FdPUVRyk7NcQzJS6wB1BnFMSeEblzYKgK23rVYe6xVmzl_K7wHz5qKQc4q6n1bXBNo60Pd2_8XhEvAGUeEAerfimJV0P6IEGOFEJMoA7lfgaMQ7lS5WmTXNWXSNAvCJVRycrOT-KREiwYg7e7kxxLiG4WMNOyYbHjopXYROwkigTUkPdaW2ZhVjLfFt3B_r8a-z0CMnMip2-YOBSS8wz9kcnkulTwUD6SlYIv5_u1hBtgxO6soClQ5W" />
                                        <div>
                                            <h5 class="font-black text-[var(--navy)]">م. أحمد سلامة</h5><span class="text-xs text-slate-400 font-bold uppercase">القاهرة الجديدة</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white p-10 rounded-3xl border border-slate-100 shadow-sm hover:shadow-xl transition-all scale-105 z-10">
                                    <div class="flex text-yellow-400 mb-6">
                                        <span class="material-symbols-outlined fill-1">star</span><span class="material-symbols-outlined fill-1">star</span><span class="material-symbols-outlined fill-1">star</span><span class="material-symbols-outlined fill-1">star</span><span class="material-symbols-outlined fill-1">star</span>
                                    </div>
                                    <p class="text-slate-600 mb-8 italic leading-relaxed text-lg">"أحسن حاجة فيهم الاحترافية. الونش جه معاه كل أدوات الأمان وفني فاهم بيعمل إيه. بجد خدمة تشرف وأسعارهم ممتازة مقارنة بالأوناش اللي في الشارع."</p>
                                    <div class="flex items-center gap-4">
                                        <img alt="User Review" class="w-14 h-14 rounded-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDKOiQfmVQMilQQAwZ4TBR72XTmm0pl9wAT3gDtGV0hzJ68F1gaPtChwEFzRAdK0zjIQOB8aINtcDGhTnWubEoYdCxNr2ILStmjabEuUifdIJqmUlL8E-jJ5jPhb1yq8QLp48GQ6EIR8X0yNo1aAUkktDYKZAiqei33b9tUTWZnEAFxFN7pnlCuRJCgn85EPyVv5ymT-A1-ILJPp2iuHwepgVqltOvxPwmjZQWJMTy4hCIAVrXYM9yGnM3D-9YK66HacyuopbahBNWE" />
                                        <div>
                                            <h5 class="font-black text-[var(--navy)]">أستاذة سارة فهمي</h5><span class="text-xs text-slate-400 font-bold uppercase">الشيخ زايد</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white p-10 rounded-3xl border border-slate-100 shadow-sm hover:shadow-xl transition-all">
                                    <div class="flex text-yellow-400 mb-6">
                                        <span class="material-symbols-outlined fill-1">star</span><span class="material-symbols-outlined fill-1">star</span><span class="material-symbols-outlined fill-1">star</span><span class="material-symbols-outlined fill-1">star</span><span class="material-symbols-outlined fill-1">star</span>
                                    </div>
                                    <p class="text-slate-600 mb-8 italic leading-relaxed text-lg">"كنت مسافر الساحل والكاوتش ضرب، المنصة بعتت لي فني إنقاذ سريع خلص الموضوع في ربع ساعة. شكراً فريق إنقاذ."</p>
                                    <div class="flex items-center gap-4">
                                        <img alt="User Review" class="w-14 h-14 rounded-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAcZaGl83GhdjxbGsuEJQHJhlfL-LbiRZXSNX6btMf6xDqPLl90yOl8MEzZjHXA9Gf4kLzPeY2Lbehih8ByzEtnMNWoQk0WDMNwIZsCpfaPHRKWEzcSAx0qtp3c2ojcJmc8q7Gvpyjel6t7rh5knoWW1nJktC3PksCpJxfu8J2K24hWiTE6-b4I5o3E5gKvBIffLBsYOo_NmMM1fo8UoAn6VdAdSrEkNd3gZvrAtYLzbS8JAU_OI5rFyMEXNmrMwkgkDf7RBBvfS6dc" />
                                        <div>
                                            <h5 class="font-black text-[var(--navy)]">ك. هاني رمزي</h5><span class="text-xs text-slate-400 font-bold uppercase">طريق إسكندرية الصحراوي</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <footer class="bg-slate-50 border-t border-slate-100 pt-24 pb-12">
                        <div class="container mx-auto px-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-16 mb-20">
                                <div>
                                    <div class="flex items-center gap-4 mb-8">
                                        <img alt="Inqaz Platform Logo" class="" src="{{ asset('img/logo.png') }}" style="width: 100px;" />
                                        <span class="text-2xl font-black text-[var(--navy)]">منصة إنقاذ</span>
                                    </div>
                                    <p class="text-slate-500 leading-relaxed mb-8">المنصة الرائدة في مصر لخدمات الطوارئ والإنقاذ على الطريق، نربط السائقين بشبكة من الأوناش المعتمدة لضمان تجربة آمنة وسريعة.</p>

                                </div>
                                <div>
                                    <h5 class="font-black text-[var(--navy)] mb-8 text-lg">أقسام المنصة</h5>
                                    <ul class="space-y-4 text-slate-500 font-bold">
                                        <li><a class="hover:text-[var(--primary)] transition-colors" href="#">من نحن</a></li>
                                        <li><a class="hover:text-[var(--primary)] transition-colors" href="#">دليل السائق المصري</a></li>
                                        <li><a class="hover:text-[var(--primary)] transition-colors" href="#">انضم كأسطول ونش</a></li>
                                        <li><a class="hover:text-[var(--primary)] transition-colors" href="#">اتفاقية الاستخدام</a></li>
                                    </ul>
                                </div>
                                <div>
                                    <h5 class="font-black text-[var(--navy)] mb-8 text-lg">المكاتب الرئيسية</h5>
                                    <ul class="space-y-6 text-slate-500 font-bold">
                                        <li class="flex items-start gap-3">
                                            <span class="material-symbols-outlined text-[var(--primary)] mt-1">location_on</span>
                                            <span>القاهرة: المعادي، أبراج النيل</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <span class="material-symbols-outlined text-[var(--primary)] mt-1">location_on</span>
                                            <span>الإسكندرية: طريق الجيش، جليم</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <span class="material-symbols-outlined text-[var(--primary)] mt-1">location_on</span>
                                            <span>الغردقة: الممشى السياحي</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h5 class="font-black text-[var(--navy)] mb-8 text-lg">مركز الاتصال</h5>
                                    <div class="space-y-6">
                                        <a class="flex items-center gap-4 text-[var(--navy)] font-black text-2xl" href="tel:19000">
                                            <span class="material-symbols-outlined text-[var(--primary)] text-3xl">call</span>
                                            19000
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-12 border-t border-slate-200 flex flex-col md:flex-row justify-between items-center gap-6 text-sm text-slate-400 font-bold">
                            <p>© 2026 منصة إنقاذ للخدمات اللوجستية - شركة مساهمة مصرية</p>
                            <div class="flex gap-8">
                                <a class="hover:text-[var(--navy)]" href="#">سياسة الخصوصية</a>
                                <a class="hover:text-[var(--navy)]" href="#">شروط الخدمة</a>
                            </div>
                        </div>
                </div>
                </footer>
                <div class="fixed bottom-0 w-full bg-[var(--navy)] text-white py-4 z-[100] border-t-2 border-[var(--primary)]">
                    <div class="container mx-auto px-6 flex justify-between items-center">
                        <div class="flex items-center gap-4 text-xs md:text-sm">
                            <div class="bg-red-600 px-2 py-0.5 rounded text-[10px] font-black animate-pulse">LIVE</div>
                            <span class="font-black">مركز طوارئ الطرق السريعة:</span>
                            <a class="text-red-400 font-black hover:underline" href="tel:19000">19000</a>
                            <span class="hidden md:inline text-slate-500">|</span>
                            <span class="hidden md:inline font-bold">الإسعاف: 123</span>
                        </div>
                        <div class="flex gap-6 items-center">
                            <span class="hidden lg:inline text-xs font-bold text-slate-400">نعمل الآن بكامل طاقتنا في العاصمة الإدارية وطرق الساحل</span>
                            <a class="bg-[var(--primary)] text-white px-5 py-1.5 rounded-lg text-xs font-black shadow-lg shadow-red-500/20" href="tel:19000">اتصل الآن</a>
                        </div>
                    </div>
                </div>

                @endsection