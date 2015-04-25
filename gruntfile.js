/**
 * Grunt Wordpress helper and validator.
 * @author Ephraim Gregor
 * @copyright USATODAY Sports Media Group
 * @package lawrence-dev-tools
 */

module.exports = function( grunt ) {
	'use strict';

	grunt.initConfig({
		watch: {
			options: {
				spawn: false,
				livereload: true
			},
			stylus: {
				files: [ 'stylus/**/*.styl' ],
				tasks: [ 'stylus', 'csslint' ]
			},
			html: {
				files: [ 'index.php', 'character.html', 'character.md' ]
			}
		},

		stylus: {
			compile: {
				options: {
					'include css': true,
					compress: false,
					import: [ 'nib' ]
				},
				files: {
					'style.css' : 'stylus/style.styl'
				}
			}
		},
		csslint: {
			strict: {
				options: {
					csslintrc: '.csslintrc',
					import: 2

				},
				src: [ 'style.css' ]
			}
		}
	});

	require( 'load-grunt-tasks' )( grunt );

	grunt.option( 'force', true );

	grunt.registerTask( 'default', [ 'watch' ] );
	grunt.registerTask( 'compile', [ 'stylus' ] );
};