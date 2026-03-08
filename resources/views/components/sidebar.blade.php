<aside class="w-72 bg-white h-screen sticky top-0 border-l border-slate-100 flex flex-col shrink-0">
    <div class="p-8 flex flex-col items-center border-b border-slate-50">
        @auth
            <img alt="{{ auth()->user()->name }}" class="w-full h-full object-cover " src="{{ auth()->user()->profile_photo_path ?? asset('img/logo.png') }}" style="width: 100px;"/>
            <h3 class="font-bold text-lg text-[var(--navy)]">{{ auth()->user()->name }}</h3>
            <p class="text-sm text-slate-400">{{ auth()->user()->email ?? 'مستخدم' }}</p>
        @else
            <img alt="منصة إنقاذ" class="w-full h-full object-cover " src="{{ asset('img/logo.png') }}" style="width: 100px;"/>
            <h3 class="font-bold text-lg text-[var(--navy)]">مرحباً</h3>
            <div class="flex gap-2 mt-2">
                <a href="{{ route('login') }}" class="text-sm text-[var(--navy)] font-bold">تسجيل الدخول</a>
                <span class="text-sm text-slate-400">|</span>
                <a href="{{ route('register') }}" class="text-sm text-[var(--navy)] font-bold">سجل الآن</a>
            </div>
        @endauth
    </div>
    <nav class="flex-grow py-6">
        <ul class="space-y-1">
            <li>
                <a class="flex items-center gap-3 px-8 py-4 text-slate-500 hover:text-[var(--navy)] hover:bg-slate-50 font-bold transition-all" href="/">
                    <span class="material-symbols-outlined">dashboard</span>
                    الرئيسية
                </a>
            </li>
            <li>
                <a class="flex items-center gap-3 px-8 py-4 text-slate-500 hover:text-[var(--navy)] hover:bg-slate-50 font-bold transition-all" href="/help">
                    <span class="material-symbols-outlined">sos</span>
                    طلب مساعدة
                </a>
            </li>
            <li>
                <a class="sidebar-item-active flex items-center gap-3 px-8 py-4 font-bold transition-all" href="/cars">
                    <span class="material-symbols-outlined">directions_car</span>
                    سيارتي
                </a>
            </li>
            <li>
                <a class="flex items-center gap-3 px-8 py-4 text-slate-500 hover:text-[var(--navy)] hover:bg-slate-50 font-bold transition-all" href="/record">
                    <span class="material-symbols-outlined">history</span>
                    السجل
                </a>
            </li>
            <li>
                <a class="flex items-center gap-3 px-8 py-4 text-slate-500 hover:text-[var(--navy)] hover:bg-slate-50 font-bold transition-all" href="/notifications">
                    <span class="material-symbols-outlined">notifications</span>
                    الإشعارات
                </a>
            </li>
            <li>
                <a class="flex items-center gap-3 px-8 py-4 text-slate-500 hover:text-[var(--navy)] hover:bg-slate-50 font-bold transition-all" href="/settings">
                    <span class="material-symbols-outlined">settings</span>
                    الإعدادات
                </a>
            </li>
        </ul>
    </nav>
    <div class="p-8">
        @auth
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="flex items-center gap-3 text-red-500 font-bold hover:bg-red-50 w-full p-3 rounded-xl transition-all">
                    <span class="material-symbols-outlined">logout</span>
                    تسجيل الخروج
                </button>
            </form>
        @endauth
    </div>
</aside>
