<?php

namespace Deployer;

require 'recipe/symfony.php';

// Config

set('application', 'roger-beer.ch');
set('repository', 'git@github.com:TheFakeCake/roger-beer.com.git');
set('assets_build_path', 'public/build/');
set('bin/composer', 'composer2');
set('http_user', function () {
    return run('whoami');
});

add('shared_files', ['public/.htaccess']);
// add('shared_dirs', []);
// add('writable_dirs', []);

// Hosts

host('staging')
    ->setHostname('dev.roger-beer.ch')
    ->setDeployPath('~/sites/dev.{{application}}')
    ->setRemoteUser('ht42s_cake')
;

host('production')
    ->setHostname('www.roger-beer.ch')
    ->setDeployPath('~/sites/www.{{application}}')
    ->setRemoteUser('ht42s_cake')
;

// Tasks

desc('Install and build assets locally with Yarn');
task('build:assets', function () {
    run('yarn install');
    run('yarn build');
})->local();

desc('Upload local assets on remote host');
task('deploy:assets', function () {
    if (test('[ -d {{assets_build_path}} ]')) {
        upload('{{assets_build_path}}', '{{release_path}}/{{assets_build_path}}');
    } else {
        throw new \Exception('Built assets do not exist. Run the build:assets task before deploy:assets.');
    }
})->local();

task('deploy', [
    'deploy:prepare',
    'deploy:vendors',
    'build:assets',
    'deploy:assets',
    'deploy:cache:clear',
    'deploy:cache:warmup',
    'deploy:publish',
]);

after('deploy:failed', 'deploy:unlock');
