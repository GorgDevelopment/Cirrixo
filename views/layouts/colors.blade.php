<style>
    :root {
        /* Light Theme Colors */
        --color-primary: {{ theme('primary', 'hsl(190, 100%, 50%)') }};
        --color-secondary: {{ theme('secondary', 'hsl(190, 80%, 40%)') }};
        --color-neutral: {{ theme('neutral', 'hsl(220, 25%, 35%)') }};
        --color-base: {{ theme('base', 'hsl(0, 0%, 100%)') }};
        --color-muted: {{ theme('muted', 'hsl(220, 28%, 75%)') }};
        --color-inverted: {{ theme('inverted', 'hsl(0, 0%, 100%)') }};
        --color-background: {{ theme('background', 'hsl(220, 40%, 13%)') }};
        --color-background-secondary: {{ theme('background-secondary', 'hsl(220, 40%, 16%)') }};

        /* State Colors */
        --color-success: 142, 70%, 45%;
        --color-error: 0, 91%, 65%;
        --color-warning: 30, 90%, 65%;
        --color-inactive: 220, 14%, 60%;
        --color-info: 200, 97%, 45%;
    }

    .dark {
        /* Dark Theme Colors */
        --color-primary: {{ theme('dark-primary', 'hsl(190, 100%, 50%)') }};
        --color-secondary: {{ theme('dark-secondary', 'hsl(190, 80%, 40%)') }};
        --color-neutral: {{ theme('dark-neutral', 'hsl(220, 25%, 35%)') }};
        --color-base: {{ theme('dark-base', 'hsl(0, 0%, 100%)') }};
        --color-muted: {{ theme('dark-muted', 'hsl(220, 28%, 75%)') }};
        --color-inverted: {{ theme('dark-inverted', 'hsl(0, 0%, 100%)') }};
        --color-background: {{ theme('dark-background', 'hsl(220, 40%, 13%)') }};
        --color-background-secondary: {{ theme('dark-background-secondary', 'hsl(220, 40%, 16%)') }};
    }
</style> 