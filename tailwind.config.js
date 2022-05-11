module.exports = {
  content: [
    './resources/**/*.antlers.html',
    './resources/**/*.blade.php',
    './resources/**/*.vue',
    './content/**/*.md'
  ],
  theme: {
    extend: {
      colors: {
        'primary': {
          'accent': '#FF2D20',
          'contrast': '#FFFFFF',
        },
        'secondary': {
          'light': '#F5F5FA',
          'dark': '#F0F2F1',
          'contrast': '#FF2D20',
        },
        'tertiary': {
          'light': '#848487',
          'regular': '#525257',
          'dark': '#090910',
        },
      },
      boxShadow: {
        'custom': '0 10px 15px -3px rgb(0 0 0 / 0.1), 0 0 6px 0 rgb(0 0 0 / 0.05)',
      },
    },
    plugins: [
      require('@tailwindcss/typography'),
    ],
  }
}