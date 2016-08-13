import yargs from 'yargs';
import path from 'path';
import { IGNITE_UTILS } from 'gulp-ignite/utils';

export default {
  name: 'copy-theme',
  config: {
    src: './dist/**/*',
    base: path.join(process.cwd(), 'dist'),
    dest: '../../public/content/themes/wp-theme',
  },
  fn(config, end, error, gulp) {
    if (yargs.argv.w || yargs.argv.watch) {
      gulp.watch(config.src, (file) => {
        gulp.src(file.path, { base: config.base })
          .pipe(gulp.dest(config.dest))
            .on('end', () => {
              IGNITE_UTILS.log(`Copied file ${file.path}`);
            });
      });
    }

    return gulp.src(config.src)
      .pipe(gulp.dest(config.dest));
  },
};
