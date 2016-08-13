export default {
  name: 'copy-theme',
  config: {
    src: './dist/**/*',
    dest: '../public/content/themes',
  },
  fn(config, end, error, gulp) {
    return gulp.src(config.src)
      .pipe(gulp.dest(config.dest));
  },
};
