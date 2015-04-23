module.exports = function(grunt) {

	// Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		// Autoprefexer
		autoprefixer: {
	        dist: {
				src: 'style.css',
				dest: 'style.css'
			},
			dev: {
				src: 'css/dev.style.css',
				dest: 'css/dev.style.css'
			},
		},

		// Concat JS
	    concat: {
	        dist: {
	            src: [
	                'js/lib/no-conflict/no-conflict.js',
	                'js/lib/skip-navigation/skip-navigation.js',
	                'js/lib/forms/forms.js',
	                'js/lib/equal-heights/equal-heights.js',
	            ],
	            dest: 'js/lib/dev.scripts.js',
	        }
	    },

	    // CSSmin
	    cssmin: {
			target: {
				files: {
					'style.css': 'style.css'
				}
			}
        },

	    // Jshint
	    jshint: {
	        files: ['Gruntfile.js', 'js/lib/dev.scripts.js'],
			options: {
				globals: {
					jQuery: true
				}
			}
	    },

	    // JSValidate
	    jsvalidate: {
			options:{
				globals: {},
				esprimaOptions: {},
				verbose: false
			},
			dist:{
				files:{
					src: 'js/lib/dev.scripts.js'
				}
			}
		},

	    // Sass
		sass: {
			dist: {
				options: {
					style: 'expanded',
					require: ['susy', 'normalize-scss'],
					sourcemap: 'none'
				},
				files: {
					'style.css': 'sass/global.scss',
					'css/dev.style.css': 'sass/global.scss',
					'css/ie8.style.css': 'sass/ie8.scss',
					'css/ie9.style.css': 'sass/ie9.scss',
				}
			}
		},

		// Uglify
        uglify: {
            options: {
                mangle: false,
                compress: true,
            },
            dist: {
                files: {
                    'js/scripts.min.js': ['js/lib/dev.scripts.js']
                }
            }
        },

	    // Watch
	    watch: {
            livereload: {
                options: {livereload: true},
				files: ['*.css', 'js/*.js', '*.html', '*.php', 'images/*'],
            },
            scripts: {
                files: ['js/**/*.js'],
                tasks: ['jshint', 'jsvalidate', 'concat', 'uglify'],
                options: {
                    spawn: false,
                },
            },
            css: {
              files: ['sass/**/*.scss'],
              tasks: ['sass', 'autoprefixer', 'cssmin']
            }
        }

	});
	
	// Autoprefixer
	grunt.loadNpmTasks('grunt-autoprefixer');
    // Concat
    grunt.loadNpmTasks('grunt-contrib-concat');
    // CSSmin
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    // Jshint
    grunt.loadNpmTasks('grunt-contrib-jshint');
    // JSValidate
    grunt.loadNpmTasks('grunt-jsvalidate');
    // Uglify
    grunt.loadNpmTasks('grunt-contrib-uglify');
    // Watch
    grunt.loadNpmTasks('grunt-contrib-watch');
    // Sass
    grunt.loadNpmTasks('grunt-contrib-sass');

    grunt.registerTask('default', ['watch']);
    grunt.registerTask('build', ['clean', 'copy']);

};