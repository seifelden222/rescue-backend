<x-guest-layout>
    {{-- تخصيص الـ Header لإضافة الخطوط والتنسيقات الخاصة بالتصميم --}}
    @section('styles')
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <style>
        :root {
            --primary: #E31E24;
            --navy: #0F172A;
            --light-bg: #F9FAFB;
        }
        body {
            font-family: 'Cairo', sans-serif !important;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
    @endsection

    <div class="flex min-h-screen bg-white" dir="rtl">
        <!-- القسم الأيسر: الصورة (يظهر في الشاشات الكبيرة) -->
        <div class="hidden lg:block lg:w-1/2 relative">
            <img alt="Professional Egyptian Recovery Winch" class="absolute inset-0 w-full h-full object-cover opacity-80" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBeamusv7V0ZVS-b4YzLLi1pO5oMkzef5u8OGespYI7ZkesAlumcAEtUE1nBDz8Tsf2juEmCwcoZfzJu8VB-UDjn_EXrbPlu1qSK0zkvLU0wKV1uxCjDGPU0Pmkwn7ojNCEmoc4a--ztIVLiIeYgi3WAWnT_a2lDXHzROSo5dilElw2RzqCpUeCeBLsoXCGAXpMQ7LUGu8kZoMMHQM7czHpOBq2JtwC-18cRY7ovRh96nHeM7Z4ivj7kxc1E29-r9JJMSScOGHXLVij"/>
            <div class="absolute inset-0 bg-gradient-to-l from-black/40 via-transparent to-transparent"></div>
            <div class="absolute bottom-12 right-12 text-white z-10">
                <div class="flex items-center gap-3 mb-4">
                    <span class="material-symbols-outlined text-[var(--primary)] text-4xl">location_on</span>
                    <h2 class="text-3xl font-black">نحن معك أينما كنت</h2>
                </div>
                <p class="text-xl font-medium opacity-90 max-w-md leading-relaxed">تغطية شاملة لكافة المحاور والطرق السريعة في مصر على مدار ٢٤ ساعة.</p>
            </div>
        </div>

        <!-- القسم الأيمن: نموذج تسجيل الدخول -->
        <div class="w-full lg:w-1/2 flex flex-col p-8 lg:p-20 justify-center relative">
            
            <!-- اللوجو -->
            <div class="absolute top-8 right-8 lg:top-12 lg:right-12">
                <div class="flex items-center gap-3">
                    <img alt="Inqaz Platform Logo" src="{{ asset('img/logo.png') }}" style="width: 70px;" onerror="this.src='https://via.placeholder.com/70x70?text=Logo'"/>
                    <div class="flex flex-col leading-none">
                        <span class="text-2xl font-black text-[var(--navy)] tracking-tight">منصة إنقاذ</span>
                    </div>
                </div>
            </div>

            <div class="max-w-md w-full mx-auto">
                <div class="mb-10 text-right">
                    <h1 class="text-4xl font-black text-[var(--navy)] mb-4">تسجيل الدخول</h1>
                    <p class="text-slate-500 font-bold">مرحباً بك مجدداً في منصة إنقاذ لخدمات الطريق</p>
                </div>

                <!-- حالة الجلسة (Session Status) -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf

                    <!-- البريد الإلكتروني (أو الهاتف حسب إعداداتك في Laravel) -->
                    <div class="space-y-2">
                        <x-input-label for="email" class="block text-sm font-bold text-slate-700" :value="__('البريد الإلكتروني')" />
                        <div class="relative group">
                            <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"
                                   class="w-full h-14 pr-12 pl-4 bg-white border border-slate-200 rounded-xl shadow-sm focus:ring-2 focus:ring-red-500/10 focus:border-[#E31E24] transition-all outline-none text-right font-bold @error('email') border-red-500 @enderror" 
                                   placeholder="example@mail.com"/>
                            <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none text-slate-400 group-focus-within:text-[#E31E24] transition-colors">
                                <span class="material-symbols-outlined">mail</span>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- كلمة المرور -->
                    <div class="space-y-2">
                        <div class="flex justify-between items-center">
                            <x-input-label for="password" class="block text-sm font-bold text-slate-700" :value="__('كلمة المرور')" />
                            @if (Route::has('password.request'))
                                <a class="text-xs font-bold text-[#E31E24] hover:underline" href="{{ route('password.request') }}">
                                    {{ __('نسيت كلمة المرور؟') }}
                                </a>
                            @endif
                        </div>
                        <div class="relative group">
                            <input id="password" type="password" name="password" required autocomplete="current-password"
                                   class="w-full h-14 pr-12 pl-4 bg-white border border-slate-200 rounded-xl shadow-sm focus:ring-2 focus:ring-red-500/10 focus:border-[#E31E24] transition-all outline-none text-right font-bold @error('password') border-red-500 @enderror" 
                                   placeholder="••••••••"/>
                            <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none text-slate-400 group-focus-within:text-[#E31E24] transition-colors">
                                <span class="material-symbols-outlined">lock</span>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- تذكرني -->
                    <div class="flex items-center gap-2">
                        <input id="remember_me" type="checkbox" name="remember" 
                               class="w-5 h-5 rounded border-slate-300 text-[#E31E24] focus:ring-[#E31E24] transition-all cursor-pointer"/>
                        <label for="remember_me" class="text-sm font-bold text-slate-600 cursor-pointer">تذكرني على هذا الجهاز</label>
                    </div>

                    <!-- زر الدخول -->
                    <button type="submit" class="w-full h-14 bg-[#E31E24] hover:bg-red-700 text-white font-black text-xl rounded-2xl shadow-xl shadow-red-500/20 transition-all transform active:scale-[0.98] flex items-center justify-center gap-3">
                        <span>{{ __('دخول') }}</span>
                        <span class="material-symbols-outlined">login</span>
                    </button>
                </form>

                <!-- مساعدة فنية -->
                <div class="mt-8 p-4 bg-slate-50 rounded-2xl border border-slate-100 flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="bg-white p-2 rounded-lg shadow-sm">
                            <span class="material-symbols-outlined text-[#E31E24]">headset_mic</span>
                        </div>
                        <div>
                            <p class="text-[10px] text-slate-400 font-bold uppercase">للمساعدة الفورية</p>
                            <p class="text-sm font-black text-[var(--navy)]">اتصل بـ 19000</p>
                        </div>
                    </div>
                    <a class="bg-[var(--navy)] text-white text-[10px] font-black px-4 py-2 rounded-lg" href="tel:19000">اتصال</a>
                </div>

                <!-- إنشاء حساب -->
                <div class="mt-12 text-center">
                    <p class="text-slate-500 font-bold">
                        ليس لديك حساب؟ 
                        <a class="text-[#E31E24] font-black hover:underline mr-1" href="{{ route('register') }}">سجل الآن</a>
                    </p>
                </div>
            </div>

            <!-- حقوق الملكية -->
            <div class="absolute bottom-8 right-0 left-0 text-center">
                <p class="text-xs text-slate-400 font-bold">© {{ date('Y') }} منصة إنقاذ للخدمات اللوجستية - شركة مساهمة مصرية</p>
            </div>
        </div>
    </div>
</x-guest-layout>