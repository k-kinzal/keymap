module.exports = function(grunt) {
  require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);
  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    s3: {
      options: {
        key: grunt.option('key'),
        secret: grunt.option('secret'),
        bucket: 'logn.in',
        region: 'ap-northeast-1',
        access: 'public-read'
      },
      deploy: {
        sync: [
          {
            src: 'html/*.html',
            dest: 'keymap/'
          }
        ]
      }
    }
  });

  // Default task(s).
  grunt.registerTask('deploy', ['s3']);

};