export default {
  name: 'dev',
  description: 'Run during development. [\'browserify\', \'sass\']',
  run: ['browserify', 'sass', 'copy-theme'],
};
