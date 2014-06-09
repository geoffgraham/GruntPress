module.exports = {
  defaults: {
    options: {
      prefix : 'shape-',
      formatting : {
        indent_size : 2
      }
    },
    files: {
      'development/lib//images/svg/processed/svg-defs.svg': ['development/lib//images/svg/source/*.svg']
    },
  },
}