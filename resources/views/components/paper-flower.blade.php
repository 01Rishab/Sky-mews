<svg class="{{ $class ?? 'w-12 h-12' }}" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
    <!-- Paper cut drop shadow filter -->
    <defs>
        <filter id="paperShadow" x="-10%" y="-10%" width="130%" height="130%">
            <feDropShadow dx="1" dy="3" stdDeviation="2" flood-color="#ad1457" flood-opacity="0.15" />
        </filter>
    </defs>
    <!-- Layer 1: Outermost petals -->
    <g filter="url(#paperShadow)">
        <path d="M50 10 C58 24 68 28 85 25 C80 42 85 55 90 70 C72 70 65 82 50 90 C35 82 28 70 10 70 C15 55 20 42 15 25 C32 28 42 24 50 10Z" fill="#f8bbd0" />
    </g>
    <!-- Layer 2: Mid petals cut-out -->
    <g filter="url(#paperShadow)">
        <path d="M50 20 C56 30 64 34 76 32 C72 45 76 55 80 66 C66 66 60 75 50 82 C40 75 34 66 20 66 C24 55 28 45 24 32 C36 34 44 30 50 20Z" fill="#f48fb1" />
    </g>
    <!-- Layer 3: Inner rose petal swirls -->
    <path d="M50 30 C54 38 60 41 68 40 C65 48 68 55 70 62 C60 62 56 68 50 72 C44 68 40 62 30 62 C32 55 35 48 32 40 C40 41 46 38 50 30Z" fill="#f06292" />
    <!-- Flower Center Stamen with Gold Accent -->
    <circle cx="50" cy="50" r="10" fill="#fff" />
    <circle cx="50" cy="50" r="7" fill="#fce4ec" />
    <circle cx="50" cy="50" r="3.5" fill="#e91e63" />
</svg>
