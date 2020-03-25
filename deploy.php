<?php
namespace Deployer;

require_once 'recipe/common.php';

host('duluthdiner.com')
    ->stage('production')
    ->user('duluthdiner', 'user is {{user}}')
    ->set('http_user', 'duluthdiner')
    // ->set('password', 'PzPsr19J0XSIig')
    ->set('deploy_path', '~/public_html')
    ->set('keep_releases', '5')
    ->set('repository', 'git@github.com:peb7268/duluthdiner2017.git')
    ->set('git_tty', true);

// task('node:install', function(){
//     run('wget -qO- https://cdn.rawgit.com/creationix/nvm/master/install.sh | bash');
//     run('source ~/.bash_profile');
//     run('nvm install stable');
//     run('cd public_html/current/wp-content/themes/primepainters');
//     run('npm install');
// });

task('deploy', [
    'deploy:info',
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    // 'deploy:shared',
    // 'deploy:vendors',
    'deploy:writable',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
])->desc('Deploy your project');
// after('deploy', 'node:install');
// after('node:install', 'success');
after('deploy', 'success');



/**
 * Installing Node on Bluehost
 * wget -qO- https://cdn.rawgit.com/creationix/nvm/master/install.sh | bash
 * source ~/.bash_profile
 * nvm install stable
 * cd public_html/current/wp-content/themes/primepainters
 * npm install
 */