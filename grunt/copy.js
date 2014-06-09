module.exports = {
  main: {
    files: [
      {
        // Move CSS files from development to production
        expand: true,
        flatten: true,
        src: ['development/lib/styles/css/*-min.css', 'development/lib/styles/css/*.map'],
        dest: 'production/wp-content/themes/BlankPress/lib/styles/',
        filter: 'isFile'
      },
      {
        // Move JS files from development to production
        expand: true,
        flatten: true,
        src: ['development/lib/javascripts/production/*-min.js'],
        dest: 'production/wp-content/themes/BlankPress/lib/javascripts/',
        filter: 'isFile'
      },
      {
        // Move images from development to production
        expand: true,
        flatten: true,
        src: ['development/lib/images/*'],
        dest: 'production/wp-content/themes/BlankPress/lib/images/',
        filter: 'isFile'
      },
      {
        // Move SVG icons from development to production
        expand: true,
        flatten: true,
        src: ['development/lib/images/svg/processed/*'],
        dest: 'production/wp-content/themes/BlankPress/lib/images/',
        filter: 'isFile'
      },
      {
        // Move font files from development to production
        expand: true,
        flatten: true,
        src: ['development/lib/fonts/*'],
        dest: 'production/wp-content/themes/BlankPress/lib/fonts/',
        filter: 'isFile'
      },
    ]
  },
}