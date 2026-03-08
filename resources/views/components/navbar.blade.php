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
            <a class="bg-[var(--primary)] text-white px-7 py-2.5 rounded-xl font-extrabold shadow-lg shadow-red-500/20 hover:bg-red-700 transition-all flex items-center gap-2" href="{{ url('/login') }}">
                طلب ونش إنقاذ
            </a>
        </div>
    </div>
</header>