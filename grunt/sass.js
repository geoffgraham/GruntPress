module.exports = {
  dist: {
    options: {
      // add load paths
      loadPath: [
        'development/lib//bower_components/bourbon/dist/',
        'development/lib//bower_components/neat/app/assets/stylesheets/'
      ],
      // cssmin will minify later
      style: 'expanded',
    },
    files: {
      'development/lib//styles/css/style.css': 'development/lib//styles/scss/style.scss',
      'development/lib//styles/css/ie.css': 'development/lib//styles/scss/ie.scss'
    }
  }
}