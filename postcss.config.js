const purgecss = require ('@fullhuman/postcss-purgecss');

module.exports = {
    plugins: [
        process.env.NODE_ENV === 'production'
            ? purgecss({
                content: [
                    './templates/**/*.html.twig',
                    './assets/**/*.js',
                    './src/Form/**/*.php',
                ],
                safelist: ['collapse', 'collapsing', 'show'],
            })
            : null,
        require('autoprefixer'),
    ],
};
