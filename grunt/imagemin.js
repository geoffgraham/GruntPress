module.exports = {
  dynamic: {
    files: [{
      expand: true,
      cwd: 'development/lib//images/',
      src: ['**/*.{png,jpg,gif}'],
      dest: 'development/lib//images/'
    }]
  },
}