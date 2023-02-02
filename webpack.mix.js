// webpack.mix.js

let mix = require('laravel-mix');
require('mix-tailwindcss');

mix
  .setPublicPath('dist')
  .setResourceRoot('./')
  .autoload({
    jquery: ['$', 'window.jQuery']
  })
  .js('assets/js/main.js', 'dist')
  .sass('assets/sass/main.sass', 'dist')
  .tailwind()

  .disableNotifications()
  .browserSync({
    proxy: "parsberg.local",
    files: ["./**/*.php", "./dist/*.js", "./dist/*.css"]
  });

if (!mix.inProduction()) {
  mix
    .webpackConfig({
      devtool: "source-map"
    })
    .sourceMaps();
}

if (mix.inProduction()) {
  mix.version();
}