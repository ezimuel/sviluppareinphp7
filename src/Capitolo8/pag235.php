<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

namespace Deployer;
require 'recipe/zend_framework.php';

// Configuration
set('repository', 'https://github.com/zendframework/ZendSkeletonApplication');
set('git_tty', true);
add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts
host('project.com')
->stage('production')
->set('deploy_path', '/var/www/project.com');

host('beta.project.com')
->stage('beta')
->set('deploy_path', '/var/www/project.com');

// Tasks
desc('Restart PHP-FPM service');
task('php-fpm:restart', function () {
    // The user must have rights for restart service
    // /etc/sudoers: username ALL=NOPASSWD:/bin/systemctl restart php-fpm.service
    run('sudo systemctl restart php-fpm.service');
});
after('deploy:symlink', 'php-fpm:restart');
// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');
