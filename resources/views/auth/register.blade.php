<x-guest-layout>
    {{-- تخصيص الـ Header --}}
    @section('styles')
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <style>
        :root {
            --primary: #E31E24;
            --navy: #0F172A;
        }
        body {
            font-family: 'Cairo', sans-serif !important;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
    @endsection

    <main class="min-h-screen flex flex-col lg:flex-row bg-white" dir="rtl">
        <!-- القسم الأيمن (الصورة والمحتوى التسويقي) - يظهر في الشاشات الكبيرة -->
        <section class="hidden lg:flex lg:w-1/2 relative overflow-hidden bg-[var(--navy)]">
            <img alt="Professional Egyptian Recovery Winch" class="absolute inset-0 w-full h-full object-cover opacity-80" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBeamusv7V0ZVS-b4YzLLi1pO5oMkzef5u8OGespYI7ZkesAlumcAEtUE1nBDz8Tsf2juEmCwcoZfzJu8VB-UDjn_EXrbPlu1qSK0zkvLU0wKV1uxCjDGPU0Pmkwn7ojNCEmoc4a--ztIVLiIeYgi3WAWnT_a2lDXHzROSo5dilElw2RzqCpUeCeBLsoXCGAXpMQ7LUGu8kZoMMHQM7czHpOBq2JtwC-18cRY7ovRh96nHeM7Z4ivj7kxc1E29-r9JJMSScOGHXLVij"/>
            <div class="absolute inset-0 bg-gradient-to-t from-[var(--navy)] via-transparent to-transparent opacity-60"></div>
            <div class="relative z-10 w-full h-full flex flex-col justify-between p-16">
                <div class="max-w-md">
                    <div class="bg-[var(--primary)] w-16 h-1 mb-6"></div>
                    <h2 class="text-4xl font-black text-white mb-6 leading-tight">شريكك الموثوق على كافة طرق مصر</h2>
                    <p class="text-xl text-slate-200 leading-relaxed">انضم لأكثر من 60 ألف سائق يعتمدون على منصة إنقاذ في حالات الطوارئ وخدمات الونش السريع.</p>
                </div>
                <div class="flex items-center gap-6 text-white/80">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-[var(--primary)]">verified</span>
                        <span class="text-sm font-bold">خدمة معتمدة 24/7</span>
                    </div>
                    <div class="h-4 w-px bg-white/20"></div>
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-[var(--primary)]">map</span>
                        <span class="text-sm font-bold">تغطية لكافة المحافظات</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- القسم الأيسر (نموذج الإنشاء) -->
        <section class="flex-1 flex items-center justify-center p-8 lg:p-24 bg-white relative">
            <!-- اللوجو للموبايل -->
            <div class="absolute top-8 right-8 lg:hidden flex items-center gap-3">
                <img alt="Logo" class="h-10 w-auto" src="{{ asset('img/logo.png') }}" onerror="this.src='https://via.placeholder.com/40'"/>
                <span class="text-xl font-black text-[var(--navy)]">منصة إنقاذ</span>
            </div>

            <div class="w-full max-w-md">
                <div class="flex items-center gap-4 mb-6">
                    <img alt="Inqaz Logo" src="{{ asset('img/logo.png') }}" style="width:80px;" onerror="this.src='https://via.placeholder.com/80'"/>
                    <div class="flex flex-col leading-none">
                        <span class="text-3xl font-black tracking-tight text-[var(--navy)]">منصة إنقاذ</span>
                    </div>
                </div>

                <div class="mb-10">
                    <h1 class="text-4xl font-black text-[var(--navy)] mb-3">إنشاء حساب جديد</h1>
                    <p class="text-slate-500 font-medium">ابدأ الآن لتتمتع بخدمات إنقاذ سريعة وآمنة لسيارتك.</p>
                </div>

                <form method="POST" action="{{ route('register') }}" class="space-y-5">
                    @csrf

                    <!-- الاسم -->
                    <div>
                        <label class="block text-sm font-extrabold text-[var(--navy)] mb-2" for="name">الاسم بالكامل</label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-slate-400">person</span>
                            <input id="name" name="name" type="text" value="{{ old('name') }}" required autofocus autocomplete="name"
                                   class="w-full pr-12 pl-4 py-4 rounded-2xl border-2 border-slate-100 focus:border-[var(--navy)] focus:ring-0 transition-all placeholder:text-slate-300 font-bold @error('name') border-red-500 @enderror" 
                                   placeholder="أدخل اسمك كما في الهوية"/>
                        </div>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- رقم الهاتف -->
                    <div>
                        <label class="block text-sm font-extrabold text-[var(--navy)] mb-2" for="phone">رقم الهاتف</label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-slate-400">call</span>
                            <input id="phone" name="phone" type="text" value="{{ old('phone') }}" required autocomplete="tel"
                                   class="w-full pr-12 pl-4 py-4 rounded-2xl border-2 border-slate-100 focus:border-[var(--navy)] focus:ring-0 transition-all placeholder:text-slate-300 font-bold @error('phone') border-red-500 @enderror"
                                   placeholder="01012345678"/>
                        </div>
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>

                    <!-- البريد الإلكتروني -->
                    <div>
                        <label class="block text-sm font-extrabold text-[var(--navy)] mb-2" for="email">البريد الإلكتروني</label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-slate-400">mail</span>
                            <input id="email" name="email" type="email" value="{{ old('email') }}" required autocomplete="username"
                                   class="w-full pr-12 pl-4 py-4 rounded-2xl border-2 border-slate-100 focus:border-[var(--navy)] focus:ring-0 transition-all placeholder:text-slate-300 font-bold @error('email') border-red-500 @enderror" 
                                   placeholder="example@mail.com"/>
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- كلمة المرور -->
                    <div>
                        <label class="block text-sm font-extrabold text-[var(--navy)] mb-2" for="password">كلمة المرور</label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-slate-400">lock</span>
                            <input id="password" name="password" type="password" required autocomplete="new-password"
                                   class="w-full pr-12 pl-4 py-4 rounded-2xl border-2 border-slate-100 focus:border-[var(--navy)] focus:ring-0 transition-all placeholder:text-slate-300 font-bold @error('password') border-red-500 @enderror" 
                                   placeholder="••••••••"/>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- تأكيد كلمة المرور (ضروري في Laravel) -->
                    <div>
                        <label class="block text-sm font-extrabold text-[var(--navy)] mb-2" for="password_confirmation">تأكيد كلمة المرور</label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-slate-400">lock_reset</span>
                            <input id="password_confirmation" name="password_confirmation" type="password" required autocomplete="new-password"
                                   class="w-full pr-12 pl-4 py-4 rounded-2xl border-2 border-slate-100 focus:border-[var(--navy)] focus:ring-0 transition-all placeholder:text-slate-300 font-bold" 
                                   placeholder="••••••••"/>
                        </div>
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <button type="submit" class="w-full bg-[var(--primary)] hover:bg-red-700 text-white py-5 rounded-2xl font-black text-xl shadow-xl shadow-red-500/20 transition-all flex items-center justify-center gap-3 active:scale-[0.98]">
                        <span>إنشاء حساب</span>
                        <span class="material-symbols-outlined">person_add</span>
                    </button>
                </form>

                <div class="mt-10 text-center">
                    <p class="text-slate-500 font-bold">لديك حساب بالفعل؟</p>
                    <a class="inline-block mt-2 text-[var(--navy)] font-black text-lg hover:text-[var(--primary)] transition-colors" href="{{ route('login') }}">
                        تسجيل الدخول
                    </a>
                </div>
            </div>
        </section>
    </main>

    <!-- دعم فني عائم -->
    <a class="fixed bottom-8 left-8 bg-[var(--navy)] text-white p-4 rounded-full shadow-2xl flex items-center gap-3 hover:bg-slate-800 transition-all z-50 group" href="tel:19000">
        <span class="material-symbols-outlined text-3xl text-[var(--primary)] group-hover:scale-110 transition-transform">support_agent</span>
        <div class="flex flex-col items-start leading-none pr-2">
            <span class="text-[10px] font-bold opacity-70">الدعم الفني</span>
            <span class="text-lg font-black tracking-widest" dir="ltr">19000</span>
        </div>
    </a>
</x-guest-layout>
