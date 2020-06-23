module.exports = {
  purge: [],
  theme: {
    extend: {
      fontFamily: { sans: ['Inter var'] },
      spacing: {
        '1/2': '50%',
        '1/3': '33.33333%',
        '2/3': '66.66667%'
      }, screens: {
        'print': { 'raw': 'print' },
        // => @media  print { ... }
      }
    },
  },
  variants: {},
  plugins: [],
}
