module.exports = {
  dist: {
    src: [
      'development/lib//bower_components/jquery/dist/jquery.min.js',
      'development/lib//bower_components/FitText.js/jquery.fittext.js',
      'development/lib//bower_components/Lettering.js/jquery.lettering.js',
      'development/lib//javascripts/source/*.js',
    ],
    dest: 'development/lib//javascripts/production/global.js'
  }
}