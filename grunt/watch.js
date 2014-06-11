module.exports = {
  options: {
    livereload: true,
  },
  scripts: {
    files: ['development/lib/javascripts/source/*.js', 'development/lib/bower_components/**/*/*.js'],
    tasks: ['jshint', 'concat', 'uglify'],
    options: {
      spawn: false,
    },
  },
  css: {
    files: ['development/lib/styles/scss/*.scss','development/lib//styles/scss/**/*.scss' ],
    tasks: ['sass', 'autoprefixer', 'cssmin'],
    options: {
      spawn: false,
    },
  },
  images: {
    files: ['development/lib/images/*.{png,jpg,gif}'],
    tasks: ['imagemin'],
    options: {
      spawn: false,
    },
  },
  svg: {
    files: ['development/lib/images/svg/source/*.{svg}'],
    tasks: ['svgstore'],
    options: {
      spawn: false,
    },
  },
  html:{
    files: ['./**/*.html'],
    tasks: [],
    options: {
      spawn: false,
    },
  },
  php:{
    files: ['./**/*.php'],
    tasks: [],
    options: {
      spawn: false,
    },
  },
}