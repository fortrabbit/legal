#!/usr/bin/perl

use strict;
use warnings;
use POSIX ":sys_wait_h";


my @pids;
push @pids, run("/usr/sbin/php-fpm7.1 -c /etc/php/7.1/fpm/php.ini -y /etc/php/7.1/fpm/fpm-actual.conf");
#push @pids, run(q|/usr/sbin/nginx -q -t -g 'daemon on; master_process on;'|);
push @pids, run(q|/etc/init.d/apache2 start|);

while (1) {
    my $stopped = 0;
    foreach my $pid(@pids) {
        $stopped++ if waitpid($pid, WNOHANG) > 0;
    }
    last if $stopped == scalar @pids;
    sleep(1);
}


sub run {
    my ($cmd) = @_;
    my $pid = fork();
    if (!defined $pid) {
        die("Could not fork");
    } elsif ($pid) {
        return $pid;
    } else {
        exec($cmd);
    }
}

