module.exports = {
    theme: {
        extend: {
            left: {
                '6': '1.5rem;'
            },
            spacing: {
                md: '28rem'
            },
            colors: {
                'light-gray': '#F0F0F0',
                'gray': '#CCCCCC',
                'medium-gray': '#999999',
                'dark-gray': '#555555',
                'focus-blue': '#A0CCF0',
                'validation-red': '#F56565',
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

