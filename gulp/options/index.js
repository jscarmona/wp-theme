import babelify from 'babelify';
import envify from 'envify';

const SRC_PATH = './src';
const DEST_PATH = './dist/assets';

export default {
  browserify: {
    options: { transform: [babelify, envify] },
    src: `${SRC_PATH}/main.js`,
    dest: `${DEST_PATH}/js`,
    watchFiles: `${SRC_PATH}/**/*.js`,
    deps: ['eslint'],
  },
  sass: {
    src: `${SRC_PATH}/main.scss`,
    dest: `${DEST_PATH}/css`,
    watchFiles: `${SRC_PATH}/**/*.scss`,
    deps: ['sass-lint'],
  },
  eslint: {
    src: `${SRC_PATH}/**/*.js`,
  },
  sassLint: {
    src: `${SRC_PATH}/**/*.scss`,
    configFile: './.sass-lint.yml',
  },
  mocha: {
    src: `${SRC_PATH}/*.spec.js`,
    watchFiles: `${SRC_PATH}/*.js`,
    options: {
      compilers: 'js:babel-core/register',
    },
  },
  istanbul: {
    src: [
      `${SRC_PATH}/*.js`,
      `!${SRC_PATH}/*.spec.js`,
    ],
    testTask: 'mocha',
  },
  'copy-theme': {
    src: './dest/**/*',
    dest: '../public/content/themes',
  },
};
