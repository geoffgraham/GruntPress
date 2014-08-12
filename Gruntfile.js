/*

TO DO

1) Can livereload work with MAMP?
  - Using enqueue_script in functions.php: http://robandlauren.com/2014/02/05/live-reload-grunt-wordpress/
  - Seems like any solution is a hack
  - Currently just opening localhost:8888 with grunt prod command
  

2) Decide on a deployment plugin
  - DPLOY: https://github.com/LeanMeanFightingMachine/grunt-dploy
  - grunt-wordpress-deploy: https://github.com/webrain/grunt-wordpress-deploy
  - grunt-ftp-deploy: https://github.com/zonak/grunt-ftp-deploy

*/

'use strict';
module.exports = function(grunt) {

  // Tasks are configured in partials located in grunt/
  require('load-grunt-config')(grunt);
  
  // By default, connect to a server and watch for changed files
  grunt.registerTask('default', ['connect:dev','watch']);
  
  // We can start MAMP then run this task to view Production
  grunt.registerTask('prod', ['connect:prod']);
  
  // If we're working with PHP files in Development, connect to this server as well
  grunt.registerTask('phpserver', ['php:dev', 'watch']);
  
  // Let's process our development files for Production
  grunt.registerTask('process', ['concat', 'uglify', 'sass', 'autoprefixer', 'cssmin', 'modernizr', 'imagemin']);
  
  // Or process SASS by itself
  // Now, let's move things to the Production directory
  grunt.registerTask('css', ['sass', 'autoprefixer', 'cssmin']);
  
  // Or process JS by itself
  grunt.registerTask('js', ['concat', 'uglify']);
  
  // Now, let's move our assets to the Production directory
  grunt.registerTask('move', ['copy']);
  
  // Turn those SVGs into a sprite
  grunt.registerTask('svg', ['svgstore']);

};