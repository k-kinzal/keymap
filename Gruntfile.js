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
      deploy_selenium: {
        upload: [
          {
            src: 'html/*.html',
            dest: 'keymap/'
          }
        ]
      },
      deploy: {
        upload: [
          {
            src: 'build/keys.html',
            dest: 'keymap/keys.html'
          }
        ]
      }
    },
    exec: {
      mkdir: {
        command: 'mkdir -p build'
      },
      build: {
        command: 'php build.php > build/keys.html'
      }
    },
    htmlmin: {
      dist: {
        options: {
          removeComments: true,
          collapseWhitespace: true
        },
        files: {
          'build/keys.html': 'build/keys.html'
        }
      }
    },
  });

  // Default task(s).
  grunt.registerTask('deploy-selenium', ['s3:deploy_selenium']);
  grunt.registerTask('deploy', ['s3:deploy']);
  grunt.registerTask('build', [
    'exec:mkdir',
    'exec:build',
    'htmlmin'
  ]);

};