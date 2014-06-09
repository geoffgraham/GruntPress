module.exports = {
  dist: {
    devFile: 'development/lib/bower_components/modernizr/modernizr.js',
    outputFile: 'development/lib/javascripts/production/modernizr-min.js',
    files: {
      src: [
        'development/lib/javascripts/**/*.js',
        'development/lib/styles/css/*.css',
      ]
    }
  }
}