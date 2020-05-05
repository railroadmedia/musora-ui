module.exports = {
    theme: {
        extend: {
            left: {
                '6': '1.5rem;'
            },
            spacing: {
                md: '28rem'
            }
        },
        minWidth: {
            '0': '0',
            '1/4': '25%',
            '1/2': '50%',
            '3/4': '75%',
            'full': '100%',
        },
        borderWidth: {
            default: '1px',
            '0': '0',
            '2': '2px',
            '3': '3px',
            '4': '4px',
            '6': '6px',
            '8': '8px',
            '16': '16px',
        }
    },
    variants: {
        backgroundColor: ['responsive', 'hover', 'focus', 'active'],
        textColor: ['responsive', 'hover', 'focus', 'active'],
        boxShadow: ['responsive', 'hover', 'focus', 'active', 'focus-within'],
        cursor: ['responsive', 'hover', 'focus'],
    },
    plugins: [],
}

