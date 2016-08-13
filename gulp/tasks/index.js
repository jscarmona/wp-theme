import browserify from 'gulp-ignite-browserify';
import sass from 'gulp-ignite-sass';
import mocha from 'gulp-ignite-mocha';
import sassLint from 'gulp-ignite-sass-lint';
import eslint from 'gulp-ignite-eslint';
import istanbul from 'gulp-ignite-istanbul';

import dev from './dev';

export default [
  browserify,
  sass,
  mocha,
  sassLint,
  eslint,
  istanbul,
  dev,
];
