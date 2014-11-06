		module.exports = function(grunt) {

		<!--  // Project configuration. -->
		 grunt.initConfig({
		     pkg: grunt.file.readJSON('package.json'),

		     sass: {
		      dist: {
		          options: {
		            style: 'expanded'
		          },
		          files: {
		            'style.css': 'style.scss'
		          }
		  		}
		  	},

		  	watch: {
		  	  css: {
		  	    files: '**/*.scss',
		  	    tasks: ['sass'],
		  	    options: {
		  	      livereload: true,
		  	    }
		  	  }
		  	},
		  	
		 });

		 grunt.loadNpmTasks('grunt-contrib-sass');
		 grunt.loadNpmTasks('grunt-contrib-watch');

		 <!-- // Default task(s). -->
		 grunt.registerTask('default', ['sass', 'watch']);

		 };