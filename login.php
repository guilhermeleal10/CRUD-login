<!DOCTYPE html>

<html class="light" lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>AdminPanel - Login</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-tertiary": "#ffffff",
                        "on-tertiary-fixed": "#311300",
                        "error-container": "#ffdad6",
                        "outline": "#777680",
                        "on-primary-fixed-variant": "#3f4274",
                        "surface-container": "#f0edf2",
                        "secondary-container": "#ffd259",
                        "on-secondary": "#ffffff",
                        "surface-container-high": "#eae7ec",
                        "primary-fixed-dim": "#bfc2fc",
                        "on-secondary-fixed": "#241a00",
                        "tertiary-fixed-dim": "#f7b993",
                        "on-primary-fixed": "#131546",
                        "tertiary": "#120400",
                        "inverse-on-surface": "#f3eff4",
                        "on-error": "#ffffff",
                        "on-error-container": "#93000a",
                        "inverse-primary": "#bfc2fc",
                        "surface-tint": "#575a8d",
                        "on-secondary-fixed-variant": "#594400",
                        "surface-container-low": "#f6f2f7",
                        "on-primary-container": "#8083b9",
                        "on-tertiary-container": "#b17b59",
                        "tertiary-container": "#381600",
                        "surface-dim": "#dcd9de",
                        "background": "#fcf8fd",
                        "secondary": "#765b00",
                        "outline-variant": "#c7c5d0",
                        "on-primary": "#ffffff",
                        "surface-container-highest": "#e5e1e6",
                        "surface-bright": "#fcf8fd",
                        "primary-container": "#171a4a",
                        "on-background": "#1b1b1f",
                        "error": "#ba1a1a",
                        "primary-fixed": "#e0e0ff",
                        "on-tertiary-fixed-variant": "#673c1f",
                        "surface-variant": "#e5e1e6",
                        "on-secondary-container": "#745a00",
                        "secondary-fixed-dim": "#edc14a",
                        "inverse-surface": "#303034",
                        "primary": "#000032",
                        "on-surface-variant": "#46464f",
                        "on-surface": "#1b1b1f",
                        "surface-container-lowest": "#ffffff",
                        "tertiary-fixed": "#ffdbc7",
                        "surface": "#fcf8fd",
                        "secondary-fixed": "#ffdf93"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "sm": "12px",
                        "lg": "40px",
                        "xl": "64px",
                        "md": "24px",
                        "xs": "4px",
                        "base": "8px",
                        "gutter": "1.5rem",
                        "container-padding": "2rem"
                    },
                    "fontFamily": {
                        "h3": ["Manrope"],
                        "body-sm": ["Manrope"],
                        "body-lg": ["Manrope"],
                        "h2": ["Manrope"],
                        "display-lg": ["Manrope"],
                        "body-md": ["Manrope"],
                        "h1": ["Manrope"],
                        "label-caps": ["Manrope"]
                    },
                    "fontSize": {
                        "h3": ["20px", {
                            "lineHeight": "1.4",
                            "fontWeight": "600"
                        }],
                        "body-sm": ["14px", {
                            "lineHeight": "1.5",
                            "fontWeight": "400"
                        }],
                        "body-lg": ["18px", {
                            "lineHeight": "1.6",
                            "fontWeight": "400"
                        }],
                        "h2": ["24px", {
                            "lineHeight": "1.35",
                            "fontWeight": "600"
                        }],
                        "display-lg": ["48px", {
                            "lineHeight": "1.2",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "body-md": ["16px", {
                            "lineHeight": "1.5",
                            "fontWeight": "400"
                        }],
                        "h1": ["32px", {
                            "lineHeight": "1.3",
                            "fontWeight": "700"
                        }],
                        "label-caps": ["12px", {
                            "lineHeight": "1",
                            "letterSpacing": "0.05em",
                            "fontWeight": "700"
                        }]
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Manrope', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .bg-gradient-admin {
            background: radial-gradient(circle at top left, #171A4A 0%, #000032 50%, #241a00 100%);
        }

        .card-shadow {
            box-shadow: 0 10px 30px rgba(23, 26, 74, 0.12);
        }

        .input-focus-gold:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(219, 177, 59, 0.25);
            border-color: #000032;
        }
    </style>
</head>

<body class="bg-gradient-admin min-h-screen flex items-center justify-center p-md">
    <!-- Login Container -->
    <main class="w-full max-w-[480px] animate-fade-in">
        <!-- Brand Identity -->
        <div class="text-center mb-lg">
            <h1 class="font-h1 text-h1 text-secondary-fixed mb-xs tracking-tight">AdminPanel</h1>
            <p class="font-body-md text-body-md text-surface-container-lowest opacity-80">Acesse sua conta para gerenciar o sistema</p>
        </div>
        <!-- Login Card -->
        <div class="bg-surface-container-lowest rounded-xl p-md md:p-lg card-shadow border border-white/10">
            <header class="mb-md">
                <h2 class="font-h2 text-h2 text-primary">Bem-vindo</h2>
                <div class="h-1 w-12 bg-secondary-fixed mt-xs rounded-full"></div>
            </header>
            <form class="space-y-md" method="POST" action "validar.php">
                <!-- Email Field -->
                <div class="space-y-xs">
                    <label class="font-label-caps text-label-caps text-on-surface-variant uppercase" for="email">E-mail Corporativo</label>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-sm flex items-center pointer-events-none">
                            <i class="bi bi-envelope text-outline group-focus-within:text-primary transition-colors"></i>
                        </div>
                        <input class="block w-full pl-xl pr-md py-sm bg-surface-container-low border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface input-focus-gold transition-all" id="email" name="email" placeholder="nome@empresa.com.br" required="" type="email" />
                    </div>
                </div>
                <!-- Password Field -->
                <div class="space-y-xs">
                    <div class="flex justify-between items-center">
                        <label class="font-label-caps text-label-caps text-on-surface-variant uppercase" for="password">Senha</label>
                        <a class="font-body-sm text-body-sm text-primary hover:text-secondary-fixed transition-colors font-semibold" href="#">Esqueceu a senha?</a>
                    </div>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-sm flex items-center pointer-events-none">
                            <i class="bi bi-shield-lock text-outline group-focus-within:text-primary transition-colors"></i>
                        </div>
                        <input class="block w-full pl-xl pr-md py-sm bg-surface-container-low border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface input-focus-gold transition-all" id="password" name="password" placeholder="••••••••" required="" type="password" />
                    </div>
                </div>
                <!-- Remember Me -->
                <div class="flex items-center space-x-xs">
                    <input class="w-4 h-4 rounded border-outline-variant text-primary focus:ring-secondary-fixed-dim" id="remember" type="checkbox" />
                    <label class="font-body-sm text-body-sm text-on-surface-variant" for="remember">Manter conectado neste dispositivo</label>
                </div>
                <!-- Submit Button -->
                <button class="w-full bg-secondary-fixed hover:bg-secondary-fixed-dim text-primary font-h3 text-h3 py-sm rounded-lg transition-all duration-300 transform active:scale-[0.98] shadow-md hover:shadow-lg flex items-center justify-center gap-base" type="submit">
                    <span>Entrar</span>
                    <i class="bi bi-arrow-right"></i>
                </button>
            </form>
            <!-- Footer Links -->
            <footer class="mt-lg pt-md border-t border-surface-container-high text-center">
                <p class="font-body-sm text-body-sm text-on-surface-variant">
                    Problemas com o acesso?
                    <a class="text-primary font-semibold hover:underline" href="#">Contate o suporte</a>
                </p>
            </footer>
        </div>
        <!-- Corporate Footer -->
        <div class="mt-xl text-center space-y-xs opacity-60">
            <p class="font-label-caps text-label-caps text-surface-container-lowest">© 2024 AdminPanel Enterprise Solutions</p>
            <div class="flex justify-center space-x-md">
                <a class="font-body-sm text-body-sm text-surface-container-lowest hover:text-secondary-fixed transition-colors" href="#">Privacidade</a>
                <a class="font-body-sm text-body-sm text-surface-container-lowest hover:text-secondary-fixed transition-colors" href="#">Termos</a>
            </div>
        </div>
    </main>
    <!-- Background Decorative Elements -->
    <div class="fixed top-0 right-0 p-xl pointer-events-none opacity-10">
        <span class="material-symbols-outlined text-[240px] text-surface-container-lowest" data-weight="fill" style="font-variation-settings: 'FILL' 1;">security</span>
    </div>
    <div class="fixed bottom-0 left-0 p-xl pointer-events-none opacity-5">
        <img class="w-96 h-96 object-cover rounded-full mix-blend-overlay" data-alt="A highly detailed close-up of a sophisticated digital circuit board glowing with deep indigo and gold light accents. The lighting is low-key and dramatic, emphasizing precision engineering and high-tech security. The aesthetic is professional, minimalist, and powerful, perfectly matching a dark mode corporate administrative interface. The mood is secure, advanced, and reliable." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDqa4mfjdNI_bDNgLRWGhQmS8N-pfT3-cA0Omf5slBV7FBuWfwzY7od9tX13JFMUpWbZYh7QsTjARAK1TC5HR-g02gKiteYMVwRIHGudU8KJ9W5nwz91rWBceJr0I8s5FyLeOt7CERWXVvlpoZOHCWAKOuKz_Nx7TUKm0EcwoPIQ7K744BYAsKf_ge7ein12UPZEzU66ZnLv8fcdDNn5xaxw-Vkh4NzinWwVudpcBQOJmPpoRpLaNXBC3wz20GVSeJ3LvBhX8LsneQ" />
    </div>
</body>

</html>