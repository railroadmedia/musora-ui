module.exports = {
    theme: {
        extend: {
            left: {
                '6': '1.5rem;'
            },
            spacing: {
                md: '28rem',
                '14': '3.5rem',
                '44': '11rem',
                '68': '17rem',
                '72': '18rem',
                '80': '20rem',
                '92': '23rem',
                '1/2': '50%',
                '1/3': '33.333333%',
                '2/3': '66.666667%',
                '1/4': '25%',
                '2/4': '50%',
                '3/4': '75%',
                '1/5': '20%',
                '2/5': '40%',
                '3/5': '60%',
                '4/5': '80%',
                '1/6': '16.666667%',
                '2/6': '33.333333%',
                '3/6': '50%',
                '4/6': '66.666667%',
                '5/6': '83.333333%',
                '1/12': '8.333333%',
                '2/12': '16.666667%',
                '3/12': '25%',
                '4/12': '33.333333%',
                '5/12': '41.666667%',
                '6/12': '50%',
                '7/12': '58.333333%',
                '8/12': '66.666667%',
                '9/12': '75%',
                '10/12': '83.333333%',
                '11/12': '91.666667%',

                '9/16': '56.25%',
                '1/1': '100%',
            },
            colors: {
                'light-gray': '#F0F0F0',
                'gray': '#CCCCCC',
                'medium-gray': '#999999',
                'dark-gray': '#555555',
                'focus-blue': '#A0CCF0',
                'validation-red': '#F56565',
                'header': '#00101D',
                'header-gray': '#445F74',
                'edge-blue': '#0B76DB',
                'edge-dark-blue': '#094A86',
            },
            width: {
                '1/9': '11.111111%',
                medium: '64rem',
            },
            maxWidth: {
                page: '97.5rem'
            },
            screens: {
                small: '40rem',
                medium: '64rem',
                large: '72.5rem',
                'x-large': '97.5rem'
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
            '1': '1px',
            '2': '2px',
            '3': '3px',
            '4': '4px',
            '6': '6px',
            '8': '8px',
            '16': '16px',
        },
        fontFamily: {
            sans: ['"Open Sans"', 'sans-serif'],
            roboto: ['Roboto', 'sans-serif'],
        },
    },
    variants: {
        backgroundColor: ['responsive', 'hover', 'focus', 'active'],
        textColor: ['responsive', 'hover', 'focus', 'active'],
        boxShadow: ['responsive', 'hover', 'focus', 'active', 'focus-within'],
        cursor: ['responsive', 'hover', 'focus'],
    },
    plugins: [],
}

