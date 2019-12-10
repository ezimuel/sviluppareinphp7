<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

$ffi = FFI::cdef("
    typedef unsigned int time_t;
    typedef unsigned int suseconds_t;

    struct timeval {
        time_t      tv_sec;
        suseconds_t tv_usec;
    };

    struct timezone {
        int tz_minuteswest;
        int tz_dsttime;
    };

    int gettimeofday(struct timeval *tv, struct timezone *tz);
", "libc.so.6");
// crea le strutture dati C
$tv = $ffi->new("struct timeval");
$tz = $ffi->new("struct timezone");
// esegue la funzione C gettimeofday()
$ffi->gettimeofday(FFI::addr($tv), FFI::addr($tz));
var_dump($tv);
var_dump($tz);
