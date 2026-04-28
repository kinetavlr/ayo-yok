<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Join the Party - Social Playground</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "outline-variant": "#c4a2cd",
                        "primary": "#8126cf",
                        "surface-container-high": "#f8d8ff",
                        "background": "#fff3fd",
                        "on-primary-container": "#360061",
                        "surface-container": "#fbdfff",
                        "secondary": "#874c2d",
                        "outline": "#8b6c94",
                        "secondary-container": "#ffc5aa",
                        "surface": "#fff3fd",
                        "on-surface": "#3e2548",
                        "on-surface-variant": "#6e5177",
                        "on-primary": "#fbefff",
                        "primary-container": "#c284ff",
                        "surface-container-lowest": "#ffffff",
                        "tertiary-container": "#65fde6",
                        "on-tertiary-container": "#005e54",
                        "secondary-fixed": "#ffc5aa",
                        "on-secondary-container": "#6f391b",
                        "tertiary-fixed": "#65fde6",
                    },
                    fontFamily: {
                        "headline": ["Plus Jakarta Sans"],
                        "body": ["Plus Jakarta Sans"],
                    },
                    borderRadius: {"DEFAULT": "1rem", "lg": "2rem", "xl": "3rem", "full": "9999px"},
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: linear-gradient(135deg, #fff3fd 0%, #fbdfff 100%);
        }
        .bubbly-glow {
            box-shadow: 0 30px 60px -15px rgba(129, 38, 207, 0.15);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4 md:p-8">

<main class="w-full max-w-6xl grid grid-cols-1 lg:grid-cols-2 gap-0 overflow-hidden rounded-[2.5rem] bg-white shadow-2xl">
    
    <section class="relative bg-primary p-12 flex flex-col items-center justify-center text-center overflow-hidden">
        <div class="absolute -top-20 -left-20 w-80 h-80 bg-white/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-20 -right-20 w-80 h-80 bg-tertiary-container/20 rounded-full blur-3xl"></div>
        
        <div class="relative z-10 space-y-8">
            <div class="inline-block px-6 py-2 bg-white/20 backdrop-blur-md rounded-full border border-white/30">
                <span class="text-white font-bold tracking-wide">Social Playground</span>
            </div>
            
            <div class="relative group">
                <div class="absolute -inset-4 bg-white/20 rounded-full blur-2xl group-hover:blur-3xl transition-all"></div>
                <div class="relative w-64 h-64 md:w-80 md:h-80 mx-auto bg-white/10 rounded-full flex items-center justify-center backdrop-blur-sm border border-white/20 transform hover:scale-105 transition-transform duration-500">
                     <span class="text-white text-8xl">👋</span>
                </div>
            </div>

            <div class="space-y-4">
                <h1 class="text-5xl md:text-6xl font-extrabold text-white tracking-tighter leading-tight">
                    Join the <br/>Party!
                </h1>
                <p class="text-white/80 text-lg font-medium max-w-xs mx-auto">
                    Connect, create, and explore in the most vibrant digital community.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-white p-8 md:p-12 lg:p-16 flex flex-col justify-center">
        <div class="max-w-md mx-auto w-full">
            <header class="mb-8">
                <h2 class="text-3xl font-extrabold text-on-surface tracking-tight">Create Account</h2>
                <p class="text-on-surface-variant font-medium">Already a member? <a href="#" class="text-primary font-bold hover:underline">Log in</a></p>
            </header>

            <div class="flex flex-col sm:flex-row gap-3 mb-8">
                <button class="flex-1 flex items-center justify-center gap-2 bg-gray-50 border border-gray-200 hover:bg-gray-100 px-4 py-3 rounded-full font-bold transition-all active:scale-95">
                    <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-5 h-5" alt="Google">
                    <span>Google</span>
                </button>
                <button class="flex-1 flex items-center justify-center gap-2 bg-gray-50 border border-gray-200 hover:bg-gray-100 px-4 py-3 rounded-full font-bold transition-all active:scale-95">
                    <img src="https://www.svgrepo.com/show/442910/apple.svg" class="w-5 h-5" alt="Apple">
                    <span>Apple ID</span>
                </button>
            </div>

            <div class="relative flex items-center justify-center mb-8">
                <div class="absolute inset-0 flex items-center"><div class="w-full border-t border-gray-100"></div></div>
                <span class="relative px-4 bg-white text-gray-400 text-xs font-bold uppercase tracking-widest">or email</span>
            </div>

            <form class="space-y-4" method="POST" action="<?php echo e(route('register')); ?>">
    <?php echo csrf_field(); ?> <div class="grid grid-cols-2 gap-4">
        <div class="space-y-1">
            <label class="text-xs font-bold text-gray-500 ml-4 uppercase">Full Name</label>
            <input name="name" class="w-full bg-gray-50 border-transparent focus:border-primary focus:bg-white focus:ring-0 px-6 py-3 rounded-full text-on-surface transition-all outline-none" placeholder="John Doe" type="text" required/>
        </div>
        <div class="space-y-1">
            <label class="text-xs font-bold text-gray-500 ml-4 uppercase">Username</label>
            <input name="username" class="w-full bg-gray-50 border-transparent focus:border-primary focus:bg-white focus:ring-0 px-6 py-3 rounded-full text-on-surface transition-all outline-none" placeholder="johnny_p" type="text" required/>
        </div>
    </div>

    <div class="space-y-1">
        <label class="text-xs font-bold text-gray-500 ml-4 uppercase">Email</label>
        <input name="email" class="w-full bg-gray-50 border-transparent focus:border-primary focus:bg-white focus:ring-0 px-6 py-3 rounded-full text-on-surface transition-all outline-none" placeholder="hello@playground.com" type="email" required/>
    </div>

    <div class="space-y-1">
        <label class="text-xs font-bold text-gray-500 ml-4 uppercase">Phone Number</label>
        <input name="phone_number" class="w-full bg-gray-50 border-transparent focus:border-primary focus:bg-white focus:ring-0 px-6 py-3 rounded-full text-on-surface transition-all outline-none" placeholder="08123456789" type="text" required/>
    </div>

    <div class="space-y-1">
        <label class="text-xs font-bold text-gray-500 ml-4 uppercase">Password</label>
        <div class="relative">
            <input name="password" class="w-full bg-gray-50 border-transparent focus:border-primary focus:bg-white focus:ring-0 px-6 py-3 rounded-full text-on-surface transition-all outline-none pr-12" placeholder="••••••••" type="password" required/>
        </div>
    </div>

    <button class="w-full bg-primary hover:bg-primary-dim text-white text-lg font-bold py-4 rounded-full shadow-lg shadow-primary/30 transition-all transform hover:-translate-y-1 active:scale-95 flex items-center justify-center gap-2 mt-6" type="submit">
        <span>Get Started</span>
        <span class="material-symbols-outlined">arrow_forward</span>
    </button>
</form>
        </div>
    </section>
</main>

</body>
</html><?php /**PATH D:\Download\ayoyok\ayoyok-app\resources\views/register.blade.php ENDPATH**/ ?>