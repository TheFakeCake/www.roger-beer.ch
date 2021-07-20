<?php

namespace Deployer;

require 'recipe/symfony.php';

// Config

set('application', 'roger-beer.com');
set('repository', 'git@github.com:TheFakeCake/roger-beer.com.git');
set('assets_build_path', 'public/build/');

// add('shared_files', []);
// add('shared_dirs', []);
// add('writable_dirs', []);

// Hosts

host('staging')
    ->setHostname('192.168.1.133')
    ->setDeployPath('/var/www/{{application}}')
    ->setRemoteUser('cake')
    ->set('http_user', 'www-data')
    ->set('env', ['APP_ENV' => 'prod'])
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
