const purgecss = require ('@fullhuman/postcss-purgecss');

module.exports = {
    plugins: [
        purgecss({
            content: [
                './templates/**/*.html.twig',
                './assets/**/*.js',
                './src/Form/**/*.php',
            ],
        }),
        require('autoprefixer'),
    ]
}
