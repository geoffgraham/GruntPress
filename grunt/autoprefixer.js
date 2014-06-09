module.exports = {
  options: {
    browsers: ['last 2 version']
  },
  multiple_files: {
    expand: true,
    flatten: true,
    src: 'development/lib//styles/css/*.css',
    dest: 'development/lib//styles/css/',
  },
}