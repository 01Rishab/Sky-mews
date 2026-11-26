<svg class="{{ $class ?? 'w-16 h-16' }}" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
    <!-- Paper cut leaves & rose branch -->
    <defs>
        <filter id="leafShadow" x="-20%" y="-20%" width="140%" height="140%">
            <feDropShadow dx="2" dy="4" stdDeviation="3" flood-color="#7d656c" flood-opacity="0.12" />
        </filter>
    </defs>
    <!-- Stem -->
    <path d="M20 100 Q 55 75 80 20" stroke="#a7b89f" stroke-width="3" stroke-linecap="round" fill="none" />
    <!-- Leaf 1 (Paper Fold Effect) -->
    <path d="M40 75 C30 65 30 50 48 50 C55 62 52 72 40 75 Z" fill="#c3d9b9" filter="url(#leafShadow)" />
    <path d="M40 75 L 48 50" stroke="#8fa883" stroke-width="1.5" />
    <!-- Leaf 2 -->
    <path d="M60 55 C70 45 82 48 80 62 C68 66 62 62 60 55 Z" fill="#d4e6cc" filter="url(#leafShadow)" />
    <!-- Paper Blossom -->
    <g transform="translate(65, 10)">
        <circle cx="20" cy="20" r="18" fill="#fce4ec" filter="url(#leafShadow)" />
        <circle cx="20" cy="20" r="14" fill="#f8bbd0" />
        <circle cx="20" cy="20" r="9" fill="#f06292" />
        <circle cx="20" cy="20" r="4" fill="#ffffff" />
    </g>
</svg>
