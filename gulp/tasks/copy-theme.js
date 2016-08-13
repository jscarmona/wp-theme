export default {
  name: 'copy-theme',
  config: {
    src: './dist/**/*',
    dest: '../../public/content/themes/wp-theme',
  },
  fn(config, end, error, gulp) {
    return gulp.src(config.src)
      .pipe(gulp.dest(config.dest));
  },
};
